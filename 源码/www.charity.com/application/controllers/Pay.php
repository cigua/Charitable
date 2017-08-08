<?php

/**
 * 官网首页
 *
 * @author: monyyip
 * @since : 2016/06/05 16:43
 */

class PayController extends BaseController {
    public function orderAction($event = '', $id = 0){
		if(!empty($event) && !empty($id)){
			$this->redirect("/pay/order/?event={$event}&id={$id}");
			return;
		}
		
        $event = isset($_GET['event']) ? Helper_Filter::format($_GET['event']) : '';
        switch($event){
            case 'company':// 机构首页，可以捐款箱捐款，商家物品捐款
                $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
                // 获得机构信息
                $companyInfo = CompanyModel::getInstance()->getInfo($id);
                if(empty($companyInfo)){
                    $this->redirect('/index');
                }

                // 获得机构图片
                $where = array(
                    'c_id' => $id
                );

                $companyImgs = CompanyImgModel::getInstance()->getList($where);

                // 获得捐款记录
                $where = array(
                    'cid' => $id,
                );

                $contributeList = ContributeModel::getInstance()->getList($where);
                // 获得商品列表
                $where = array(
                    'type' => $id,
                );

                $productList = ProductModel::getInstance()->getList($where);
				$shareConfig = ShareModel::getInstance()->getOne(array('type' => 1));
				$jsSdk = new Open_Weixin_Js();
                $signPackage = $jsSdk->GetSignPackage();
                $this->getView()->assign(array(
                    'id' => $id,
                    'companyImgs' => $companyImgs,
                    'companyInfo' => $companyInfo,
                    'contributeList' => $contributeList,
                    'productList' => $productList,
					'signPackage' => $signPackage,
					'shareConfig' => $shareConfig
                ));
				
				
                $this->getView()->display('company/index.html');
                break;
            case 'charity':// 善筹捐款
                $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
                $donationInfo = DonationModel::getInstance()->getInfo($id);

                $memberInfo = MemberModel::getInstance()->getInfo($donationInfo['m_id']);
                // 计算剩余时间
                $leftTime = strtotime($donationInfo['d_endTime']) - time();
                $donationInfo['leftDay'] = $leftTime > 0 ? floor($leftTime / (3600 * 24)) : 0;
                $donationInfo['d_addTime'] = date('Y-m-d', strtotime($donationInfo['d_addTime']));
                $donationInfo['percent'] = round($donationInfo['d_collect'] / $donationInfo['d_target'] * 100, 2);
                // 获得分享配置
                $shareConfig = ShareModel::getInstance()->getOne(array('type' => 2));

                // 获得捐款用户列表
                $where = array(
                    'c_type' => 3,
                    'c_aid' => $donationInfo['d_id'],
                    'c_status' => 1
                );
//        var_dump($donationInfo);die;
                $members = ContributeModel::getInstance()->getList($where);
                $members = MemberModel::getInstance()->mergeData($members, 'c_mid');
                // 消息列表
                $messageList = MessageModel::getInstance()->getList(array('d_id' => $id));
                $messageList = MemberModel::getInstance()->mergeData($messageList, 'me_mid');
                // 整合数据
                $messageList = $this->rebuild($messageList);

                // 判断用户是否购买过，或者是项目发起人
                $where = array(
                    'c_type' => 3,
                    'c_mid'  => M_ID,
                    'c_aid' => $donationInfo['d_id'],
                    'c_status' => 1
                );

                $contributeInfo = ContributeModel::getInstance()->getOne($where);
                if($contributeInfo || $donationInfo['m_id'] == M_ID){
                    $pay = 1;
                }else{
                    $pay = 0;
                }

				
				// 证明材料
				$donationImgList = DonationImgModel::getInstance()->getList(array('d_id' => $id));
                $jsSdk = new Open_Weixin_Js();
                $signPackage = $jsSdk->GetSignPackage();
                $this->getView()->assign(array(
                    'signPackage' => $signPackage,
                    'donationInfo' => $donationInfo,
                    'memberInfo'   => $memberInfo,
                    'messageList' => $messageList,
					'donationImgList' => $donationImgList,
                    'pay'          => $pay,
                    'members'      => $members,
                    'count'        => $members ? count($members) : 0,
                    'shareConfig' => $shareConfig,
                ));

                $this->getView()->display('donation/details.html');
                break;
            case 'product':
                $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
                $productInfo = ProductModel::getInstance()->getInfo($id);
				 // 获得分享配置
                $shareConfig = ShareModel::getInstance()->getOne(array('type' => 3));
				$jsSdk = new Open_Weixin_Js();
                $signPackage = $jsSdk->GetSignPackage();
				
                $this->getView()->assign(array(
                    'id' => $id,
                    'productInfo' => $productInfo,
					'signPackage' => $signPackage,
					'shareConfig' => $shareConfig,
                ));

				
                $this->getView()->display('company/product.html');
                break;
        }

        die;
    }

    public function rebuild($data, $pid = 0){
        if(empty($data)) return FALSE;
        $result = array();
        foreach($data as $val){
            if($val['p_id'] == $pid){
                $val['sonList'] = $this->rebuild($data, $val['me_id']);
                $result[] = $val;
            }
        }

        return $result;
    }

    /**
     * 支付回调
     */
    public function payreturnAction(){
        $notify = new Pay_Weixin_Notify();
        $data = $notify->Handle(false);
        Helper_Log::write(json_encode($data),  '');
        return $data;
		
    }

}