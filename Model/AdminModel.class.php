<?php

namespace Model;
use Think\Model;

class AdminModel extends Model {
    
    protected $PARAM_ERROR_INFO = array("retval"=>"err","reterr"=>"登录名和密码不能为空！","retinfo"=>"name,pwd");
    protected $NAME_ERROR_INFO = array("retval"=>"err","reterr"=>"登录名不存在！","retinfo"=>"name");
    protected $STATUS_ERROR_INFO = array("retval"=>"err","reterr"=>"该账号已禁用，请联系管理员！","retinfo"=>"name");
    protected $PWD_ERROR_INFO = array("retval"=>"err","reterr"=>"密码错误！","retinfo"=>"pwd");
    protected $SUCCESS_INFO = array("retval"=>"ok","reterr"=>"","retinfo"=>"操作成功！");

    public function __construct() {
        parent::__construct();
    }

    public function checkNamePwd($name, $password) {
        // 检查数据空值
        if(empty($name) || empty($password)) {
            return $this ->PARAM_ERROR_INFO;
        }
        // 检查用户名是否存在
        $map['admin_name|admin_phone|admin_email'] = $name;
        $info = $this ->where($map)->find();
        if(!$info)
            return $this ->NAME_ERROR_INFO;
        // 检查用户是否被禁用
        if($info['valid_flag'] == 0)
            return $this ->STATUS_ERROR_INFO;
        // 检查用户密码是否正确
        if($info["admin_keyval"] != md5($password)) 
            return $this ->PWD_ERROR_INFO;
        // 更新用户登录信息
        $condition["admin_id"] = $info["admin_id"];
        $data['last_login_time'] = date('Y-m-d H:i:s',time());
        $data['last_login_ip'] = $this->getIp();
            // 更新时间和ip
        $this->where($condition)->save($data);
            // 更新登录次数
        $this->where($condition)->setInc('login_count');
        
        // 记录日志
        $this->saveAdminLog($info["admin_id"], $info["admin_name"], 
                $data['last_login_time'], $data['last_login_ip']);
        // 释放不需要的数据
        unset($info['admin_keyval']);
        // 用户信息存入session
        session("admin_id",$info["admin_id"]);
        session("admin_name",$info["admin_name"]);
        session("admin",$info);
        return $this ->SUCCESS_INFO;
    }
    
    /**
     * 打印日志tb_admin_log
     */
    protected function saveAdminLog($admin_id,$admin_name,$login_time,$login_ip) {
        $log = M('Admin_log');
        $log->admin_id = $admin_id;
        $log->admin_name = $admin_name;
        $log->login_time = $login_time;
        $log->login_ip = $login_ip;
        $log ->add();
    }
    
    /**
     * 获取IP地址
     */
    public function getIp(){
        $ip='未知IP';
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            return $this->is_ip($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:$ip;
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            return $this->is_ip($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$ip;
        }else{
            return $this->is_ip($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:$ip;
        }
    }
    /**
     * 判断是否为ip
     * @param type $str 传入ip字符串
     * @return boolean 是/否
     */
    public function is_ip($str){
        $ip=explode('.',$str);
        for($i=0;$i<count($ip);$i++){ 
            if($ip[$i]>255){ 
                return false; 
            } 
        } 
        return preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/',$str); 
    }
}

