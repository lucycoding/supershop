<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageAuthController extends AdminController {
    /**
     * 权限列表展示
     */
    public function authList() {
        $map = null; // 传入的查询条件
        $Auth   = D('Auth'); // 实例化Auth对象
        $count  = $Auth->where($map)->count();// 查询满足要求的总记录数
        $Page   = parent::getPage($count,8);// 获取分页 传入总记录数和每页显示的记录数
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Auth->where($map)->order('auth_path')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('ainfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    
    /**
     * 添加权限
     */
    public function addAuth() {
        $map['valid_flag'] = 1;
        $ainfo = D('Auth')->where($map)->order('auth_path')->select();
        $this->assign('ainfo',$ainfo);
        if(!empty($_POST)) {
            $Auth = new \Model\AuthModel();
            $flag = $Auth ->saveData($_POST);
            if(!$flag) {
                $this->redirect('addAuth',array(),0.5,  $this->retScriptErr('添加失败！'));
            } else {
                $this->redirect('authList',array(),0.5,  $this->retScriptErr('添加成功！'));
            }
        } 
        $this->display();
    }
}

