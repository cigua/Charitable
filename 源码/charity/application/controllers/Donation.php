<?php

/**
 * 慈善管理
 *
 * @author: monyyip
 * @since : 2016/5/31 16:43
 */

class DonationController extends BaseController {

    private $_pageSize;
    private $_model;
    private $_companyModel;
    private $_bankModel;
    private $_personalModel;
    private $_status = array(
        1 => '正常',
        2 => '禁用'
    );

    private $_menuList = array(
        'basic' => '基本信息',
        'personal' => '个人资料',
        'bank' => '银行信息',
    );

    private $_bankType = array(
        1 => '个人银行',
        2 => '对公银行',
    );

    private function init() {
        $this->_model = new DonationModel();
        $this->_companyModel = new CompanyModel();
        $this->_bankModel = new BankModel();
        $this->_personalModel = new PersonInfoModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {
        $this->initPageTitle('慈善商品');
        $title   = isset($_GET['title']) ? Helper_Filter::format($_GET['title']) : '';
        $type = isset($_GET['type']) ? intval($_GET['type']) : 0;
        $status = isset($_GET['status']) ? intval($_GET['status']) : 0;
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array('title'=>$title, 'type' => $type, 'status' => $status);
        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = $this->_model->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        $data = $this->_model->getList( $where, $pagination );
        $data = $this->_companyModel->mergeData($data);
//        $categoryOption = Helper_Form::option($this->_type, intval($type), '请选择分类');
        $companyList = $this->_companyModel->getCompanyOption();
        $companyOption = Helper_Form::option($companyList, intval($type), '请选择机构');
        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'title'      => $title,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode,
            'cateList' => $this->_type,
//            'categoryOption' => $categoryOption,
            'companyOption' => $companyOption,
            'companyList' => $companyList,
            'statusOption' => Helper_Form::option($this->_status, intval($status), '请选择状态')
        ));
    }

    //表单页
    public function formAction($id=0) {
        $id = intval($id);
        $row = array();
        if($id > 0) {
            $row  = $this->_model->getInfo($id);
            $personInfo = $this->_personalModel->getInfo($row['d_person']);
            $bankInfo = $this->_bankModel->getInfo($personInfo['p_bank']);
            // 获得所有组图列表
            $imglist = DonationImgModel::getInstance()->getList(array('d_id' => $id));
            $count = $imglist ? count($imglist) : 0;

            // 获得资金使用
            $moneyList = MoneyUsedModel::getInstance()->getList(array('p_id' => $personInfo['p_id']));
            $moneycount = $moneyList ? count($moneyList) : 0;
        }else{
            $row = array(
                'd_id' => '',
                'c_id' => '',
                'd_title' => '',
                'd_content' => '',
                'd_img' => '',
                'd_person' => '',
                'd_company_img' => '',
                'd_target' => '',
                'd_endTime' => '',
                'd_status' => '',

            );

            $personInfo = array(
                'p_id' => '',
                'p_realname' => '',
                'p_idCard' => '',
                'p_phone' => '',
                'p_img' => '',
                'p_bank' => '',
                'p_status' => '',
                'p_addtime' => '',
            );

            $bankInfo = array(
                'b_id' => '',
                'm_id' => '',
                'b_type' => '',
                'b_name' => '',
                'b_number' => '',
                'b_bankName' => '',
                'b_addtime' => '',
            );

            $imglist = array();
            $count = 0;

            $moneyList = array();
            $moneycount = 0;
        }

        $companyList = $this->_companyModel->getCompanyOption();
        $companyOption = Helper_Form::option($companyList, intval($row['c_id']), '请选择公机构');
        $bankOption = Helper_Form::option($this->_bankType, intval($bankInfo['b_type']), '请选择银行类型');
        $this->getView()->assign('row', $row);
        $this->getView()->assign('personInfo', $personInfo);
        $this->getView()->assign('bankInfo', $bankInfo);
        $this->getView()->assign('bankOption', $bankOption);

        $this->getView()->assign('imglist', $imglist);
        $this->getView()->assign('count', $count);
        $this->getView()->assign('moneyList', $moneyList);
        $this->getView()->assign('moneycount', $moneycount);
        $this->getView()->assign('menuList' , $this->_menuList);
        $this->getView()->assign('companyOption', $companyOption);
        $this->getView()->assign( 'statusOption' , Helper_Form::option($this->_status, intval($row['d_status']), '请选择状态'));
    }

    /**
     * 上传封面
     */
    public function uploadAction() {
        $upload = new Images_Upload( $_FILES['upload'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'donation/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    /**
     * 上传封面
     */
    public function uploadPersonalUsedAction() {
        $upload = new Images_Upload( $_FILES['upload_PersonalUsed'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'donation/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    /**
     * 上传封面
     */
    public function uploadDonationAction() {
        $upload = new Images_Upload( $_FILES['upload_Donation'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'donation/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    public function uploadImgAction() {
        $upload = new Images_Upload( $_FILES['upload_company'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'donation/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    /**
     * 上传封面
     */
    public function uploadPersonalAction() {
        $upload = new Images_Upload( $_FILES['upload_personal'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'donation/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    public function saveAction(){
        $post = $this->getRequest()->getPost();
        $id = intval($post['id']);
        unset($post['id']);
        if($id){
            // 保存银行信息
            $b_id = $post['b_id'];
            $bankInfo = array(
                'b_type' => $post['b_type'],
                'b_name' => $post['b_name'],
                'b_number' => $post['b_number'],
                'b_bankName' => $post['b_bankName']
            );

            $bankId = $this->_bankModel->saveData($bankInfo, $b_id);
            $p_id = $post['p_id'];
            // 保存个人资料
            $persionInfo = array(
                'p_realname' => $post['p_realname'],
                'p_idCard' => $post['p_idCard'],
                'p_phone' => $post['p_phone'],
                'p_img' => $post['p_img'],
                'p_status'=> $post['p_status'],
                'p_bank' => $b_id,
                'p_addtime' => date('Y-m-d H:i:s')
            );

            $personId = $this->_personalModel->saveData($persionInfo, $p_id);
            // 保存资金用途图片
            $file = $post['file_money'];
            if(count($file) > 9){
                Helper_Json::formJson('只可上传9张资金用途');
            }

            MoneyUsedModel::getInstance()->deleteData($p_id);
            if($file){
                foreach($file as $val){
                    $data = array(
                        'mu_pid' => $p_id,
                        'mu_img' => $val
                    );

                    MoneyUsedModel::getInstance()->saveData($data);
                }
            }

            // 保存慈善资料
//            $id = $post['id'];
//            echo 'aa';die;
            $baseInfo = array(
                'c_id' => $post['c_id'],
                'd_title' => $post['d_title'],
                'd_content' => $post['d_content'],
                'd_img' => $post['d_img'],
                'd_company_img' => $post['d_company_img'],
                'd_target' => $post['d_target'],
                'd_endTime'=> $post['d_endTime'],
                'd_status' => $post['d_status'],
                'd_person' => $p_id,
                'd_addTime' => date('Y-m-d H:i:s')
            );

            $ret = $this->_model->saveData($baseInfo, $id);
            // 保存资金用途图片
            $file = $post['file'];
            if(count($file) > 9){
                Helper_Json::formJson('只可上传9张慈善图片');
            }

            DonationImgModel::getInstance()->deleteData($id);
            if($file){
                foreach($file as $val){
                    $data = array(
                        'd_id' => $id,
                        'di_img' => $val
                    );

                    DonationImgModel::getInstance()->saveData($data);
                }
            }

            $msg = '修改';
        }else{
            // 保存银行信息
            $bankInfo = array(
                'b_type' => $post['b_type'],
                'b_name' => $post['b_name'],
                'b_number' => $post['b_number'],
                'b_bankName' => $post['b_bankName']
            );

            $bankId = $this->_bankModel->saveData($bankInfo);
            // 保存个人资料
            $persionInfo = array(
                'p_realname' => $post['p_realname'],
                'p_idCard' => $post['p_idCard'],
                'p_phone' => $post['p_phone'],
                'p_img' => $post['p_img'],
                'p_status'=> $post['p_status'],
                'p_bank' => $bankId,
                'p_addtime' => date('Y-m-d H:i:s')
            );

            $personId = $this->_personalModel->saveData($persionInfo);
            // 保存资金用途图片
            $file = $post['file_money'];
            if($file){
                foreach($file as $val){
                    $data = array(
                        'mu_pid' => $personId,
                        'mu_img' => $val
                    );

                    MoneyUsedModel::getInstance()->saveData($data);
                }
            }

            // 保存慈善资料
            $baseInfo = array(
                'c_id' => $post['c_id'],
                'd_title' => $post['d_title'],
                'd_content' => $post['d_content'],
                'd_img' => $post['d_img'],
                'd_company_img' => $post['d_company_img'],
                'd_target' => $post['d_target'],
                'd_endTime'=> $post['d_endTime'],
                'd_status' => $post['d_status'],
                'd_person' => $personId,
                'd_addTime' => date('Y-m-d H:i:s')
            );

            $msg = '添加';
            $ret = $this->_model->saveData($baseInfo);
            // 保存资金用途图片
            $file = $post['file'];
            if(count($file) > 9){
                Helper_Json::formJson('只可上传9张慈善图片');
            }

            if($file){
                foreach($file as $val){
                    $data = array(
                        'd_id' => $ret,
                        'di_img' => $val
                    );

                    DonationImgModel::getInstance()->saveData($data);
                }
            }
        }

        if($ret){
            Helper_Json::formJson($msg . '成功', 'y');
        }else{
            Helper_Json::formJson($msg . '失败');
        }
    }

    public function statusAction($id = 0, $status = 1){
        if(empty($id)){
            Helper_Json::formJson('参数错误');
        }

        $data['d_status'] = $status == 1 ? 2  : 1;
        $ret = $this->_model->saveData($data, $id);
        $msg = '修改';
        if($ret){
            Helper_Json::formJson($msg . '成功', 'y');
        }else{
            Helper_Json::formJson($msg . '失败');
        }
    }

}