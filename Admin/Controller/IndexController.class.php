<?php
namespace Admin\Controller;
use Tools;

class IndexController extends Tools\AdminController {

    /**
     * 验证码配置
     */
    protected $verify_cfg = array(
        'codeSet' => '23456789bcdefhijkmnpqrstuvwxyBCDEFGHJKLMNPQRTUVWXY', // 验证码字符集合
        'fontSize' => 18, // 验证码字体大小(px)
        'imageH' => 35, // 验证码图片高度
        'imageW' => 140, // 验证码图片宽度
        'length' => 4, // 验证码位数
        'fontttf' => '4.ttf', // 验证码字体，不设置随机获取
        'bg' => array(176, 175, 175), // 背景颜色
    );

    /**
     * 后台用户登录
     */
    public function login($name = "", $password = "", $vcode = "") {
        if (!empty($_POST)) {
            $this->assign("name", $name);
            //校验验证码
            $vry = new \Think\Verify();
            if (!$vry->check($vcode)) {
                $this->assign("reterr", L('verify_error'));
                exit($this->display());
            }
            $admin = new \Model\AdminModel();
            $info = $admin->checkNamePwd($name, $password);
            if ($info["retval"] === "err") {// 校验用户失败
                $this->assign("reterr", $info["reterr"]);
            } else {
                exit($this->redirect("index"));
            }
        }
        $this->display();
    }
    /**
     * 默认登录后页面
     */
    public function defaultPage() {
        $this->display();
    }
    /**
     * 后台首页
     */
    public function index() {
        // 获取账号角色信息
        $condition['admin_id'] = session('admin_id');
        $admin = D('Admin')->where($condition)->find();
            // 判断是否为admin账号
        if($admin['admin_name'] !== 'suadmin' && session('admin_name') !== 'suadmin') {
            // 通过role_id获取auth_ids
            $mapr['valid_flag']  = 1;
            $role_info = D('Role')->where($mapr)->find($admin['role_id']);
            $auth_ids = $role_info['role_auth_ids'];
            $mapa['auth_id']  = array('in',$auth_ids);
        }
        // 根据auth_ids获得具体权限
        $mapa['valid_flag']  = 1;
        $mapa['auth_level']  = 0;
        $auth_infoA = D('Auth')->where($mapa)->select();
        $mapa['auth_level']  = 1;
        $auth_infoB = D('Auth')->where($mapa)->select();
        // 传值
        $this->assign("auth_infoA",$auth_infoA);
        $this->assign("auth_infoB",$auth_infoB);
        $this->display();
    }

    /**
     * 后台用户退出
     */
    public function logout() {
        session("admin", null);
        session("admin_id", null);
        session("admin_name", null);
        $this->redirect("login");
    }

    /**
     * 获取验证码
     */
    public function getVerifyImg() {
        //生成验证码
        $verify = new \Think\Verify($this->verify_cfg);
        $verify->entry();
    }

    /**
     * 演示页面
     */
    public function demo(){
        $this->display();
    }
}
