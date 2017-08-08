<?php

/**
 * 微信支付接口
 *
 * @author: moxiaobai
 * @since : 2016/4/18 14:52
 */

require_once 'WxPayHelper.php';


class Pay_Cib_Pay {

    //生成订单
    public static function unifiedOrder($params) {
        $UnifiedOrder = new UnifiedOrder();
        foreach($params as $key => $val)  {
            $UnifiedOrder->setParameter($key, $val);
        }

        return $UnifiedOrder->getResult();
    }

    //异步处理订单
    public static function authOrder() {
        $xml = file_get_contents("php://input");

        $wxpayServer = new Wxpay_server();
        $wxpayServer->saveData($xml);

        $data = $wxpayServer->getData();

        $return_code = isset($data['return_code']) ? $data['return_code'] : '';
        if($return_code != 'SUCCESS'){
            $msg = "支付失败";
            return self::dealOrder(false, $msg);
        }

        if(!$wxpayServer->checkSign()) {
            $msg = "Sign验证失败";
            return self::dealOrder(false, $msg);
        }
        return $data;
    }

    /**
     * 发送响应数据
     *
     * @param $result
     * @param string $msg
     * @return string
     */
    public static function dealOrder($result, $msg='') {
        $wxpayServer = new Wxpay_server();

        if($result == true) {
            $wxpayServer->setReturnParameter('return_code', 'SUCCESS');
            $wxpayServer->setReturnParameter('return_msg', 'OK');
        } else {
            $wxpayServer->setReturnParameter('return_code', 'FAIL');
            $wxpayServer->setReturnParameter('return_msg', $msg);
        }

        return $wxpayServer->returnXml();
    }

    /**
     * 查询订单情况
     *
     * @param    $transaction_id  微信订单号
     * @return   boolean
     */
    public static function queryOrder($transaction_id) {
        $orderQuery = new OrderQuery();
        $orderQuery->setParameter('transaction_id', $transaction_id);

        $result = $orderQuery->getResult();
        if(array_key_exists("return_code", $result)
            && array_key_exists("result_code", $result)
            && $result["return_code"] == "SUCCESS"
            && $result["result_code"] == "SUCCESS")
        {
            return true;
        }
        return false;
    }

    /**
     * 退款
     *
     * @param  $out_trade_no     平台订单号
     * @param $transaction_id    微信订单号
     * @param $total_fee         退款金额
     * @return 成功时返回
     * @throws WxPayException
     */
    public static function refund($out_trade_no, $transaction_id, $total_fee) {
        $refund = new Refund();
        $refund->setParameter('out_trade_no', $out_trade_no);
        $refund->setParameter('transaction_id', $transaction_id);
        $refund->setParameter('total_fee', $total_fee);
        $refund->setParameter('refund_fee', $total_fee);
        $refund->setParameter('out_refund_no', $out_trade_no);
        $refund->setParameter('op_user_id', $total_fee);

        $result = $refund->getResult();

        if($result['return_code'] == 'FAIL') {
            $pos = strrpos($result['return_msg'], "余额不足");
            if ($pos === false) {
                $code = 0;
            } else {
                $code = 100;
            }

            return array('code'=>$code, 'msg'=>$result['return_msg']);
        } else {
            return array('code'=>1, 'msg'=>$result['refund_id']);
        }
    }

    /**
     * 退款查询
     *
     * @param $out_trade_no
     * @param $transaction_id
     * @param $refund_id
     * @return array
     */
    public static function queryRefund($out_trade_no, $transaction_id, $refund_id) {
        $refundQuery = new RefundQuery();

        $refundQuery->setParameter('out_refund_no', $out_trade_no);
        $refundQuery->setParameter('out_trade_no', $out_trade_no);
        $refundQuery->setParameter('transaction_id', $transaction_id);
        $refundQuery->setParameter('refund_id', $refund_id);

        $result =  $refundQuery->getResult();

        if($result['return_code'] == 'FAIL') {
            return array('code'=>0, 'msg'=>$result['return_msg']);
        } else {
            $status = $result['refund_status_0'];
            if($status == 'SUCCESS') {
                $msg = '退款成功';
            } elseif ($status == 'FAIL') {
                $msg = '退款失败';
            } elseif ($status == 'PROCESSING') {
                $msg = '退款处理中';
            } elseif ($status == 'NOTSURE') {
                $msg = '未确定，需要商户原退款单号重新发起';
            }elseif ($status == 'CHANGE') {
                $msg = '转入代发，退款到银行发现用户的卡作废或者冻结了，导致原路退款银行';
            } else {
                $msg = '未知状态';
            }

            return array('code'=>1, 'msg'=>$msg);
        }
    }
}