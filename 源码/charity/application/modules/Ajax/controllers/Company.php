<?php

/**
 * 小区管理员
 *
 * @author: moxiaobai
 * @since : 2016/2/1 17:19
 */

class CompanyController extends BaseController
{

    //初始化
    private function init()
    {
        $this->isAjaxRequest();
        $this->isLogin();
        Yaf_Dispatcher::getInstance()->disableView();
    }
	
	public function fundAction(){
		if(empty(A_ROLE)){
			Helper_Json::formJson('只有机构登录才可以申请提现');
		}
		
		$f_card_numb = $_POST['f_card_numb'];
		$f_name = $_POST['f_name'];
		$f_phone = $_POST['f_phone'];
		
		if(empty($f_card_numb)){
			Helper_Json::formJson('请输入淘宝账户');
		}
		
		if(empty($f_name)){
			Helper_Json::formJson('请输入姓名');
		}
		
		if(empty($f_phone)){
			Helper_Json::formJson('请输入联系电话');
		}
		
		$cashInfo = CashsModel::getInstance()->getInfo(array('ca_type' => 1,'ca_mid' => A_ROLE));
		if(empty($cashInfo)){
			Helper_Json::formJson('不符合申请标准');
		}
		
		$data = array(
			'f_type' => 1,
			'f_mid'  => A_ROLE,
			'f_price' => $cashInfo['ca_left'],
			'f_card_numb' => $f_card_numb,
			'f_name' => $f_name,
			'f_phone' => $f_phone,
			'f_addTime' => date('Y-m-d H:i:s'),
			'f_check_status' => 2,
			'f_status' => 2,
		);
		
		$ret = FundsModel::getInstance()->saveData($data);
		if($ret){
			Helper_Json::formJson('申请成功', 'y');
		}else{
			Helper_Json::formJson('申请失败');
		}
	}

    //新增保存数据
    public function saveAction() {
        $id  = intval( $_POST['id'] );

        // 基本数据过滤
        $data  = $this->getRequest()->getPost();
        $data['c_prov'] = $data['prov'];
        $data['c_city'] = $data['city'];
        if(!Helper_Check::isMobile($data['c_userphone'])){
            Helper_Json::formJson('请输入正确的手机号码');
        }

        if(!Helper_Check::isIDCard($data['c_userID'])){
            Helper_Json::formJson('请输入正确的身份证');
        }

        unset($data['id']);
        unset($data['prov']);
        unset($data['city']);
        // 保存资金用途图片
        $file = $data['file'];
        if(count($file) > 9){
            Helper_Json::formJson('只可上传9张机构图片');
        }

        unset($data['file']);
        unset($data['uploadCompany']);
        if($id > 0) {
            CompanyImgModel::getInstance()->deleteData($id);
            if($file){
                foreach($file as $val){
                    $imgData = array(
                        'c_id' => $id,
                        'ci_img' => $val
                    );

                    CompanyImgModel::getInstance()->saveData($imgData);
                }
            }

            $result = CompanyModel::getInstance()->saveData($data, $id);
        } else {
            $data['c_addTime'] = date('Y-m-d H:i:s');
            $result = CompanyModel::getInstance()->saveData($data);
            CompanyImgModel::getInstance()->deleteData($result);
            if($file){
                foreach($file as $val){
                    $imgData = array(
                        'c_id' => $result,
                        'ci_img' => $val
                    );

                    CompanyImgModel::getInstance()->saveData($imgData);
                }
            }

        }

        Helper_Json::formJson('操作成功', 'y');
    }

    //更改状态
    public function statusAction($id, $status) {
        $id = intval($id);
        if( empty($id) ) {
            Helper_Json::formJson('缺失参数');
        }

        $status  = ($status == 1) ? 2: 1;
        $data     = array('c_status'=>$status);
        $result   = CompanyModel::getInstance()->changeData($id,$data);
        if($result) {
            Helper_Json::formJson('操作成功', 'y');
        } else {
            Helper_Json::formJson('操作失败');
        }
    }

    //修改密码
    public function editPasswordAction() {
        $id       = intval( $_POST['id'] );
        $password = $_POST['password'];

        CompanyModel::getInstance()->editPassword($id, $password);
        Helper_Json::formJson('修改成功', 'y');
    }
}