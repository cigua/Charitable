<?php

/**
 * 慈善管理
 *
 * @author: monyyip
 * @since : 2016/5/31 16:43
 */

class ShareController extends BaseController {

    private $_pageSize;
    private $_model;
    private $_type = array(
        1 => '机构分享',
        2 => '慈善分享',
		3 => '其他分享',
    );

    private function init() {
        $this->_model = new ShareModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {
        $this->initPageTitle('案例管理');
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array();
        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = $this->_model->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        $data = $this->_model->getList( $where, $pagination );
        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode,
            'cateList' => $this->_type,
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
                's_id' => '',
                's_type' => '',
                's_title' => '',
                's_img' => '',
                's_content' => '',

            );
        }

        $this->getView()->assign('row', $row);
        $this->getView()->assign('typeOption', Helper_Form::option($this->_type, intval($row['s_type']), '请选择类型'));
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
        $path   = 'share/';
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
            $ret = $this->_model->saveData($post);
        }

        if($ret){
            Helper_Json::formJson($msg . '成功', 'y');
        }else{
            Helper_Json::formJson($msg . '失败');
        }
    }

}