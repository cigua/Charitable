<?php

/**
 * 登录页面
 *
 * @author: moxiaobai
 * @since : 2016/1/28 16:19
 */

class LoginController extends BaseController {

    public function indexAction() {
        $this->initPageTitle('用户登录');

        $token = $this->initFormToken('login');
        $this->getView()->assign('token', $token);
    }

    public function logoutAction() {
        Yaf_Session::getInstance()->del('userInfo');

        $this->redirect('/login/index/');
    }

    //用户登录
    public function passportAction() {
        $this->isAjaxRequest();

        $params   = $this->getRequest()->getPost();
        $username  = isset($params['username']) ? $params['username'] : '';
        $password  = isset($params['password']) ? $params['password'] : '';
        $token     = isset($params['token']) ? $params['token'] : '';

        if(!$username || !$password || !$token) {
            Helper_Json::formJson('请输入帐号和密码');
        }

        //验证Token,防止非法请求
        if($token != Yaf_Session::getInstance()->get('login')) {
            Helper_Json::formJson('无效请求');
        }

        $result        = AdminModel::getInstance()->login($username, $password);
//        $companyResult = AdminModel::getInstance()->login($username, $password);

        if($result['code']==1) {
            Yaf_Session::getInstance()->del('login');
        }else{
            $companyResult = CompanyModel::getInstance()->login($username, $password);
            if($companyResult['code']==1){
                Yaf_Session::getInstance()->del('login');
                $this->eachJson($companyResult);die;
            }else{
                $this->eachJson($companyResult);
            }
        }

        $this->eachJson($result);
    }
}