<?php

/**
 * 官网首页
 *
 * @author: monyyip
 * @since : 2016/06/05 16:43
 */

class CompanyController extends BaseController {
    public function indexAction() {
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        // 获得机构信息
        $companyInfo = CompanyModel::getInstance()->getInfo($id);
        if(empty($companyInfo)){
            $this->redirect('/index');
        }

        // 获得机构图片
        $where = array(
            'c_id' => $id
        );

        $companyImgs = CompanyImgModel::getInstance()->getList($where);

        // 获得捐款记录
        $where = array(
            'type' => $id,
        );

        $contributeList = ContributeModel::getInstance()->getList($where);
        // 获得商品列表
        $where = array(
            'type' => $id,
        );

        $productList = DonationModel::getInstance()->getList($where);
        $this->getView()->assign(array(
            'id' => $id,
            'companyImgs' => $companyImgs,
            'companyInfo' => $companyInfo,
            'contributeList' => $contributeList,
            'productList' => $productList,

        ));
    }

    /**
     * 注册页面
     */
    public function registerAction()
    {
        $baseInfo = Yaf_Session::getInstance()->get('baseInfo');
        $persionInfo = Yaf_Session::getInstance()->get('persionInfo');
        $proveInfo = Yaf_Session::getInstance()->get('proveInfo');
        $this->getView()->assign(array(
            'baseInfo' => $baseInfo,
            'persionInfo' => $persionInfo,
            'proveInfo' => $proveInfo,
        ));
    }

    public function baseAction(){
        $baseInfo = Yaf_Session::getInstance()->get('baseInfo');
        $this->getView()->assign(array(
            'baseInfo' => $baseInfo,
            'time' => date('Y-m-d', strtotime('+10 days'))
        ));
    }

    public function persionInfoAction(){
        $persionInfo = Yaf_Session::getInstance()->get('persionInfo');
        $this->getView()->assign(array(
            'persionInfo' => $persionInfo,
        ));
    }

    public function proveAction(){
        $proveInfo = Yaf_Session::getInstance()->get('proveInfo');
        $this->getView()->assign(array(
            'proveInfo' => $proveInfo,
        ));
    }

    /**
     * 上传用户头像
     */
    public function uploadAction($dir = 'company/') {
        $data = $_POST['image'];
        preg_match("/data:image\/(.*);base64,/", $data, $res);
        $ext = $res[1];
        if(!in_array($ext, array('jpeg','jpg','png','gif'))){
            Helper_Json::formJson('请上传图片');
        }

        $file = time() .'.'. $ext;
        $newfilepath = APP_UPLOAD_DIR . $dir . $file;
        $data = preg_replace("/data:image\/(.*);base64,/", '', $data);
        if(file_put_contents($newfilepath, base64_decode($data)) == false){
            Helper_Json::formJson('上传失败');
        }else{
            $data = array(
                'status' => 1,
                'msg'    => 'SUCCESS',
                'file'   =>	$dir . $file,
                'path'   => $newfilepath,
                'dir'	 => $dir,
                'http'	 => IMAGE_URL.$dir.$file
            );

            Helper_Json::formJson($data, 'y');
        }
    }



    public function successAction(){
        $password = isset($_GET['password']) ? Helper_Filter::format($_GET['password']) : '';
        $account = isset($_GET['account']) ? Helper_Filter::format($_GET['account']) : '';
        $this->getView()->assign(array(
            'password' => $password,
            'account' => $account
        ));
    }
}