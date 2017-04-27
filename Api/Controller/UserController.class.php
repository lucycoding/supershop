<?php
namespace Api\Controller;
use Tools\ApiController;

class UserController extends ApiController {
    /**
     * 手机登录
     */
    public function login($username, $password) {
//        if(IS_POST) {
            $user = new \Model\UserModel();
            $info = $user->checkNamePwdForPhone($username, $password);// $password已经为MD5值
            if($info["retval"] === "err") {// 校验用户失败
                parent::returnApiError($info["reterr"]);
            }else{
                $uinfo = $user->field("user_keyval,safe_answer",true)->where(array("valid_flag"=>1,"user_name"=>$username))->select();
                if($uinfo) {
                    parent::returnApiSuccess(array("token"=>date("YmdHis"),"uinfo"=>$uinfo), "登录成功");
                }else{
                    parent::returnApiError("用户状态不可用，请联系网站管理员！");
                }
            }
//        }else{
//            parent::returnApiError("This is illegal request!");
//        }
    }
}