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
    public function login($name = "", $password = "", $vcode = "", $cookie = 0, $lng = "", $lat = "", $address = ""){
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
                $this->addUserLoginLog(array('lng'=>$lng,'lat'=>$lat,'address'=>$address));
                $this->assign("reterr", parent::retScriptErr("top.location.href='".HOME_URL."/Index/index';",true));
                die($this->display());
                //$this->redirect("Index/index");
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
     * 添加用户登陆日志记录
     * @param type $params
     */
    private function addUserLoginLog($params) {
        $user = parent::getCurrUser();
        if(!empty($user)){
            $userId = $user['user_id'];
            $now = date("Y-m-d H:i:s",time());
            $ip = parent::getIp();
            $lng = $params['lng'];
            $lat = $params['lat'];
            $address = $params['address'];
            // 日志记录
            $logParams = array('user_id'=>$userId,'login_time'=>$now, 
                'login_ip'=>$ip, 'login_lng'=>$lng, 
                'login_lat'=>$lat, 'login_addr'=>$address);
            D("User_login_log")->add($logParams);
            // 更新用户表中信息
            $U = new \Model\UserModel();
            $updateParams = array('user_id'=>$userId,'last_login_time'=>$now, 
                'last_login_ip'=>$ip, 'last_login_lng'=>$lng, 
                'last_login_lat'=>$lat, 'last_login_addr'=>$address);
            $U ->updateUser($updateParams);
        }
    }
    /**
     * 查看用户登录日志
     */
    public function personalLoginLog($count = 5) {
        $user = parent::getCurrUser();
        if(!empty($user) && is_int($count) && $count >0 && $count <100) {
            $where['user_id'] = $user['user_id'];
            $UserLoginLog = D('User_login_log');
            $list = $UserLoginLog->where($where)->order('id desc')->limit($count)->select();
            $this->assign("list",$list);
        }
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
    
    /**
     * 找回密码
     */
    public function retrievePwdIframe($name ="",$answer = "",$newPwd = "") {
        if(!empty($_POST) && !empty($name) && !empty($answer) && !empty($newPwd)) {
            $user = new \Model\UserModel();
            $uinfo = $user->where(array("valid_flag"=>1,"user_name"=>$name))->limit(1)->select();
            if($uinfo){
                if($uinfo[0]['safe_answer'] !== $answer){
                    $this->assign("reterr", parent::retScriptErr("密保答案错误"));
                    die($this->display());
                }
                // 更新密码
                $flag = $user->updateUserPwd($name, $newPwd);
                if($flag) {
                    //清空session
                    parent::clearCurrUser();
                    $this->assign("reterr", parent::retScriptErr("alert('密码重置成功！');top.location.href='".HOME_URL."/User/login';",true));
                    die($this->display());
                    //die($this->success('密码重置成功！','/supershop/Home/User/login',3));
                }else{
                    $this->assign("reterr", parent::retScriptErr("密保重置失败"));
                    die($this->display());
                }
            }else{
                    $this->assign("reterr", parent::retScriptErr("用户名不存在"));
                    die($this->display());
            }
        }
        $this->display();
    }
    /**
     * 注册用户
     */
    public function register($name = "",$password ="") {
        if(!empty($_POST) && !empty($name) && !empty($password)) {
            $user = new \Model\UserModel();
            // 验证用户名是否占用
            $uinfo = $user->getUinfoByName($name);
            if($uinfo) {
                $this->assign("reterr", parent::retScriptErr("用户名已被占用！"));
                exit($this->display());
            }
            // 保存用户
            if($user->saveUser($name, md5($password))){
                // 注册成功
                $this->assign("reterr", parent::retScriptErr("alert('用户注册成功！');top.location.href='".HOME_URL."/Index/index';",true));
                //die($this->success('用户注册成功！用户名：'.$name,'/supershop/Home/User/login',3));
            }else{
                $this->assign("reterr", parent::retScriptErr("注册失败！"));
            }
        }
        $this->display();
    }
    /**
     * 更新用户信息
     * @param type $param
     */
    public function updateUserInfo($userId, $userEmail, $userTruename, $userGender="", $userBirth, 
            $userAddress, $userPostcode, $userOfficePhone, $userPhone) {
        if(!empty($_POST) && !empty($userId)) {
            $user = new \Model\UserModel();
            $data = array('user_id'=>$userId,'user_email'=>$userEmail, 
                'user_truename'=>$userTruename, 'user_gender'=>$userGender, 
                'user_birth'=>$userBirth, 'user_address'=>$userAddress, 
                'user_postcode'=>$userPostcode, 'user_office_phone'=>$userOfficePhone, 
                'user_phone'=>$userPhone);
            if($user->updateUser($data)) {
                $uinfo = $user->getUinfoById($userId);
                session("user",$uinfo);
                $this->assign("reterr", parent::retScriptErr("更新成功！"));
                die($this->display("personalInfo"));
            }else{
                $this->assign("reterr", parent::retScriptErr("更新失败！邮箱或手机号已被使用！"));
            }
        }
        $this->display("personalInfoChange");
    }
    /**
     * 修改密码
     * @param type $userId
     * @param type $password
     * @param type $newPassword
     */
    public function updatePwdByOldpwd($userId, $password, $newPassword) {
        if(!empty($_POST) && !empty($userId) && !empty($password) && !empty($newPassword)) {
            $user = new \Model\UserModel();
            $uinfo = $user->where(array("user_id"=>$userId,"user_keyval"=>md5($password)))->limit(1)->select();
            if($uinfo){
                // 更新密码
                $flag = $user->updateUserPwdById($userId, $password, $newPassword);
                if($flag) {
                    //清空session
                    parent::clearCurrUser();
                    $this->assign("reterr", parent::retScriptErr("alert('修改成功！');top.location.href='".HOME_URL."/User/login';",true));
                }else{
                    $this->assign("reterr", parent::retScriptErr("修改失败！"));
                }
            }else{
                $this->assign("reterr", parent::retScriptErr("原密码不正确！"));
            }
        }
        $this->display("personalPwdChange");
    }
    /**
     * 判断用户名是否存在ajax
     */
    public function checkNameExist($name = "") {
        if(parent::is_ajax_request() && !empty($name)){
            $user = new \Model\UserModel();
            $uinfo = $user->getUinfoByName($name);
            if($uinfo) {
                $this->ajaxReturn(array("status"=>1,"data"=>$uinfo));
            }else{
                $this->ajaxReturn(array("status"=>0,"info"=>"username is not exist"));
            }
        }
        $this->ajaxReturn(array("status"=>0));
    }
}