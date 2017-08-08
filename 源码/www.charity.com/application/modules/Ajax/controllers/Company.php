<?php

/**
 * 小区管理员
 *
 * @author: moxiaobai
 * @since : 2016/2/1 17:19
 */

class CompanyController extends BaseController
{

    //初始化
    protected function init()
    {
        $this->isAjaxRequest();
        $this->isLogin();
        Yaf_Dispatcher::getInstance()->disableView();
    }

    public function baseAction(){
        // 基本数据过滤
        $data  = $this->getRequest()->getPost();
        if(empty($data['c_name'])){
            Helper_Json::formJson('请填写机构名称');
        }

        if(empty($data['c_createTime'])){
            Helper_Json::formJson('请填写机构创建时间');
        }

        if(empty($data['c_city'])){
            Helper_Json::formJson('请填写机构所在地');
        }

        if(empty($data['c_des'])){
            Helper_Json::formJson('请填写机构介绍');
        }

        if(empty($data['file'])){
            Helper_Json::formJson('请填写上传机构图片');
        }

        if(count($data['file']) > 9){
            Helper_Json::formJson('机构图片不能超过9张');
        }

        Yaf_Session::getInstance()->set('baseInfo', $data);
        Helper_Json::formJson('保存成功', 'y');
    }

    public function persionAction(){
        // 基本数据过滤
        $data  = $this->getRequest()->getPost();
        if(empty($data['username'])){
            Helper_Json::formJson('请填写登记人姓名');
        }

        if(empty($data['phone']) || !Helper_Check::isMobile($data['phone'])){
            Helper_Json::formJson('请填写联系电话');
        }

        if(empty($data['idCard']) || !Helper_Check::isIDCard($data['idCard'])){
            Helper_Json::formJson('请填写身份证');
        }

        Yaf_Session::getInstance()->set('persionInfo', $data);
        Helper_Json::formJson('保存成功', 'y');
    }

    public function proveAction(){
        $data  = $this->getRequest()->getPost();
        if(empty($data['c_open_img'])){
            Helper_Json::formJson('请上传开户证明');
        }

        if(empty($data['c_company_img'])){
            Helper_Json::formJson('请上传组织机构证明');
        }

        Yaf_Session::getInstance()->set('proveInfo', $data);
        Helper_Json::formJson('保存成功', 'y');
    }

    //新增保存数据
    public function saveAction() {
        $baseInfo = Yaf_Session::getInstance()->get('baseInfo');
        $persionInfo = Yaf_Session::getInstance()->get('persionInfo');
        $proveInfo = Yaf_Session::getInstance()->get('proveInfo');
        list($prov, $city) = explode(' ', $baseInfo['c_city']);
        // 判断机构名称是否存在

        $info = CompanyModel::getInstance()->getInfoByname($baseInfo['c_name']);

        if($info){
            Helper_Json::formJson('该机构已经申请过，请勿重复申请');
        }

        // 随机生成密码
        $password = '123456';
        $data = array(
            'c_accound' => $baseInfo['c_name'],
            'c_password' => $password,
            'c_avatar' => $baseInfo['file'][0],
            'c_phone'  => $persionInfo['phone'],
            'c_name'   => $baseInfo['c_name'],
            'c_prov'   => $prov,
            'c_city'   => $city,
            'c_addr'   => $baseInfo['c_city'],
            'c_des'    => $baseInfo['c_des'],
            'c_createTime' => $baseInfo['c_createTime'],
            'c_username' => $persionInfo['username'],
            'c_userphone' => $persionInfo['phone'],
            'c_userID'  => $persionInfo['idCard'],
            'c_check_status' => 2,
            'c_addTime' => date('Y-m-d H:i:s'),
            'c_open_img' => $proveInfo['c_open_img'],
            'c_company_img' => $proveInfo['c_company_img']
        );

        $result = CompanyModel::getInstance()->saveData($data);
        CompanyImgModel::getInstance()->deleteData($result);
        if($baseInfo['file']){
            foreach($baseInfo['file'] as $val){
                $imgData = array(
                    'c_id' => $result,
                    'ci_img' => $val
                );

                CompanyImgModel::getInstance()->saveData($imgData);
            }

            // 存10个商品
            $productArr = array(
                '衣服','学费','鞋子','食品','水','住宿','资金','书籍','交通'
            );

            foreach($productArr as $k => $val){
                $productData = array(
                    'c_id' => $result,
                    'p_title' => $val,
                    'p_content' => $val,
                    'p_img' => '/public/images/skin/wz_'.($k + 1) . '.jpg',
                    'p_price' => 1,
                    'p_addtime' => date('Y-m-d H:i:s'),
                    'p_order' => 1,
                    'p_status' => 1,
                );

                ProductModel::getInstance()->saveData($productData);
            }
        }

        $data = array(
            'account' => $baseInfo['c_name'],
            'password' => $password
        );

        Helper_Json::formJson($data, 'y');
    }


}