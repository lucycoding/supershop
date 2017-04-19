<?php
namespace Home\Controller;
use Tools\CommonController;

class UserController extends CommonController {
    /**
     * 手机登录
     */
    public function login($username, $password) {
            $user = new \Model\UserModel();
            $info = $user->checkNamePwdForPhone($username, $password);// $password已经为MD5值
            if($info["retval"] === "err") {// 校验用户失败
                die("{\"status\":0,\"token\":\"".date("YmdHis")."\"}");
            }else{
                die("{\"status\":1,\"token\":\"".date("YmdHis")."\"}");
            }
    }
}