<?php

/**
 * 企业号
 * 返回数据 errcode为0表示成功，其他都是错误
 *
 * @author: moxiaobai(mlkom@live.com)
 * @since : 2016-01-25 
 */

class Open_QQ_QyWeixin {

    /**
     * 创建新部门
     *
     * @param $parentId     父部门ID，根部门id为1
     * @param $id           部门ID
     * @param $name         部门名称
     * @param int $order    排序
     * @return mixed
     */
    public static function createDept($parentId, $id, $name, $order=1) {
        $token = self::getToken();
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/department/create?access_token={$token}";

        $data = array("name"=>$name, "parentid"=>$parentId, "order"=>$order, "id"=>$id);
        return self::curlPost($url, $data);
    }

    /**
     * 更新部门
     *
     * @param $id              部门ID
     * @param $name            部门名称
     * @param $parentId        父部门ID
     * @param int $order
     * @return mixed|string
     */
    public function updateDept($id, $name, $parentId, $order=1) {
        $token = self::getToken();
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/department/update?access_token={$token}";

        $data = array("id"=>$id, "name"=>$name, "parentid"=>$parentId, "order"=>$order);
        return self::curlPost($url, $data);
    }

    /**
     * 删除部门
     *
     * @param $id
     * @return mixed
     */
    public static function deleteDept($id) {
        $token = self::getToken();
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/department/delete?access_token={$token}&id={$id}";

        $ret = self::curlGet($url);
        return json_decode($ret , true);
    }

    /**
     * 添加用户
     *
     * @param $userid       用户ID，对应管理端的帐号
     * @param $name         成员名称
     * @param $department   成员所属部门id列表
     * @param $position     职位信息
     * @param $mobile       手机号码
     * @param $gender       性别。1表示男性，2表示女性
     * @param $email        邮箱。长度为0~64个字节。企业内必须唯一
     * @param $weixinid     微信号。企业内必须唯一。
     * @return mixed|string
     */
    public static function addUser($userid, $name, $department, $position, $mobile, $gender, $email, $weixinid) {
        $token = self::getToken();
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/user/create?access_token={$token}";

        $data = array(
            "userid"     =>$userid,
            "name"       =>$name,
            "department" =>$department,
            "position"   =>$position,
            "mobile"     => $mobile,
            "gender"     => $gender,
            "email"      => $email,
            "weixinid"   => $weixinid
        );
        return self::curlPost($url, $data);
    }

    /**
     * 更新用户
     *
     * @param $userid       用户ID，对应管理端的帐号
     * @param $name         成员名称
     * @param $department   成员所属部门id列表
     * @param $position     职位信息
     * @param $mobile       手机号码
     * @param $gender       性别。1表示男性，2表示女性
     * @param $email        邮箱。长度为0~64个字节。企业内必须唯一
     * @param $weixinid     微信号。企业内必须唯一。
     * @param $enable       启用/禁用成员。1表示启用成员，0表示禁用成员
     * @return mixed|string
     */
    public static function updateUser($userid, $name, $department, $position, $mobile, $gender, $email, $weixinid, $enable=1) {
        $token = self::getToken();
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/user/update?access_token={$token}";

        $data = array(
            "userid"     =>$userid,
            "name"       =>$name,
            "department" =>$department,
            "position"   =>$position,
            "mobile"     => $mobile,
            "gender"     => $gender,
            "email"      => $email,
            "weixinid"   => $weixinid,
            "enable"     => $enable,
        );
        return self::curlPost($url, $data);
    }

    /**
     * 删除用户
     * @param $userid   员UserID。对应管理端的帐号
     * @return mixed
     */
    public static function deleteUser($userid) {
        $token = self::getToken();
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/user/delete?access_token={$token}&userid={$userid}";

        $ret = self::curlGet($url);
        return json_decode($ret , true);
    }

    /**
     * 邀请用户
     *
     * @param $userid
     * @return mixed|string
     */
    public static function  inviteUser($userid) {
        $token = self::getToken();
        $url  = "https://qyapi.weixin.qq.com/cgi-bin/invite/send?access_token={$token}";

        $data = array( "userid"=>$userid);
        return self::curlPost($url, $data);
    }

    //获取token
    public static function getToken() {
        $corpid     = "wxf9f138ce3059d156";
        $corpsecret = "7g9dpZ5_sCNkAnA3OQQpflOmc7f26EzQ03BjBu47ROk5MPRucxv03VZjbx5sHFkV";
        $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid={$corpid}&corpsecret={$corpsecret}";

        $ret = self::curlGet($url);
        $token = json_decode($ret, true);
        return $token['access_token'];
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
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        $ret = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($ret, true);
        return $data;
    }
}