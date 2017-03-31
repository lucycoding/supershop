<?php
namespace Tools;
use Tools\CommonController;

class AdminController extends CommonController {
    /**
     * 初始化控制器时
     */
    public function _initialize(){
        if (parent::ismobile()) {
            //设置默认默认主题为 Mobile
            //C('DEFAULT_V_LAYER','Mobile');
            C('DEFAULT_THEME','Mobile');
        }
    }    
    
    public function __construct() {
        parent::__construct();
        // 获取国际化参数
        $old_lang = session('lang_type');
        $new_lang = $_GET['l'];
        if(!session('lang') || $old_lang !== $new_lang) {
            session('lang', L());
            session('lang_type', $new_lang);
        }
        $now_ac = CONTROLLER_NAME.'-'.ACTION_NAME; //当前控制器-操作方法
        $is_ajax = $this->is_ajax_request();
        
        $admin_id = session('admin_id');
        $admin_name = session('admin_name');
        // 判断是否登录
        $login_ac = 'Index-login,Index-getVerifyImg';
        if(strpos($login_ac, $now_ac) === false) { // 非登录页
            if(empty($admin_id) || empty($admin_name)) { // session无用户数据,跳转至登录页
                if($is_ajax) {
                    die($this->retAjaxInfo(false, '未登录！'));
                }
                die($this->retScriptErr('parent.location.href="Index/login";', true));
            }
        } elseif($now_ac === 'Index-login') { // 登录页
            if(!empty($admin_id) && !empty($admin_name)) { // session有用户数据,跳转至index页
                die($this->redirect(MODULE_NAME.'/Index/index'));
            }
        }
        
        if($admin_name !== 'suadmin') { // 不为超管
            // 默认允许访问的 控制器-操作方法
            $allow_ac = 'Index-index,Index-login,Index-defaultPage,Index-getVerifyImg,Index-logout';
            if(strpos($allow_ac, $now_ac) === false ) { // 当前方法不在默认允许的方法中
                $role_id = D('Admin')->getFieldByAdmin_id($admin_id,'role_id');
                $auth_ac = D('Role')->getFieldByRole_id($role_id,'role_auth_ac'); // 当前账号存在的权限 (控制器-操作方法)
                if(strpos($allow_ac, $now_ac) === false && strpos($auth_ac, $now_ac) === false) { // 越权访问
                    if($is_ajax) {
                        die($this->retAjaxInfo(false, '您无权限进行此操作！'));
                    }
                    die('<div align="center"><h2><strong><span>401</span> 您无权访问该页面</strong></h2></br><p>请尝试访问其他页面，并确认您有相应的访问权限！</p></div>');
        //            $this->filterAdminRole($admin_id, $admin_name);
                }
            }
        }
    }
    
}