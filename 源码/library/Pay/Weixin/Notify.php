<?php
/**
 * 回调基础类
 * @author widyhu
 *
 */

require_once 'WxPay.Api.php';

class Pay_Weixin_Notify extends WxPayNotifyReply
{
	/**
	 *
	 * 回调入口
	 * @param bool $needSign  是否需要签名输出
	 */
	final public function Handle($needSign = true)
	{
		$msg = "OK";
		//当返回false的时候，表示notify中调用NotifyCallBack回调失败获取签名校验失败，此时直接回复失败
		$result = WxpayApi::notify(array($this, 'NotifyCallBack'), $msg);
		if($result == false){
			$this->SetReturn_code("FAIL");
			$this->SetReturn_msg($msg);
			$this->ReplyNotify(false);
			return;
		} else {
			//该分支在成功回调到NotifyCallBack方法，处理完成之后流程
			$this->SetReturn_code("SUCCESS");
			$this->SetReturn_msg("OK");
		}
		$this->ReplyNotify($needSign);
	}

	/**
	 *
	 * 回调方法入口，子类可重写该方法
	 * 注意：
	 * 1、微信回调超时时间为2s，建议用户使用异步处理流程，确认成功之后立刻回复微信服务器
	 * 2、微信服务器在调用失败或者接到回包为非确认包的时候，会发起重试，需确保你的回调是可以重入
	 * @param array $data 回调解释出的参数
	 * @param string $msg 如果回调处理失败，可以将错误信息输出到该方法
	 * @return true回调出来完成不需要继续回调，false回调处理未完成需要继续回调
	 */
	public function NotifyProcess($data, &$msg)
	{
		//TODO 用户基础该类之后需要重写该方法，成功的时候返回true，失败返回false
		//TODO 用户基础该类之后需要重写该方法，成功的时候返回true，失败返回false
		$out_trade_no = $data['out_trade_no'];
		$total_fee = $data['total_fee'];
		$orderStatus = OrderModel::getInstance()->getOrderStatus($out_trade_no);
		if($orderStatus){
			// 支付成功
			$orderInfo = OrderModel::getInstance()->getInfo($out_trade_no);
			if(($orderInfo['o_total_fee'] * 100 != $total_fee)){
				return FALSE;
			}

			$total_fee = $orderInfo['o_total_fee'];

			// 修改订单状态
			$arrData['o_status'] = 1;
			$arrData['o_transaction_id'] = $data['transaction_id'];
			$ret = OrderModel::getInstance()->saveData($arrData, $orderInfo['o_id']);
			$contributeInfo = ContributeModel::getInstance()->getInfo($orderInfo['c_id']);
			if($ret){
				switch($orderInfo['o_type']){
					case 1:// 捐款箱
						// 获得机构金额
						$data  = array(
							'ca_type' => 1,
							'ca_mid' => $contributeInfo['c_cid'],
						);

						$cashsInfo = CashsModel::getInstance()->getData($data);
						if(empty($cashsInfo)){
							$cashsInfo = array(
									'ca_total' => 0,
									'ca_left' => 0,
									'ca_id' => 0,
							);
						}

						$data = array(
								'ca_type' => 1,
                                'ca_mid' => $contributeInfo['c_cid'],
								'ca_total' => $cashsInfo['ca_total'] + $total_fee,
								'ca_left' => $cashsInfo['ca_left'] + $total_fee,
								'ca_addTime' => date('Y-m-d H:i:s')
						);

						if($cashsInfo['ca_id']){
							$ret = CashsModel::getInstance()->saveData($data, $cashsInfo['ca_id']);
						}else{
							$ret = CashsModel::getInstance()->saveData($data);
						}

						if($ret){
							// 修改贡献表
							$data = array(
									'c_status' => 1
							);

							$ret = ContributeModel::getInstance()->saveData($data, $orderInfo['c_id']);
						}

						break;
					case 2:// 物品捐款
						$data  = array(
							'ca_type' => 1,
                            'ca_mid' => $contributeInfo['c_cid'],
						);

						$cashsInfo = CashsModel::getInstance()->getData($data);
						if(empty($cashsInfo)){
							$cashsInfo = array(
									'ca_total' => 0,
									'ca_left' => 0,
									'ca_id' => 0,
							);
						}

						$data = array(
								'ca_type' => 1,
								'ca_mid' => $contributeInfo['c_cid'],
								'ca_total' => $cashsInfo['ca_total'] + $total_fee,
								'ca_left' => $cashsInfo['ca_left'] + $total_fee,
								'ca_addTime' => date('Y-m-d H:i:s')
						);

						if($cashsInfo['ca_id']){
							$ret = CashsModel::getInstance()->saveData($data, $cashsInfo['ca_id']);
						}else{
							$ret = CashsModel::getInstance()->saveData($data);
						}

						if($ret){
							// 修改贡献表
							$data = array(
									'c_status' => 1
							);

							$ret = ContributeModel::getInstance()->saveData($data, $orderInfo['c_id']);
						}

						break;
					case 3: // 善筹捐款
                        // 判断是否是个人慈善
                        $d_id = $contributeInfo['d_id'];
                        $donationData = DonationModel::getInstance()->getInfo($d_id);
                        if($donationData['m_id'] > 0){
                            // 个人捐款
                            $data  = array(
                                'ca_type' => 2,
                                'ca_mid' => $donationData['m_id'],
                            );
                        }else{
                            $data  = array(
                                'ca_type' => 1,
                                'ca_mid' => $donationData['c_id'],
                            );
                        }

						$cashsInfo = CashsModel::getInstance()->getData($data);
						if(empty($cashsInfo)){
							$cashsInfo = array(
									'ca_total' => 0,
									'ca_left' => 0,
									'ca_id' => 0,
							);
						}

                        if($donationData['m_id'] > 0){
                            // 个人捐款
                            $data = array(
                                'ca_type' => 2,
                                'ca_mid' => $donationData['m_id'],
                                'ca_total' => $cashsInfo['ca_total'] + $total_fee,
                                'ca_left' => $cashsInfo['ca_left'] + $total_fee,
                                'ca_addTime' => date('Y-m-d H:i:s')
                            );
                        }else{
                            $data = array(
                                'ca_type' => 1,
                                'ca_mid' => $donationData['c_id'],
                                'ca_total' => $cashsInfo['ca_total'] + $total_fee,
                                'ca_left' => $cashsInfo['ca_left'] + $total_fee,
                                'ca_addTime' => date('Y-m-d H:i:s')
                            );
                        }


						if($cashsInfo['ca_id']){
							$ret = CashsModel::getInstance()->saveData($data, $cashsInfo['ca_id']);
						}else{
							$ret = CashsModel::getInstance()->saveData($data);
						}

						if($ret){
							// 修改贡献表
							$data = array(
									'c_status' => 1
							);

							$ret = ContributeModel::getInstance()->saveData($data, $orderInfo['c_id']);


							unset($contributeInfo['d_id']);

							$donationData['d_collect'] = $donationData['d_collect'] + $total_fee;
							$donationData['d_up'] = $donationData['d_up'] + 1;
							$ret = DonationModel::getInstance()->saveData($donationData, $d_id);
							// 插入留言
							$messageData = array(
									'me_mid' => $contributeInfo['c_mid'],
									'p_id' => 0,
									'd_id' => $d_id,
									'me_price' => $total_fee,
									'me_name' => $contributeInfo['c_name'],
									'me_content' => '支持',
									'me_addTime' => date('Y-m-d H:i:s')
							);

							$ret = MessageModel::getInstance()->saveData($messageData);
						}

						break;
				}
			}

			return $ret;
		}

		return FALSE;
	}

	/**
	 *
	 * notify回调方法，该方法中需要赋值需要输出的参数,不可重写
	 * @param array $data
	 * @return true回调出来完成不需要继续回调，false回调处理未完成需要继续回调
	 */
	final public function NotifyCallBack($data)
	{
		$msg = "OK";
		$result = $this->NotifyProcess($data, $msg);

		if($result == true){
			$this->SetReturn_code("SUCCESS");
			$this->SetReturn_msg("OK");
		} else {
			$this->SetReturn_code("FAIL");
			$this->SetReturn_msg($msg);
		}
		return $result;
	}

	/**
	 *
	 * 回复通知
	 * @param bool $needSign 是否需要签名输出
	 */
	final private function ReplyNotify($needSign = true)
	{
		//如果需要签名
		if($needSign == true && $this->GetReturn_code() == "SUCCESS") {
			$this->SetSign();
		}
		WxpayApi::replyNotify($this->ToXml());
	}
}