<?php
namespace Model;
use Think\Model;

class UserModel extends Model {

    protected $NAME_ERROR_INFO = array("retval"=>"err","reterr"=>"用户名不存在！","retinfo"=>"name");
    protected $PWD_ERROR_INFO = array("retval"=>"err","reterr"=>"密码错误！","retinfo"=>"pwd");
    protected $SUCCESS_INFO = array("retval"=>"ok","reterr"=>"","retinfo"=>"");    

    public function __construct() {
        parent::__construct();
    }
    /**
     * pc端登录 判断用户名密码是否正确
     * @param type $name
     * @param type $password
     * @param type $cookie
     * @return type
     */
    public function checkNamePwd($name, $password, $cookie) {
        // 判断用户名是否存在
        $info = $this ->getByUser_name($name);
        if(!$info)
            return $this->NAME_ERROR_INFO;
        // 判断用户名密码是否正确
        $condition["user_name"] = $name;
        $condition["user_keyval"] = md5($password);
        $info = $this->where($condition)->find();
        if(!$info)
            return $this->PWD_ERROR_INFO;
        // 释放不需要的变量
        unset($info["user_keyval"]);
        unset($info["safe_answer"]);
        // $cookie为真则保存用户名密码至cookie以备7天内自动登录
        if($cookie) {
            $autologin = array('k' => $name, 'v' => base64_encode(md5($password)) );
            cookie('webautologin',$autologin,'expire=604800');
        }
        // 存入session
//        session("name",$info["name"]);
        session("user",$info);
        return $this->SUCCESS_INFO;
    }
    /**
     * app端 判断用户名密码是否正确
     * @param type $name
     * @param type $password
     * @param type $cookie
     * @return type
     */
    public function checkNamePwdForPhone($name, $password_md5) {
        // 判断用户名是否存在
        $info = $this ->getByUser_name($name);
        if(!$info)
            return $this->NAME_ERROR_INFO;
        // 判断用户名密码是否正确
        $condition["user_name"] = $name;
        $condition["user_keyval"] = $password_md5;
        $info = $this->where($condition)->find();
        if(!$info)
            return $this->PWD_ERROR_INFO;
        // 释放不需要的变量
        unset($info["user_keyval"]);
        unset($info["safe_answer"]);
        return $this->SUCCESS_INFO;
    }
    
    /**
     * 通过用户名查用户信息(排除密码、安全问题答案字段)
     * @param type $name
     */
    public function getUinfoByName($name) {
        $uinfo = $this->field("user_keyval,safe_answer",true)->where(array("valid_flag"=>1,"user_name"=>$name))->limit(1)->select();
        return $uinfo[0];
    }
    /**
     * 通过用户id查用户信息(排除密码、安全问题答案字段)
     * @param type $name
     */
    public function getUinfoById($id) {
        $uinfo = $this->field("user_keyval,safe_answer",true)->where(array("valid_flag"=>1,"user_id"=>$id))->limit(1)->select();
        return $uinfo[0];
    }
    /**
     * 重置密码
     * @param type $name
     * @param type $password
     * @return type
     */
    public function updateUserPwd($name,$password){
        if(!empty($name) && !empty($password)) {
            $where["user_name"] = $name;
            $data["user_keyval"] = md5($password);
            return $this->where($where)->data($data)->save();
        }
        return false;
    }
    /**
     * 修改密码
     * @param type $name
     * @param type $password
     * @return type
     */
    public function updateUserPwdById($id,$password,$newPassword){
        if(!empty($id) && !empty($password)) {
            $where["user_id"] = $id;
            $where["user_keyval"] = md5($password);
            $data["user_keyval"] = md5($newPassword);
            return $this->where($where)->data($data)->save();
        }
        return false;
    }
    
    /**
     * 新增用户
     * @param type $name
     * @param type $password
     * @return boolean
     */
    public function saveUser($name, $password){
        if(!empty($name) && !empty($password)) {
            $data["user_name"] = $name;
            $data["user_keyval"] = $password;
            $data["status"] = 1;
            $data["valid_flag"] = 1;
            return $this->add($data);
        }
        return false;
    }
    /**
     * 更新用户信息
     */
    public function updateUser($data){
        if(!empty($data) && !empty($data['user_id'])) {
            return $this->save($data);
        }
        return false;
    }
}

