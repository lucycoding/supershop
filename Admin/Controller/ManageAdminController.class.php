<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageAdminController extends AdminController {
    protected $list_field = array(
        'a.admin_id',
        'a.admin_name',
        'a.admin_nickname',
        'a.admin_logo_url',
        'a.admin_phone',
        'a.admin_email',
        'a.create_time',
        'a.last_login_time',
        'a.last_login_ip',
        'a.login_count',
        'r.role_id',
        'r.role_name',
    );
    /**
     * 获取管理员列表
     */
    public function adminList() {
        $map['a.valid_flag'] = 1; // 传入的查询条件
        $map['a.admin_name'] = array('neq','suadmin');
        $Admin   = D('Admin'); // 实例化Auth对象
        $count  = $Admin->alias('a')->where($map)->count();// 查询满足要求的总记录数
        $Page   = parent::getPage($count,8);// 获取分页 传入总记录数和每页显示的记录数
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
//        $list = $Admin->alias('a')->where($map)->order('a.admin_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list = $Admin->field($this->list_field)
                ->alias('a')
                ->join('tb_role r ON a.role_id = r.role_id')
                ->where($map)
                ->order('a.admin_id desc')
                ->limit($Page->firstRow.','.$Page->listRows)
                ->select();
        $this->assign('ainfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 获取回收站管理员
     */
    public function adminTrashList() {
        $map['a.valid_flag'] = 0; // 传入的查询条件
        $map['a.admin_name'] = array('neq','suadmin');
        $Admin   = D('Admin'); // 实例化Auth对象
        $count  = $Admin->alias('a')->where($map)->count();// 查询满足要求的总记录数
        $Page   = parent::getPage($count,8);// 获取分页 传入总记录数和每页显示的记录数
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
//        $list = $Admin->alias('a')->where($map)->order('admin_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list = $Admin->field($this->list_field)
                ->alias('a')
                ->join('tb_role r ON a.role_id = r.role_id')
                ->where($map)
                ->order('a.admin_id desc')
                ->limit($Page->firstRow.','.$Page->listRows)
                ->select();        
        $this->assign('ainfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 保存管理员一个字段信息 ajax请求
     */
    public function saveAdminOneInfo() {
        if(empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $admin_id = $_POST['id']; // 操作的用户id
        $Admin = D('Admin');
        if(!$Admin->getByAdmin_id($admin_id)) {
            die($this->retAjaxInfo(false, '该管理员不存在！'));
        }
        $column = $_POST['column']; // 操作的数据表字段名称
        // 字符串安全过滤
        $value = $this->str_check($_POST['value']); // 修改的值
        // 允许修改的字段
        $filter = array('admin_nickname','admin_phone','admin_email','valid_flag');
        if(!preg_match('/^\d{6}$/', $admin_id) || 
                !preg_match('/^[A-Za-z_]+$/', $column) || 
                !in_array($column,$filter)) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        // 判断数据是否改变，未改变则返回
        $col = $Admin->getFieldByAdmin_id($admin_id,$column);
        if($col == $value) {
            die($this->retAjaxInfo(false, '数据未改变！'));
        }
        // 保存信息
        $where['admin_id'] = $admin_id;
        $data["$column"] = $value;
        $flag = $Admin->where($where)->save($data);
        if(!$flag) {
            die($this->retAjaxInfo(false, '更新失败！'));
        }
        die($this->retAjaxInfo(true,$value));
    }
    /**
     *  添加管理员
     */
    public function addAdmin() {
        $Admin = D('Admin');
        $Role = D('Role');
        if(!empty($_POST)) {
            // 获取角色id
            $role_id = $_POST['role'];
            unset($_POST['role']);
            // 校验必须选择一个角色
            if(!$role_id)
                $this->redirect('addAdmin',array(),0.5,  $this->retScriptErr('必须选择一个角色！'));
            // 校验角色是否存在
            $retinfo = $Role ->getByRole_id($role_id);
            if($retinfo)
                $_POST['role_id'] = $role_id;
            else
                $this->redirect('addAdmin',array(),0.5,  $this->retScriptErr('该角色不存在！'));
            $_POST['admin_name'] = $_POST['loginname'];
            $_POST['admin_keyval'] = $_POST['loginpwd'];
            unset($_POST['loginname']);
            unset($_POST['loginpwd']);
            $retinfo = $Admin ->getByAdmin_name($_POST['admin_name']);
            if($retinfo)
                $this->redirect('addAdmin',array(),0.5,  $this->retScriptErr('用户名已存在！'));
            // 设置可见
            $_POST['valid_flag'] = 1;
            // 商品信息存入数据库
            $data = $Admin ->create();
            if(!$data)
                $this->redirect('addAdmin',array(),0.5,  $this->retScriptErr('参数错误！'));
            $flag = $Admin ->add($data);
            if(!$flag) 
                $this->redirect('addAdmin',array(),0.5,  $this->retScriptErr('添加失败！'));
            $this->redirect('adminList',array(),0.5,  $this->retScriptErr('添加成功！'));
        } else {
            $map['valid_flag'] = 1;
            $rinfo = $Role->where($map)->select();
            $this->assign('rinfo', $rinfo);
            $this->display();
        }
    }
}

