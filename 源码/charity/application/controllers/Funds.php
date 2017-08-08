<?php

/**
 * 结算管理
 *
 * @author: monyyip
 * @since : 2016/5/31 16:43
 */

class FundsController extends BaseController {

    private $_pageSize;
    private $_model;
    private $_status = array(
        1 => '已通过',
        2 => '待通过'
    );

    private $_type = array(
        1 => '机构申请',
        2 => '个人申请'
    );

    private function init() {
        $this->_model = new FundsModel();

        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {

        $this->initPageTitle('提现申请');
        $title   = isset($_GET['title']) ? Helper_Filter::format($_GET['title']) : '';

        $status = isset($_GET['status']) ? intval($_GET['status']) : 2;
        $type = isset($_GET['type']) ? intval($_GET['type']) : '';
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array('title'=>$title, 'status' => $status,'type'=>$type);

        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = $this->_model->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        $data = $this->_model->getList( $where, $pagination );
        $data = DonationModel::getInstance()->mergData($data);
		$data = CompanyModel::getInstance()->mergeData($data,'f_mid');

        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'title'      => $title,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode,
            'cateList' => $this->_type,

            'statusOption' => Helper_Form::option($this->_status, intval($status), '请选择状态'),
            'typeOption' => Helper_Form::option($this->_type, intval($type), '请选择提现角色'),
        ));
    }

    public function statusAction($id = 0, $status = 1,$fid){
        if(empty($id)){
            Helper_Json::formJson('参数错误');
        }

        $data['f_check_status'] = $status == 1 ? 2  : 1;

        //获得提现申请记录
        $row = $this->_model->getInfo($fid);

        //资金更新数据
        $cashsData = array(
            'ca_type' => $row['f_type'],
            'ca_mid'  => $row['f_mid'],
        );
        //资金记录
        $cachsRow = CashsModel::getInstance()->isTrueName($cashsData);
        if($cachsRow){
            //存在修改记录
            $cashsAllData = array(
              'ca_type'   => $row['f_type'],
              'ca_mid'    => $row['f_mid'],
              'ca_total'  => $cachsRow['ca_total'],
              'ca_used'   => $cachsRow['ca_used'] + $row['f_price'],
              'ca_left'   => $cachsRow['ca_left'] - $row['f_price']
            );
            //提现金额小于余额
            if($cashsAllData['ca_left'] >=0){
                $cashsRet = CashsModel::getInstance()->saveData($cashsAllData,$cachsRow['ca_id']);
            }else{
                Helper_Json::formJson('余额不足，无法提现', 'n');

            }

            //修改资金账户成功
            if($cashsRet){
                //未审核 是添加提现记录
                $result = array(
                    'bl_price'           =>$row['f_price'],
                    'bl_addtime'         =>date('Y-m-d H:i:s'),
                    'bl_status'          =>1,
                    'd_id'               =>$row['d_id'],
                    'bl_type'            =>$row['f_type'],
                    'bl_mid'             =>$row['f_mid'],
                    'bl_bank_name'       =>$row['f_name'],
                    'bl_bank_idCard'     =>$row['f_idCard'],
                    'bl_bank'            =>$row['f_bank'],
                    'bl_card_numb'       =>$row['f_card_numb'],
                );

                BankLogModel::getInstance()->saveData($result);
            }

            $msg = '提现成功,请财务确保已经提现';
            $ret = $this->_model->saveData($data, $id);
            if($ret){
                Helper_Json::formJson($msg . '成功','y');
            }else{
                Helper_Json::formJson('失败','n');
            }

        }else{
            Helper_Json::formJson('资金账户异常,无法提现', 'n');
        }




    }

}