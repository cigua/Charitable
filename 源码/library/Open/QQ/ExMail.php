<?php

/**
 * 企业邮箱
 * 新增  Open_QQ_ExMail::syncDept(2, '/', '行政部/人事')
 * 修改  Open_QQ_ExMail::syncDept(3, '行政部/人事', '行政部/行政组')
 * 删除  Open_QQ_ExMail::syncDept(1, '/', '人事')
 *
 * @author: moxiaobai(mlkom@live.com)
 * @since : 2016-01-25 
 */

class Open_QQ_ExMail {

    /**
     * 修改部门
     *
     * @param $srcPath   action为2需要，源部门
     * @param $dstPath   目标部门
     * @return mixed
     */
    public static function editDept($srcPath, $dstPath) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/party/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 3,
            'srcpath'       => $srcPath,
            'dstpath'       => $dstPath,
        );
        return self::curlPost($url, $data);
    }

    /**
     * 添加部门
     *
     * @param $dstPath
     * @return mixed
     */
    public static function addDept($dstPath) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/party/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 2,
            'dstpath'       => $dstPath,
        );
        return self::curlPost($url, $data);
    }

    /**
     * 删除部门
     *
     * @param $dstPath
     * @return mixed
     */
    public static function deleteDept($dstPath) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/party/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 1,
            'dstpath'       => $dstPath,
        );
        return self::curlPost($url, $data);
    }

    /**
     * 添加，修改部门
     *
     * @param $email     邮件地址
     * @param $name      姓名
     * @param $gender    性别
     * @param $postion   职位
     * @param $mobile    手机号码
     * @param $password  密码
     * @param $partypath 部门
     * @param $opentype  是否启动，1启用，2禁用
     * @return mixed
     */
    public static function addUser($email, $name, $gender, $postion, $mobile, $password, $partypath, $opentype) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/user/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 2,
            'alias'         => $email,
            'name'          => $name,
            'gender'        => $gender,
            'postion'       => $postion,
            'mobile'        => $mobile,
            'password'      => $password,
            'partypath'     => $partypath,
            'opentype'      => $opentype,
        );
        return self::curlPost($url, $data);
    }

    /**
     * 修改密码
     *
     * @param $email
     * @param $password
     * @return mixed
     */
    public static function editPassword($email, $password) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/user/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 3,
            'alias'         => $email,
            'password'      => $password
        );
        return self::curlPost($url, $data);
    }

    public static function editUser($email, $name, $gender, $postion, $mobile, $partypath) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/user/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 3,
            'alias'         => $email,
            'name'          => $name,
            'gender'        => $gender,
            'postion'       => $postion,
            'mobile'        => $mobile,
            'partypath'     => $partypath
        );
        return self::curlPost($url, $data);
    }

    /**
     * 删除部门
     *
     * @param $email   邮件地址
     * @return mixed
     */
    public static function deletUser($email) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/user/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 1,
            'alias'         => $email,
        );
        return self::curlPost($url, $data);
    }

    /**
     * 禁用账号
     *
     * @param $email
     * @return mixed
     */
    public static function disableUser($email) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/user/sync';

        $data = array(
            'access_token'  => $token,
            'action'        => 3,
            'alias'         => $email,
            'opentype'      => 2
        );
        return self::curlPost($url, $data);
    }

    /**
     * 获取未读邮件数
     *
     * @param $email
     * @return mixed
     */
    public static function unreadEmail($email) {
        $token = self::getToken();
        $url   = 'http://openapi.exmail.qq.com:12211/openapi/mail/newcount';

        $data = array(
            'access_token'  => $token,
            'alias'         => $email,
        );
        return self::curlPost($url, $data);
    }

    //获取token
    public static function getToken() {
        $url = "https://exmail.qq.com/cgi-bin/token";
        $data = array(
            'grant_type'    => 'client_credentials',
            'client_id'     => 'comylife',
            'client_secret' => '84e8c621a6beb196c2a9b45d5692f726'
        );

        $ret = self::curlPost($url, $data);
        return $ret['access_token'];
    }

    public static function curlGet($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $ret = curl_exec($ch);
        curl_close($ch);

        return $ret;
    }

    public static function curlPost($url, $data) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        $ret = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($ret, true);
        return $data;
    }
}