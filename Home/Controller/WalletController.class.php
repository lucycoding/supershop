<?php
namespace Home\Controller;
use Tools;

class WalletController extends Tools\HomeController {
    // 安全过滤访问方法
    const SECURITY_FUNC = 'getWallet';
    
    public function __construct() {
        parent::__construct();
        // 安全过滤
        $now_ac = ACTION_NAME; //当前访问的操作方法
        $pos = strpos($this::SECURITY_FUNC, $now_ac);
        if($pos>0||$pos==0) { // 在安全过滤访问方法中
            if(is_null(session('user'))) { // session无用户数据,跳转至登录页
                if($this->is_ajax_request()) {
                    $this->ajaxReturn(array("status"=>0,"info"=>"Illegal operation!"));
                }
                die(parent::retScriptErr('parent.location.href="'.HOME_URL.'/index";', true));
            }
        }
    }

    /**
     * 获取账户余额
     * @param type $user_id
     */
    public function getWallet($userId = "") {
        if(parent::is_ajax_request() && !empty($userId)) {
            $user = new \Model\UserModel();
            $uinfo = $user->getUinfoById($userId);
            if(empty($uinfo)) {
                $this->ajaxReturn(array("status"=>0,"info"=>"user is not exist"));
            }
            $Wallet = D('Wallet');
            $winfo = $Wallet->getByUser_id($id);
            if(empty($winfo)) {
                // 无数据
                if($Wallet->data(array('user_id'=>$userId,'wallet_rmb_balance'=>0))->add()) {
                    $winfo = $Wallet->getByUser_id($userId);
                    $this->ajaxReturn(array("status"=>1,"data"=>$winfo));
                }
            }else{
                $this->ajaxReturn(array("status"=>1,"data"=>$winfo));
            }
        }
        $this->ajaxReturn(array("status"=>0));
    }
}