<?php

/**
 * 管理员
 *
 * @author: moxiaobai
 * @since : 2016/1/29 16:06
 */

class CompanyController extends BaseController {

    private $_pageSize;
    private $_model;
    private $_status = array(
        1 => '正常',
        2 => '禁用',
    );

    private $_check = array(
        1 => '审批通过',
        2 => '审批未通过',
    );

    private function init() {
        $this->_model = new CompanyModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {
        $this->initPageTitle('机构管理');

        $name   = isset($_GET['name']) ? Helper_Filter::format($_GET['name']) : '';
        $prov   = isset($_GET['prov']) ? Helper_Filter::format($_GET['prov']) : '';
        $city   = isset($_GET['city']) ? Helper_Filter::format($_GET['city']) : '';
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array('username'=>$name,'prov'=>$prov,'city'=>$city,);
        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = $this->_model->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        //数据列表
        $data = $this->_model->getList( $where, $pagination );
        $data = CashsModel::getInstance()->mergData($data,'c_id',1);//1为机构id


        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'name'      => $name,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode,
            'prov'      => $prov,
            'city'      => $city,
            'check' => $this->_check,
        ));
    }

    /**
     * 上传封面
     */
    public function uploadCompanyAction() {
        $upload = new Images_Upload( $_FILES['upload_Company'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'company/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    //表单页
    public function formAction($id=0) {
        $id = intval($id);

        $row = array();
        if($id > 0) {
            $row  = $this->_model->getInfo($id);

            // 获得所有组图列表
            $imglist = CompanyImgModel::getInstance()->getList(array('c_id' => $id));
            $count = $imglist ? count($imglist) : 0;
        }else{
            $row = array(
                'c_id' => '',
                'c_phone' => '',
                'c_avatar' => '',
                'c_password' => '',
                'c_name' => '',
                'c_prov' => '',
                'c_city' => '',
                'c_addr' => '',
                'c_des' => '',
                'c_username' => '',
                'c_userphone' => '',
                'c_userID' => '',
                'c_createTime' => date('Y-m-d'),
                'c_open_img' => '',
                'c_company_img' => '',
            );
        }


        $this->getView()->assign(array(
            'row' => $row,
            'count' => $count,
            'imglist' => $imglist,
            'statusOption' => Helper_Form::option($this->_status, intval($row['c_status']), '请选择状态'),
            'checkOption' => Helper_Form::option($this->_check, intval($row['c_check_status']), '请选择状态'),
        ));

    }

    //修改密码表单页
    public function formPasswordAction($id=0) {
        $id = intval($id);
        $this->getView()->assign('id', $id);
    }

    /**
     * 上传用户头像
     */
    public function uploadAvatarAction() {
        $upload = new Images_Upload( $_FILES['upload_avatar'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'company/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    /**
     * 上传用户头像
     */
    public function uploadAction() {
        $upload = new Images_Upload( $_FILES['upload_open'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'company/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }

    public function upload2Action() {
        $upload = new Images_Upload( $_FILES['upload'] );
        // Allow img file uploaded.
        $upload->setTypeCode('IMG');
        // Set max file size 500 KB
        $upload->setMaxSize(0);
        // Set min height width
//        $upload->setImageMinAttr(150, 150);
        $path   = 'company/';
        $return = $upload->upload($path, time() .'.jpg');
        if ( $return['status'] <= 0 ) {
            Helper_Json::formJson($return);
        }

        Helper_Json::formJson($return, 'y');
    }



}