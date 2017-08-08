<?php

/**
 * 系统订单表
 *
 * @author: moxiaobai
 * @since : 2016/4/19 18:55
 */

class OrderModel extends BaseModel {

    private $_type = array(
        1 => 'B',  // 捐款箱
        2 => 'P',  // 商品
        3 => 'C'  // 慈善
    );

    public function __construct()
    {
        parent::__construct('charity', 't_order', 'o_id');
    }

    /**
     * 创建地址
     *
     * @param $mid        帐号ID
     * @param $money      支付金额
     * @param $type       订单类型
     * @param $platform   支付平台
     * @return bool|string
     */
    public function createOrder($mid,$cid, $money, $type, $platform) {
        if(!array_key_exists($type, $this->_type)) {
            return false;
        }

        //订单号
        $prefix = $this->_type[$type];
        $orderNo = $prefix . date("YmdHis") . mt_rand(10, 99);

        $rows = array(
            'o_platform'  => $platform,
            'c_id'        => $cid,
            'o_order_no'  => $orderNo,
            'm_id'        => $mid,
            'o_type'      => $type,
            'o_total_fee' => $money,
            'o_addtime'   => time()
        );

        $result = $this->_db->insert($this->_table)->rows($rows)->execute();
        if($result) {
            return $orderNo;
        } else {
            return false;
        }
    }

    /**
     * 获取订单支付状态
     *
     * @param $orderNo
     * @return bool true表示支付成功，false表示未支付
     */
    public function getOrderStatus($orderNo) {
        $payStatus = $this->_db->select('o_status')->from($this->_table)->where('o_order_no', $orderNo)->fetchValue();
        if(!$payStatus) {
            return false;
        }

        if($payStatus == 2) {
            return true;
        } else {
            return false;
        }
    }

    public function getInfo($orderNo){
        return $this->_db->select('*')->from($this->_table)->where('o_order_no', $orderNo)->fetchOne();
    }

    /**
     * 生成微信支付参数
     *
     * @param $oderNo
     * @param $name
     * @param $money
     * @return json数据
     * @throws WxPayException
     */
    public function getJsApiParameters($orderNo, $name, $money) {
		        $input = Pay_Weixin_Pay::instanceUnifiedOrder();

        //支付金额
        $total_fee = $money * 100;

        $input->SetAppid(APP_ID);
        $input->SetMch_id(MCH_ID);
        $input->SetBody($name);
        $input->SetOut_trade_no($orderNo);
        $input->SetTotal_fee($total_fee);
        $input->SetSpbill_create_ip(Helper_Location::getIp());
        $input->SetNotify_url("http://y.weimingzhong.com/pay/payreturn/");
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid(OPEN_ID);

        $order = Pay_Weixin_Pay::unifiedOrder($input);

        $jsApiPay = Pay_Weixin_Pay::instanceJsApiPay();
        $jsApiParameters = $jsApiPay->GetJsApiParameters($order);

        return $jsApiParameters;
        //支付金额
       // $total_fee = $money * 100;

        //$params = array(
          //  'out_trade_no' => $orderNo,
            //'body'         => $name,
            //'total_fee'    => $total_fee,
           // 'trade_type'   => 'JSAPI',
            //'openid'       => OPEN_ID
       // );
        //$order = Pay_Cib_Pay::unifiedOrder($params);

    //    return $order;
    }

    /**
     * 保存数据
     *
     * @param array $data
     * @param int   $id
     * @return mixed
     */
    public function saveData($data, $id=0) {
        if($id > 0){
            return $this->_db->update($this->_table)->rows($data)->where($this->_primary_key, $id)->execute();
        }else{
            return $this->_db->insert($this->_table)->rows($data)->execute();
        }
    }
}