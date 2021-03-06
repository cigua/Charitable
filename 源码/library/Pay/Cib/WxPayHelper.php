<?php
/**
 * 微信支付帮助库
 * ====================================================
 * 接口分三种类型：
 * 【请求型接口】--Wxpay_client_
 * 		统一支付接口类--UnifiedOrder
 * 		订单查询接口--OrderQuery
 * 		退款申请接口--Refund
 * 		退款查询接口--RefundQuery
 * 		冲正接口--Reverser
 * 		被扫支付--Micropay
 * =====================================================
 * 【CommonUtil】常用工具：
 * 		trimString()，设置参数时需要用到的字符处理函数
 * 		createNoncestr()，产生随机字符串，不长于32位
 * 		formatBizQueryParaMap(),格式化参数，签名过程需要用到
 * 		getSign(),生成签名
 * 		arrayToXml(),array转xml
 * 		xmlToArray(),xml转 array
 * 		postXmlCurl(),以post方式提交xml到对应的接口url
*/

require_once 'SDKRuntimeException.php';
require_once 'WxPay.Config.php';
/**
 * 所有接口的基类
 */
class Common_util
{	
	var $APPID = WxPayConf::APPID;
	var $MCHID = WxPayConf::MCHID;
	var $STOREAPPID = "";
	var $STORENAME = "";
	var $KEY = WxPayConf::KEY;
	var $OPNAME = "";

	function __construct() {
	}

	function trimString($value)
	{
		$ret = null;
		if (null != $value) 
		{
			$ret = $value;
			if (strlen($ret) == 0) 
			{
				$ret = null;
			}
		}
		return $ret;
	}
	
	/**
	 * 	作用：产生随机字符串，不长于32位
	 */
	public function createNoncestr( $length = 32 ) 
	{
		$chars = "abcdefghijklmnopqrstuvwxyz0123456789";  
		$str ="";
		for ( $i = 0; $i < $length; $i++ )  {  
			$str.= substr($chars, mt_rand(0, strlen($chars)-1), 1);  
		}  
		return $str;
	}
	
	/**
	 * 	作用：格式化参数，签名过程需要使用
	 */
	function formatBizQueryParaMap($paraMap, $urlencode)
	{
		$buff = "";
		ksort($paraMap);
		foreach ($paraMap as $k => $v)
		{
			if(!empty($v))
			{
				if($urlencode)
				{
				   $v = urlencode($v);
				}
				$buff .= strtolower($k) . "=" . $v . "&";
			}
		}
		$reqPar;
		if (strlen($buff) > 0) 
		{
			$reqPar = substr($buff, 0, strlen($buff)-1);
		}
		return $reqPar;
	}
	
	/**
	 * 	作用：生成签名
	 */
	public function getSign($Obj)
	{
		foreach ($Obj as $k => $v)
		{
			$Parameters[strtolower($k)] = $v;
		}
		//签名步骤一：按字典序排序参数
		ksort($Parameters);
		$String = $this->formatBizQueryParaMap($Parameters, false);
		//echo "【string】 =".$String."</br>";
		//签名步骤二：在string后加入KEY
		$String = $String."&key=".$this->KEY;
		//echo "【string】 =".$String."</br>";
		//签名步骤三：MD5加密
		$result_ = strtoupper(md5($String));
		return $result_;
	}
	
	/**
	 * 	作用：array转xml
	 */
	function arrayToXml($arr)
    {
        $xml = "<xml>";
        foreach ($arr as $key=>$val)
        {
        	 if (is_numeric($val))
        	 {
        	 	$xml.="<".$key.">".$val."</".$key.">"; 

        	 }
        	 else
        	 	$xml.="<".$key."><![CDATA[".$val."]]></".$key.">";  
        }
        $xml.="</xml>";
        return $xml; 
    }
	
	/**
	 * 	作用：将xml转为array
	 */
	public function xmlToArray($xml)
	{	
		try{
			//将XML转为array        
			$array_data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);		
			return $array_data;
		}catch(Exception $e)
		{
			throw new SDKRuntimeException("返回xml解析错误：".$e->getMessage());
		}
	}

	/**
	 * 	作用：以post方式提交xml到对应的接口url
	 */
	public function postXmlCurl($xml,$url,$second=30)
	{		
        //初始化curl        
       	$ch = curl_init();
		//超时时间
		curl_setopt($ch,CURLOPT_TIMEOUT,$second);
        //这里设置代理，如果有的话
        //curl_setopt($ch,CURLOPT_PROXY, '8.8.8.8');
        //curl_setopt($ch,CURLOPT_PROXYPORT, 8080);
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
        //curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,1);
        //curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,2); //php5.2以上版本
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0); //php5.5以上版本
		//设置header
		curl_setopt($ch, CURLOPT_HEADER, FALSE);	
		//设定传输xml格式
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: text/xml" ));
		//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		//post提交方式
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
		//运行curl
        $data = curl_exec($ch);
		//返回结果
		if($data)
		{
			curl_close($ch);
			return $data;
		}
		else 
		{ 
			$error = curl_errno($ch);
			//echo "curl出错，错误码:$error"."<br>";
			//echo "<a href='http://curl.haxx.se/libcurl/c/libcurl-errors.html'>错误原因查询</a></br>";
			curl_close($ch);
			//return false;
			throw new SDKRuntimeException("curl出错，错误码:$error");
		}
	}
}

/**
 * 请求型接口的基类
 */
class Wxpay_client extends Common_util
{
	var $parameters;//请求参数，类型为关联数组	
	public $request;//发给微信的请求
	public $response;//微信返回的响应
	public $result;//返回参数，类型为关联数组
	var $url;//接口链接
	var $curl_timeout;//curl超时时间

	/**
	 * 	作用：设置请求参数
	 */
	function setParameter($parameter, $parameterValue)
	{
		$this->parameters[$this->trimString($parameter)] = $this->trimString($parameterValue);
	}
	
	/**
	 * 	作用：设置标配的请求参数，生成签名，生成接口参数xml
	 */
	function createXml()
	{
	   	$this->parameters["appid"] = $this->APPID;//公众账号ID
	   	$this->parameters["mch_id"] = $this->MCHID;//商户号
	    $this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
	    $this->parameters["sign"] = $this->getSign($this->parameters);//签名
	    return  $this->arrayToXml($this->parameters);
	}
	
	/**
	 * 	作用：post请求xml
	 */
	function postXml()
	{
	    $this->request = $this->createXml();
		$this->response = $this->postXmlCurl($this->request,$this->url,$this->curl_timeout);
		return $this->response;
	}

	/**
	 * 	作用：获取结果，默认不使用证书
	 */
	function getResult() 
	{		
		$this->postXml();
		$this->result = $this->xmlToArray($this->response);
		return $this->result;
	}
}


/**
 * 统一支付接口类
 */
class UnifiedOrder extends Wxpay_client
{	
	function __construct() 
	{
		//设置接口链接
		$this->url = "https://api.cib.dotcore.cn/pay/unifiedorder";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}
	
	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{
		//检测必填参数
		if($this->parameters["out_trade_no"] == null){
			throw new SDKRuntimeException("缺少统一支付接口必填参数out_trade_no！"."<br>");
		}elseif($this->parameters["body"] == null){
			throw new SDKRuntimeException("缺少统一支付接口必填参数body！"."<br>");
		}elseif ($this->parameters["total_fee"] == null ) {
			throw new SDKRuntimeException("缺少统一支付接口必填参数total_fee！"."<br>");
		}elseif ($this->parameters["trade_type"] == null) {
			throw new SDKRuntimeException("缺少统一支付接口必填参数trade_type！"."<br>");
		}elseif ($this->parameters["trade_type"] == "JSAPI" && $this->parameters["openid"] == NULL){
			throw new SDKRuntimeException("统一支付接口中，缺少必填参数openid！trade_type为JSAPI时，openid为必填参数！"."<br>");
		}
		$this->parameters["appid"] = WxPayConf::APPID;//公众账号ID
		$this->parameters["mch_id"] = WxPayConf::MCHID;//商户号
		$this->parameters["notify_url"] = WxPayConf::NOTIFY_URL;
		//$this->parameters["attach"] = "`store_appid=".$this->STOREAPPID."#store_name=".$this->STORENAME."#op_user=".$this->OPNAME;
		$this->parameters["spbill_create_ip"] = $_SERVER['REMOTE_ADDR'];//终端ip	    
		$this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
		$this->parameters["sign"] = $this->getSign($this->parameters);//签名
		return  $this->arrayToXml($this->parameters);
	}
	
}

/**
 * 订单查询接口
 */
class OrderQuery extends Wxpay_client
{
	function __construct() 
	{
		//设置接口链接
		$this->url = "https://api.cib.dotcore.cn/pay/orderquery";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}

	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{
		//检测必填参数
		if($this->parameters["out_trade_no"] == null && $this->parameters["transaction_id"] == null) 
		{
			throw new SDKRuntimeException("订单查询接口中，out_trade_no、transaction_id至少填一个！"."<br>");
		}
		$this->parameters["appid"] = $this->APPID;//公众账号ID
		$this->parameters["mch_id"] = $this->MCHID;//商户号
		$this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
		$this->parameters["sign"] = $this->getSign($this->parameters);//签名
		return  $this->arrayToXml($this->parameters);
	}

}

/**
 * 退款申请接口
 */
class Refund extends Wxpay_client
{
	
	function __construct() {
		//设置接口链接
		$this->url = "https://api.cib.dotcore.cn/pay/refund";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}
	
	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{
		//检测必填参数
		if($this->parameters["out_trade_no"] == null && $this->parameters["transaction_id"] == null) {
			throw new SDKRuntimeException("退款申请接口中，out_trade_no、transaction_id至少填一个！"."<br>");
		}elseif($this->parameters["out_refund_no"] == null){
			throw new SDKRuntimeException("退款申请接口中，缺少必填参数out_refund_no！"."<br>");
		}elseif($this->parameters["total_fee"] == null){
			throw new SDKRuntimeException("退款申请接口中，缺少必填参数total_fee！"."<br>");
		}elseif($this->parameters["refund_fee"] == null){
			throw new SDKRuntimeException("退款申请接口中，缺少必填参数refund_fee！"."<br>");
		}
		$this->parameters["appid"] = $this->APPID;//公众账号ID
		$this->parameters["mch_id"] = $this->MCHID;//商户号
		$this->parameters["op_user_id"] = $this->MCHID;//商户号
		$this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
		$this->parameters["sign"] = $this->getSign($this->parameters);//签名
		return  $this->arrayToXml($this->parameters);
	}
}


/**
 * 退款查询接口
 */
class RefundQuery extends Wxpay_client
{
	
	function __construct() {
		//设置接口链接
		$this->url = "https://api.cib.dotcore.cn/pay/refundquery";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}
	
	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{		
		if($this->parameters["out_trade_no"] == null && $this->parameters["transaction_id"] == null) 
		{
			throw new SDKRuntimeException("退款查询接口中，out_trade_no、transaction_id两个参数必填一个！"."<br>");
		}
		if($this->parameters["out_refund_no"] == null && $this->parameters["refund_id "] == null) 
		{
			throw new SDKRuntimeException("退款查询接口中，out_refund_no、refund_id两个参数必填一个！"."<br>");
		}
		$this->parameters["appid"] = $this->APPID;//公众账号ID
		$this->parameters["mch_id"] = $this->MCHID;//商户号
		$this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
		$this->parameters["sign"] = $this->getSign($this->parameters);//签名
		return  $this->arrayToXml($this->parameters);
	}

}

/**
 * 对账单接口
 */
class DownloadBill extends Wxpay_client
{

	function __construct() 
	{
		//设置接口链接
		$this->url = "https://api.cib.dotcore.cn/pay/downloadbill";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}

	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{		
		if($this->parameters["bill_date"] == null ) 
		{
			throw new SDKRuntimeException("对账单接口中，缺少必填参数bill_date！"."<br>");
		}
		$this->parameters["appid"] = $this->APPID;//公众账号ID
		$this->parameters["mch_id"] = $this->MCHID;//商户号
		$this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
		$this->parameters["sign"] = $this->getSign($this->parameters);//签名
		return  $this->arrayToXml($this->parameters);
	}
}

/**
 * 冲正接口
 */
class Reverse extends Wxpay_client
{
	
	function __construct() {
		//设置接口链接
		$this->url = "https://api.cib.dotcore.cn/pay/reverse";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}

	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{		
		if($this->parameters["out_trade_no"] == null && $this->parameters["transaction_id"] == null){
			throw new SDKRuntimeException("冲正接口中，transaction_id、out_trade_no至少填一个！"."<br>");
		}
		$this->parameters["appid"] = $this->APPID;//公众账号ID
		$this->parameters["mch_id"] = $this->MCHID;//商户号
		$this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
		$this->parameters["sign"] = $this->getSign($this->parameters);//签名
		return  $this->arrayToXml($this->parameters);
	}	
}

/**
 * 被扫支付接口
 */
class MicropayCall extends Wxpay_client
{
	function __construct()
	{
		//设置接口链接
		$this->url = "https://api.cib.dotcore.cn/pay/micropay";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}
	
	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{
		if($this->parameters["out_trade_no"] == null) 
		{
			throw new SDKRuntimeException("缺少被扫支付接口必填参数out_trade_no！"."<br>");
		}elseif ($this->parameters["body"] == null) {
			throw new SDKRuntimeException("缺少被扫支付接口必填参数body！"."<br>");
		}elseif ($this->parameters["total_fee"] == null) {
			throw new SDKRuntimeException("缺少被扫支付接口必填参数total_fee！"."<br>");
		}elseif ($this->parameters["auth_code"] == null) {
			throw new SDKRuntimeException("缺少被扫支付接口必填参数auth_code！"."<br>");
		}
		$this->parameters["appid"] = $this->APPID;//公众账号ID
		$this->parameters["mch_id"] = $this->MCHID;//商户号
		$this->parameters["attach"] = "`store_appid=".$this->STOREAPPID."#store_name=".$this->STORENAME."#op_user=".$this->OPNAME;
		$this->parameters["spbill_create_ip"] = $_SERVER['REMOTE_ADDR'];//终端ip	    
		$this->parameters["nonce_str"] = $this->createNoncestr();//随机字符串
		$this->parameters["sign"] = $this->getSign($this->parameters);//签名
		return  $this->arrayToXml($this->parameters);
	}
	
}

/**
 * 响应型接口基类
 */
class Wxpay_server extends Common_util
{
	public $data;//接收到的数据，类型为关联数组
	var $returnParameters;//返回参数，类型为关联数组

	function __construct() {
		//设置接口链接
		$this->url = "";
		//设置curl超时时间
		$this->curl_timeout = WxPayConf::CURL_TIMEOUT;
	}
	
	/**
	 * 将微信的请求xml转换成关联数组，以方便数据处理
	 */
	function saveData($xml)
	{
		$this->data = $this->xmlToArray($xml);
	}
	
	function checkSign()
	{
		$tmpData = $this->data;
		unset($tmpData['sign']);
		$sign = $this->getSign($tmpData);//本地签名
		if ($this->data['sign'] == $sign) {
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * 获取微信的请求数据
	 */
	function getData()
	{		
		return $this->data;
	}
	
	/**
	 * 设置返回微信的xml数据
	 */
	function setReturnParameter($parameter, $parameterValue)
	{
		$this->returnParameters[$this->trimString($parameter)] = $this->trimString($parameterValue);
	}
	
	/**
	 * 生成接口参数xml
	 */
	function createXml()
	{
		return $this->arrayToXml($this->returnParameters);
	}
	
	/**
	 * 将xml数据返回微信
	 */
	function returnXml()
	{
		$returnXml = $this->createXml();
		return $returnXml;
	}
}


/**
 * 通用通知接口
 */
class Notify_pub extends Wxpay_server
{

}

function getResultValue($list, $key)
{
	if(empty($list[$key]))
		return "";
	if(is_array($list[$key]))
		return "";
	return $list[$key];
}