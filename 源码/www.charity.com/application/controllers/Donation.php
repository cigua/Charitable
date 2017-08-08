<?php

/**
 * 官网首页
 *
 * @author: monyyip
 * @since : 2016/06/05 16:43
 */

class DonationController extends BaseController {
    private $_pageSize = 100;
    public function indexAction($id = 0) {
		if(!empty($id)){
			$this->redirect("/donation/index?id={$id}");
			return;
		}
		
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $mid = isset($_GET['mid']) ? intval($_GET['mid']) : 0;
        $type = isset($_GET['type']) ? Helper_Filter::format($_GET['type'], FALSE, TRUE) : '';
        $companyInfo = CompanyModel::getInstance()->getInfo($id);
        // 根据地区获得公司列表
        $where = array(
            'prov' => $companyInfo['c_prov'],
            'city' => $companyInfo['c_city']
        );

        $companyList = CompanyModel::getInstance()->getList($where);
        $cList = array();
        if($companyList){
            foreach($companyList as $val){
                $cList[] = $val['c_id'];
            }
        }

        $where = array();
        if(!empty($cList)){
            $where['cList'] =  $cList;
        }

        if($mid){
            $where['m_id'] = $mid;
        }else{
            $where['status'] = 1;
        }

        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $pagination = array('page' => $page, 'pagesize' => $this->_pageSize);
        $count = DonationModel::getInstance()->countData($where);
        $donationList = DonationModel::getInstance()->getList($where, $pagination);
        $donationList = MemberModel::getInstance()->mergeData($donationList);
        // 合并捐款用户
        if($donationList){
            foreach($donationList as &$val){
                // 获得捐款用户列表
                $where = array(
                    'c_type' => 3,
                    'c_aid' => $val['d_id'],
                );

                $members = ContributeModel::getInstance()->getList($where);
                $members = MemberModel::getInstance()->mergeData($members, 'c_mid');
                $val['members'] = $members;
                // 计算剩余时间
                $leftTime = strtotime($val['d_endTime']) - time();
                $val['leftDay'] = $leftTime > 0 ? floor($leftTime / (3600 * 24)) : 0;
                $val['d_addTime'] = date('Y-m-d', strtotime($val['d_addTime']));
            }
        }

        if($type == 'load'){
            if(empty($donationList)){
                return FALSE;
            }

            $this->getView()->assign('data', $donationList);
            $this->getView()->display('/donation/load.html');
            die;
        }
		
		// 获得分享配置
                $shareConfig = ShareModel::getInstance()->getOne(array('type' => 3));
				$jsSdk = new Open_Weixin_Js();
                $signPackage = $jsSdk->GetSignPackage();

        $this->getView()->assign(array(
            'data' => $donationList,
            'count' => $count,
						'shareConfig' => $shareConfig,
			'signPackage' => $signPackage,	
            'companyInfo' => $companyInfo,
            'pageSize' => $this->_pageSize
        ));
    }

    public function detailsAction(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $donationInfo = DonationModel::getInstance()->getInfo($id);

        $memberInfo = MemberModel::getInstance()->getInfo($donationInfo['m_id']);
        // 计算剩余时间
        $leftTime = strtotime($donationInfo['d_endTime']) - time();
        $donationInfo['leftDay'] = $leftTime > 0 ? floor($leftTime / (3600 * 24)) : 0;
        $donationInfo['d_addTime'] = date('Y-m-d', strtotime($donationInfo['d_addTime']));
        $donationInfo['percent'] = $donationInfo['d_collect'] / $donationInfo['d_target'] * 100;
        // 获得捐款用户列表
        $where = array(
            'c_type' => 3,
            'd_id' => $donationInfo['d_id'],
        );
//        var_dump($donationInfo);die;
        $members = ContributeModel::getInstance()->getList($where);
        $members = MemberModel::getInstance()->mergeData($members, 'c_mid');

        $messageList = MessageModel::getInstance()->getList(array('d_id' => $id));
        $messageList = MemberModel::getInstance()->mergeData($messageList, 'me_mid');

        // 证明材料
        $donationImgList = DonationImgModel::getInstance()->getList(array('d_id' => $id));

        $this->getView()->assign(array(
            'donationInfo' => $donationInfo,
            'memberInfo'   => $memberInfo,
            'donationImgList' => $donationImgList,
            'messageList' => $messageList,
            'members'      => $members,
            'count'        => $members ? count($members) : 0,
        ));
    }

    public function publishAction(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        Yaf_Session::getInstance()->set('donation_cid', $id);
        $baseInfo = Yaf_Session::getInstance()->get('donation_baseInfo');
        $this->getView()->assign(array(
                'baseInfo' => $baseInfo,
                'time' => date('Y-m-d', strtotime('+10 days'))
        ));
    }

    public function proveAction(){
        Yaf_Session::getInstance()->set('donation_type', 1);
        $baseInfo = Yaf_Session::getInstance()->get('donation_baseInfo');
        if(empty($baseInfo)){
            $this->redirect('/donation/prove');
        }

        $proveInfo = Yaf_Session::getInstance()->get('donation_proveInfo');
        $bankInfo = Yaf_Session::getInstance()->get('donation_bankInfo');
        $this->getView()->assign(array(
            'proveInfo' => $proveInfo,
            'bankInfo' => $bankInfo
        ));
    }

    public function companyAction(){
        Yaf_Session::getInstance()->set('donation_type', 2);
        $baseInfo = Yaf_Session::getInstance()->get('donation_baseInfo');
        if(empty($baseInfo)){
            $this->redirect('/donation/prove');
        }

        $proveInfo = Yaf_Session::getInstance()->get('donation_proveInfo');
        $bankInfo = Yaf_Session::getInstance()->get('donation_bankInfo');
        $this->getView()->assign(array(
            'proveInfo' => $proveInfo,
            'bankInfo' => $bankInfo
        ));
    }

    public function bankAction(){
        $bankInfo = Yaf_Session::getInstance()->get('donation_bankInfo');
        $this->getView()->assign(array(
            'bankInfo' => $bankInfo
        ));
    }

    public function chooseAction(){

    }

    public function successAction(){
        // 获得信息
        $cid = Yaf_Session::getInstance()->get('donation_cid');
        $d_type = Yaf_Session::getInstance()->get('donation_type');
        $baseInfo = Yaf_Session::getInstance()->get('donation_baseInfo');
        if(empty($baseInfo)){
            $this->redirect('/donation/prove');
        }

        $proveInfo = Yaf_Session::getInstance()->get('donation_proveInfo');
        $bankInfo = Yaf_Session::getInstance()->get('donation_bankInfo');
//        $persionInfo = Yaf_Session::getInstance()->get('donation_persionInfo');

        // 保存银行信息
        $bankData = array(
            'm_id' => M_ID,
            'b_type' => $bankInfo['b_type'],
            'b_name' => $bankInfo['b_name'],
            'b_number' => $bankInfo['b_number'],
            'b_bankName' => $bankInfo['b_bankName'],
            'b_addtime' => date('Y-m-d H:i:s')
        );

        $bankId = BankModel::getInstance()->saveData($bankData);
        // 保存个人资料
        $persionInfo = array(
            'p_realname' => $proveInfo['p_realname'],
            'p_idCard' => $proveInfo['p_idCard'],
            'p_phone' => $proveInfo['p_phone'],
            'p_img' => $proveInfo['p_img'],
            'p_status'=> 1,
            'p_bank' => $bankId,
            'p_addtime' => date('Y-m-d H:i:s')
        );

        $personId = PersonInfoModel::getInstance()->saveData($persionInfo);
        // 保存资金用途图片
        $file = $proveInfo['file'];
        if($file){
            foreach($file as $val){
                $data = array(
                    'mu_pid' => $personId,
                    'mu_img' => $val
                );

                MoneyUsedModel::getInstance()->saveData($data);
            }
        }

        $baseInfo['d_endTime'] = date('Y-m-d', strtotime("+ {$baseInfo['d_endTime']} days"));
        // 保存慈善资料
        $baseData = array(
            'c_id' => $cid,
            'm_id'  => M_ID,
            'd_type' => $d_type,
            'd_title' => $baseInfo['d_title'],
            'd_content' => $baseInfo['d_content'],
            'd_used_title' => $baseInfo['d_used_title'],
            'd_img' => $baseInfo['file'][0],
            'd_company_img' => $proveInfo['p_img'],
            'd_target' => $baseInfo['d_target'],
            'd_endTime'=> $baseInfo['d_endTime'],
            'd_status' => 2,
            'd_person' => $personId,
            'd_addTime' => date('Y-m-d H:i:s')
        );

        $msg = '添加';
        $d_id = DonationModel::getInstance()->saveData($baseData);
        // 保存资金用途图片
        $file = $baseInfo['file'];
        if(count($file) > 9){
            Helper_Json::formJson('只可上传9张慈善图片');
        }

        if($file){
            foreach($file as $val){
                $data = array(
                    'd_id' => $d_id,
                    'di_img' => $val
                );

                DonationImgModel::getInstance()->saveData($data);
            }
        }
		
		        // 添加发布数量
        MemberModel::getInstance()->addPublish(M_ID);

        $this->getView()->assign('d_id', $d_id);
    }

    public function uploadAction($dir = 'donation/') {
        $data = $_POST['image'];
        preg_match("/data:image\/(.*);base64,/", $data, $res);
        $ext = $res[1];
        if(!in_array($ext, array('jpeg','jpg','png','gif'))){
            Helper_Json::formJson('请上传图片');
        }

        $file = time() .'.'. $ext;
        $newfilepath = APP_UPLOAD_DIR . $dir . $file;
        $data = preg_replace("/data:image\/(.*);base64,/", '', $data);
        if(file_put_contents($newfilepath, base64_decode($data)) == false){
            Helper_Json::formJson('上传失败');
        }else{
            $data = array(
                'status' => 1,
                'msg'    => 'SUCCESS',
                'file'   =>	$dir . $file,
                'path'   => $newfilepath,
                'dir'	 => $dir,
                'http'	 => IMAGE_URL.$dir.$file
            );

            Helper_Json::formJson($data, 'y');
        }
    }

    public function upAction(){
        $did = intval($_GET['id']);
        $where = array(
            'd_id' => $did,
        );

        $list = DonationModel::getInstance()->getList($where);
        $this->getView()->assign(array(
                'data' => $list,
                'count' => $list ? count($list) : 0
        )

        );
    }
}