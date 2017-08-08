<?php

/**
 * 慈善管理
 *
 * @author: monyyip
 * @since : 2016/5/31 16:43
 */

class ArticleController extends BaseController {

    private $_pageSize;
    private $_model;
    private $_companyModel;
    private $_status = array(
        1 => '正常',
        2 => '禁用'
    );

    private $_type = array(
        1 => '常见问题',
        2 => '产品知识'
    );
    private function init() {
        $this->_model = new ArticleModel();
        $this->_companyModel = new CompanyModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {
        $this->initPageTitle('案例管理');
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
        }else{
            $row = array(
                'a_id' => '',
                'c_id' => '',
                'a_title' => '',
                'a_content' => '',
                'a_view' => '',
                'a_addTime' => '',
                'a_order' => '',
                'a_status' => '',
            );
        }

        if(A_ROLE == 0){
            $companyList = $this->_companyModel->getCompanyOption();
            $companyOption = Helper_Form::option($companyList, intval($row['c_id']), '请选择机构');
        }else{
            $companyList = $this->_companyModel->getCompanyOption();
            $companyData = array(A_ROLE=>$companyList[A_ROLE]);
            $companyOption = Helper_Form::option($companyData, intval(A_ROLE));
        }
        $this->getView()->assign('row', $row);
        $this->getView()->assign('companyOption', $companyOption);
        $this->getView()->assign( 'statusOption' , Helper_Form::option($this->_status, intval($row['a_status']), '请选择状态'));
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
        $path   = 'news/';
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
            $msg = '修改';
            $ret = $this->_model->saveData($post, $id);
        }else{
            $msg = '添加';
            $post['n_addtime'] = date('Y-m-d H:i:s');
            $ret = $this->_model->saveData($post);
        }

        if($ret){
            Helper_Json::formJson($msg . '成功', 'y');
        }else{
            Helper_Json::formJson($msg . '失败');
        }
    }

}