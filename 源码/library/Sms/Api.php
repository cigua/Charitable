<?php

/**
 * 发送短信
 *
 * @author: moxiaobai
 * @since : 2016/1/7 16:29
 */

define('SP_ID',  335626);
define('SMS_APP_ID', 513);
define('PASSWORD', 'mlkom622124');

class Sms_Api {

    /**
     * 发送验证码
     * @param $phone  电话
     * @param $code   验证码
     * @return array
     */
    public static function sendVerifyCode($phone, $code) {
        $params = array($code, 10);
        return self::sendSMS($phone, 'SmsSendByTemplet', $params);
    }

    public static function sendSMS($phone, $method, $params) {
        $spid    = SP_ID;
        $appid   = SMS_APP_ID;
        $passwd  = sha1(PASSWORD);
        $ims     = 8659186258410;
        $key     = 48540997;

        $apiUrl  = "http://110.84.128.78:8088/httpIntf/dealIntf";

        $body = self::getBody($method,$params);

        $postData   = "<Request><Head><MethodName>{$method}</MethodName><Spid>{$spid}</Spid><Appid>{$appid}</Appid><Passwd>{$passwd}</Passwd></Head><Body><Ims>{$ims}</Ims> <Key>{$key}</Key><CalleeNbr>$phone</CalleeNbr>{$body}</Body></Request>";
        $requestUrl = "$apiUrl?postData=" . urlencode($postData);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_URL, $requestUrl);
        $data = curl_exec($ch);
        curl_close($ch);

        $xmlObj = simplexml_load_string(trim($data," \t\n\r"));
        $result = json_decode(json_encode($xmlObj),TRUE);

        if($result['Head']['Result'] == 0) {
            return array('code'=>1, 'msg'=>$result['Head']['Sessionid']);
        } else {
            $msg = str_replace("CalleeNbr", "", $result['Head']['ResultDesc']);
            return array('code'=>-1, 'msg'=>$msg);
        }
    }

    public static function getBody($method, $params)
    {
        switch($method) {
            case 'SmsSendByTemplet':
                $body = "<TempletId>10001</TempletId><DisplayNbrType>1</DisplayNbrType><Value1>$params[0]</Value1><Value2>$params[1]</Value2>";
                break;
        }
        return $body;
    }
}