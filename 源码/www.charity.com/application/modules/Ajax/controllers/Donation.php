<?php

/**
 * 小区管理员
 *
 * @author: moxiaobai
 * @since : 2016/2/1 17:19
 */

class DonationController extends BaseController
{

    //初始化
    protected function init()
    {
        $this->isAjaxRequest();
        $this->isLogin();
        Yaf_Dispatcher::getInstance()->disableView();
    }

    public function baseAction(){
        // 基本数据过滤
        $data  = $this->getRequest()->getPost();
        if(empty($data['d_target']) || !is_numeric($data['d_target'])){
            Helper_Json::formJson('请填写目标金额');
        }

        if(empty($data['d_used_title'])){
            Helper_Json::formJson('请填写资金用途');
        }

        if(empty($data['d_endTime'])){
            Helper_Json::formJson('请选择结束时间');
        }

        if(empty($data['d_title'])){
            Helper_Json::formJson('请填写筹款标题');
        }

        if(empty($data['d_content'])){
            Helper_Json::formJson('请填写善筹详情');
        }

        Yaf_Session::getInstance()->set('donation_baseInfo', $data);
        Helper_Json::formJson('保存成功', 'y');
    }

    public function persionAction(){
        // 基本数据过滤
        $data  = $this->getRequest()->getPost();
        if(empty($data['username'])){
            Helper_Json::formJson('请填写登记人姓名');
        }

        if(empty($data['phone']) || !Helper_Check::isMobile($data['phone'])){
            Helper_Json::formJson('请填写联系电话');
        }

        if(empty($data['idCard']) || !Helper_Check::isIDCard($data['idCard'])){
            Helper_Json::formJson('请填写身份证');
        }

        Yaf_Session::getInstance()->set('donation_persionInfo', $data);
        Helper_Json::formJson('保存成功', 'y');
    }

    public function proveAction(){
        $data  = $this->getRequest()->getPost();
        $type = Yaf_Session::getInstance()->get('donation_type');
        if($type == 1){
            if(empty($data['p_realname'])){
                Helper_Json::formJson('请填写真实姓名');
            }

            if(empty($data['p_idCard']) || !Helper_Check::isIDCard($data['p_idCard'])){
                Helper_Json::formJson('请填写真实身份证号码');
            }

            if(empty($data['p_phone']) || !Helper_Check::isMobile($data['p_phone'])){
                Helper_Json::formJson('请填写真实手机号码');
            }

        }

        if(empty($data['p_img'])){
            Helper_Json::formJson('请上传身份证明');
        }

        if(empty($data['file'])){
            Helper_Json::formJson('请上传资金用途');
        }

        if($data['checkType'] == 1){
            // 检查是否有上传
            if(empty($data['bankInfo'])){
                Helper_Json::formJson('请填写银行信息');
            }
        }

        Yaf_Session::getInstance()->set('donation_proveInfo', $data);
        Helper_Json::formJson('保存成功', 'y');
    }

    public function bankAction(){
        $data  = $this->getRequest()->getPost();
        if(empty($data['b_name'])){
            Helper_Json::formJson('请填写开户姓名');
        }

        if(empty($data['b_number'])){
            Helper_Json::formJson('请填写银行卡号');
        }

        if(empty($data['b_bankName'])){
            Helper_Json::formJson('请填写开户银行');
        }

        Yaf_Session::getInstance()->set('donation_bankInfo', $data);
        $type = Yaf_Session::getInstance()->get('donation_type');
        if($type == 1){
            $url = '/donation/prove';
        }else{
            $url = '/donation/company';
        }

        Helper_Json::formJson($url, 'y');
    }

    public function replyAction(){
        $me_id = isset($_POST['me_id']) ? intval($_POST['me_id']) : 0;
        $d_id = isset($_POST['d_id']) ? intval($_POST['d_id']) : 0;
        $msg =  isset($_POST['msg']) ? Helper_Filter::format($_POST['msg'], FALSE, TRUE) : '';
        $messageInfo = MessageModel::getInstance()->getInfo($me_id);
        if(empty($messageInfo) || empty($msg)){
            Helper_Json::formJson('无效留言');
        }

        $data = array(
            'me_mid' => M_ID,
            'p_id' => $me_id,
            'd_id' => $d_id,
            'me_name' => M_NAME,
            'me_content' => $msg,
            'me_addTime' => date('Y-m-d H:i:s')
        );

        $ret = MessageModel::getInstance()->saveData($data);
        if($ret){
            Helper_Json::formJson('留言成功', 'y');
        }else{
            Helper_Json::formJson('无效留言');
        }
    }

    public function cashsAction(){
        // 搜索现金表
        $d_id = isset($_POST['d_id']) ? intval($_POST['d_id']) : 0;
        $donationInfo = DonationModel::getInstance()->getInfo($d_id);
        if(empty($donationInfo)){
            Helper_Json::formJson('没有慈善纪录');
        }

        // 获得个人信息
        $persionInfo = PersonInfoModel::getInstance()->getInfo($donationInfo['d_person']);
        if(empty($persionInfo)){
            Helper_Json::formJson('提现信息不全');
        }

        $bankInfo = BankModel::getInstance()->getInfo($persionInfo['p_bank']);

        // 获得个人现金
        $data  = array(
            'ca_type' => 2,
            'd_id' => $d_id,
            'ca_mid' => M_ID,
        );

        $cashsInfo = CashsModel::getInstance()->getData($data);
        if(empty($cashsInfo) || $cashsInfo['ca_left'] <= 0){
            Helper_Json::formJson('提现信息不全,或金额不足');
        }

        // 插入申请表
        $data = array(
            'bl_price' => $cashsInfo['ca_left'],
            'bl_status' => 2,
            'bl_addtime' => date('Y-m-d H:i:s'),
            'd_id' => $d_id,
            'bl_bank_name' => $bankInfo['b_name'],
            'bl_bank_idCard' => $persionInfo['p_idCard'],
            'bl_bank' => $bankInfo['b_bankName'],
            'bl_card_numb' => $bankInfo['b_number'],
            'bl_type' => 2,
            'bl_mid' => M_ID
        );

        $ret = BankLogModel::getInstance()->saveData($data);
        if($ret){
            // 更新现金表
            $data = array(
                'ca_used' => $cashsInfo['ca_total'],
                'ca_left' => 0,
            );

            $ret = CashsModel::getInstance()->saveData($data, $cashsInfo['ca_id']);
            if($ret){
                Helper_Json::formJson('申请提现成功', 'y');
            }else{
                Helper_Json::formJson('提现失败');
            }
        }else{
            Helper_Json::formJson('提现失败');
        }
    }

    public function closeAction(){
        $d_id = isset($_POST['d_id']) ? intval($_POST['d_id']) : 0;
        $data = array(
            'd_status' => 2,
        );

        $ret = DonationModel::getInstance()->saveData($data, $d_id);
        if($ret){
            Helper_Json::formJson('关闭成功', 'y');
        }else{
            Helper_Json::formJson('关闭失败');
        }
    }

    public function deleteAction(){
        $d_id = isset($_POST['d_id']) ? intval($_POST['d_id']) : 0;
        $data = array(
            'd_status' => 2,
        );

        $ret = DonationModel::getInstance()->saveData($data, $d_id);
        if($ret){
            Helper_Json::formJson('关闭成功', 'y');
        }else{
            Helper_Json::formJson('关闭失败');
        }
    }

    public function shareAction(){
        // 用户分享值加1
        $ret = MemberModel::getInstance()->addShare(M_ID);
        if($ret){
            Helper_Json::formJson('分享成功', 'y');
        }else{
            Helper_Json::formJson('分享失败');
        }
    }
}