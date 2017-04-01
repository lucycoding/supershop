<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageUserController extends AdminController {
    
    /**
     * 获取普通用户
     */
    public function userList() {
        $map['valid_flag'] = 1; // 传入的查询条件
        $User   = D('User'); // 实例化Auth对象
        $count  = $User->where($map)->count();// 查询满足要求的总记录数
        if(parent::ismobile()) {
            $Page   = new \Tools\PageMobile($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        }else{
            $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        }
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where($map)->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('uinfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 获取回收站用户
     */
    public function userTrashList() {
        $map['valid_flag'] = 0; // 传入的查询条件
        $User   = D('User'); // 实例化Auth对象
        $count  = $User->where($map)->count();// 查询满足要求的总记录数
        if(parent::ismobile()) {
            $Page   = new \Tools\PageMobile($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        }else{
            $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        }
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where($map)->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('uinfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    
    /**
     *  添加用户 ajax
     */
    public function addUser() {
        if(!$this->is_ajax_request() || empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $user_name = $_POST['name'];
        $user_keyval = $_POST['pwd'];
        // 释放无用参数
        unset($_POST['name']);
        unset($_POST['pwd']);
        // 校验
        if(!preg_match('/^\w{1,32}$/', $user_name) || 
                strlen($user_keyval) < 6 ) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        // 实例化User
        $User = D('User');
        if($User ->getByUser_name($user_name)) 
            die($this->retAjaxInfo(false, '用户名已存在！'));
        $_POST['user_name'] = $user_name;
        // 加密
        $_POST['user_keyval'] = md5($user_keyval);
        // 设置可见
        $_POST['status'] = 1;
        $_POST['valid_flag'] = 1;
        // 信息存入数据库
        $data = $User ->create();
        if(!$data) 
            die($this->retAjaxInfo(false, '参数错误！'));

        $flag = $User ->add($data);
        if(!$flag) 
            die($this->retAjaxInfo(false, '添加失败！'));

        die($this->retAjaxInfo(true, '添加成功！'));
    }
    
    /**
     * 保存用户一个字段信息 ajax请求
     */
    public function saveUserOneField() {
        if(empty($_POST) || !$this->is_ajax_request()) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $user_id = $_POST['id']; // 操作的用户id
        $User = D('User');
        if(!$User->getByUser_id($user_id)) {
            die($this->retAjaxInfo(false, '该用户不存在！'));
        }
        $column = $_POST['column']; // 操作的数据表字段名称
        // 字符串安全过滤
        $value = $this->str_check($_POST['value']); // 修改的值
        // 允许修改的字段
        $filter = array('user_nickname','user_truename','status','valid_flag');
        if(!preg_match('/^\d{6}$/', $user_id) || 
                !preg_match('/^[A-Za-z_]+$/', $column) || 
                !in_array($column,$filter)) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        $where['user_id'] = $user_id;
        $data["$column"] = $value;
        // 判断数据是否改变，未改变则返回
        $col = $User->getFieldByUser_id($user_id,$column);
        if($col == $value) {
            die($this->retAjaxInfo(false, '数据未改变！'));
        }
        // 保存用户信息
        $flag = $User->where($where)->save($data);
        if(!$flag) {
            die($this->retAjaxInfo(false, '更新失败！'));
        }
        die($this->retAjaxInfo(true,$value));
    }
}

