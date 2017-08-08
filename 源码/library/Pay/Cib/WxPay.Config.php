<?php
/**
* 	配置账号信息
*/

class WxPayConf
{
	//=======【基本信息设置】=====================================
	//微信公众号身份的唯一标识。审核通过后，在微信发送的邮件中查看
	const APPID = 'wx133ff69fc8a2148b';
	//受理商ID，身份标识
	const MCHID = '1351714001';
	//商户支付密钥Key。审核通过后，在微信发送的邮件中查看
	const KEY = 'fuzhouweimingzhongxinxijishu8888';

	//=======【异步通知url设置】===================================
	//异步通知url，商户根据实际开发过程设定
	const NOTIFY_URL = 'http://www.chongji2000.com/pay/payreturn/';
	//const NOTIFY_URL = 'http://www.xxxxxx.com/wx_sh/notify_url.php';

	//=======【curl超时设置】===================================
	//本例程通过curl使用HTTP POST方法，此处可修改其超时时间，默认为30秒
	const CURL_TIMEOUT = 30;

}