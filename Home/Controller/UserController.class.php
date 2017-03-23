<?php
namespace Home\Controller;
use Tools;

class UserController extends Tools\HomeController {
    /**
     * 是否开启三次校验失败后自动开启验证码
     */
    protected $force_check_verify = true;
    /**
    * 验证码配置
    */
    protected $verify_cfg =   array(
            'codeSet'   =>  '23456789bcdefhijkmnpqrstuvwxyBCDEFGHJKLMNPQRTUVWXY',// 验证码字符集合
            'fontSize'  =>  15,              // 验证码字体大小(px)
            'imageH'    =>  35,               // 验证码图片高度
            'imageW'    =>  110,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
            'bg'        =>  array(240, 240, 240),  // 背景颜色
        );
    
    public function __construct() {
        parent::__construct();
        if(!array_key_exists("verify_flag", session())) {
            session("verify_flag", false);
        }
    }

    /**
     * 用户登录
     */
    public function login($name = "", $password = "", $vcode = "", $cookie = 0){
        $this->assign("verflag", session("verify_flag"));
        if(!empty($_POST)) {
            $this->assign("username", $name);
            //校验验证码
            if(session("verify_flag")) {
                $vry = new \Think\Verify();
                if(!$vry ->check($vcode)) {
                    $this->assign("reterr", parent::retScriptErr("验证码错误！"));
                    exit($this->display());
                }
            }
            if(empty($name) || empty($password)) {
                $this->assign("reterr", parent::retScriptErr("用户名和密码不能为空！"));
                exit($this->display());
            }
            $user = new \Model\UserModel();
            $info = $user->checkNamePwd($name, $password, $cookie);
            if($info["retval"] === "err") {// 校验用户失败
                if($this->force_check_verify) { // 是否开启三次自动验证码
                    if(array_key_exists("check_vry_count", session())) {
                        $cnt = session("check_vry_count") + 1;
                        session("check_vry_count", $cnt);
                    }else{
                        session("check_vry_count", 1);
                    }
                }
                $this->assign("reterr", parent::retScriptErr($info["reterr"]));
            }else{
                $this->redirect("Index/index");
            }
        }
        if($this->force_check_verify && session("check_vry_count") >= 3) {
            session("check_vry_count",0);
            session("verify_flag",true);
        }
        $this->assign("verflag", session("verify_flag"));
        $this->display();
    }
    
    /**
     * 用户退出
     */
    public function logout() {
        session("check_vry_count",null);
        session("verify_flag",null);
        session("name",null);
        session("user",null);
        cookie('webautologin', null);
        $this->redirect("Index/index");
    }

    /**
     * 获取验证码
     */
    public function getVerifyImg() {
        //生成验证码
        $verify = new \Think\Verify($this->verify_cfg);
        $verify ->entry();
    }
    
    /**
     * ajax校验验证码
     */
    public function checkRandomCode($code) {
        $vry = new \Think\Verify();
        $data = 'error';
        if($vry ->check($code)) {
            $data = 'ok';
        }
        $this->ajaxReturn($data);
    }
    
    /**
     * 手机登录
     */
    public function phoneLogin($username, $password) {
        
            $user = new \Model\UserModel();
            $info = $user->checkNamePwdForPhone($username, $password);// $password已经为MD5值
            if($info["retval"] === "err") {// 校验用户失败
                die("{\"status\":0,\"token\":\"".date("YmdHis")."\"}");
            }else{
                die("{\"status\":1,\"token\":\"".date("YmdHis")."\"}");
            }
    }
}