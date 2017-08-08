<?php

/**
 * 小区管理员
 *
 * @author: moxiaobai
 * @since : 2016/2/1 17:19
 */

class PayController extends BaseController
{

    //初始化
    protected function init()
    {
        $this->isAjaxRequest();
        $this->isLogin();
        Yaf_Dispatcher::getInstance()->disableView();
    }

    /**
     * 慈善捐款
     */
    public function charityAction(){
        $type = isset($_POST['type']) ? intval($_POST['type']) : 0; // 捐款类型，1为捐款箱，2为商品，3为慈善
        $cid = isset($_POST['cid']) ? intval($_POST['cid']) : 0; // 捐款类型，1为捐款箱，2为商品，3为慈善
        $anonymous = isset($_POST['anonymous']) ? intval($_POST['anonymous']) : 1;
        switch($type){
            case 1:
                // 捐款箱，一次一元
                $price = isset($_POST['price']) ? floatval($_POST['price']) : 0;
				if($price <= 0){
					Helper_Json::formJson('无效金额');
				}
				
                $data = array(
                    'c_type' => $type,
                    'c_cid' => $cid,
                    'c_name' => M_NAME,
                    'c_mid'  => M_ID,
                    'c_price' => $price,
                    'c_content' => '捐款一元',
                    'c_anonymous' => $anonymous,
                    'c_status' => 2,
                    'c_addtime' => date('Y-m-d H:i:s')
                );

                $c_id = ContributeModel::getInstance()->saveData($data);
                // 订单表
                $orderNo = OrderModel::getInstance()->createOrder(M_ID, $c_id, $price, $type, 1);
                if($orderNo){
                    $params = OrderModel::getInstance()->getJsApiParameters($orderNo, '慈善支付', $price); // 支付参数
                    if(empty($params)){
                        Helper_Json::formJson('订单创建失败');
                    }
					
					$params = json_decode($params, TRUE);
                }else{
                    Helper_Json::formJson('订单创建失败');
                }

                // 返回数据
                Helper_Json::formJson(array('param' => $params, 'orderNo' => $orderNo), 'y');
                break;

            case 2:
                // 捐物品
                $pid = isset($_POST['pid']) ? intval($_POST['pid']) : 0;
                $productInfo = ProductModel::getInstance()->getInfo($pid);
                $price = $productInfo['p_price'];
                $data = array(
                    'c_type' => $type,
                    'c_cid' => $cid,
                    'c_name' => M_NAME,
                    'c_mid'  => M_ID,
                    'p_id' => $pid,
                    'c_price' => $price,
                    'c_content' => '捐' . $productInfo['p_title'],
                    'c_anonymous' => $anonymous,
                    'c_status' => 2,
                    'c_addtime' => date('Y-m-d H:i:s')
                );

                $c_id = ContributeModel::getInstance()->saveData($data);
                // 订单表
                $orderNo = OrderModel::getInstance()->createOrder(M_ID, $c_id, $price, $type, 1);
                if($orderNo){
                    $params = OrderModel::getInstance()->getJsApiParameters($orderNo, '慈善支付', $price); // 支付参数
                    if(empty($params)){
                        Helper_Json::formJson('订单创建失败');
                    }
					
					$params = json_decode($params, TRUE);
                }else{
                    Helper_Json::formJson('订单创建失败');
                }

                // 返回数据
                Helper_Json::formJson(array('param' => $params, 'orderNo' => $orderNo), 'y');
                break;
            case 3:
                // 慈善捐款
                $did = isset($_POST['did']) ? intval($_POST['did']) : 0;
                $price = isset($_POST['price']) ? floatval($_POST['price']) : 0;
				if($price <= 0){
					Helper_Json::formJson('无效金额');
				}
				
                $data = array(
                    'c_type' => $type,
                    'c_cid' => $cid,
                    'c_name' => M_NAME,
                    'c_mid'  => M_ID,
                    'd_id'   => $did,
                    'c_price' => $price,
                    'c_content' => '捐' . $price . '元',
                    'c_anonymous' => $anonymous,
                    'c_status' => 2,
                    'c_addtime' => date('Y-m-d H:i:s')
                );

                $c_id = ContributeModel::getInstance()->saveData($data);
                // 订单表
                $orderNo = OrderModel::getInstance()->createOrder(M_ID, $c_id, $price, $type, 1);
                if($orderNo){
                    $params = OrderModel::getInstance()->getJsApiParameters($orderNo, '慈善支付', $price); // 支付参数
                    if(empty($params)){
                        Helper_Json::formJson('订单创建失败');
                    }
					
					
					$params = json_decode($params, TRUE);
                }else{
                    Helper_Json::formJson('订单创建失败');
                }

                // 返回数据
                Helper_Json::formJson(array('param' => $params, 'orderNo' => $orderNo), 'y');

                break;
        }
    }

}