<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageRoleController extends AdminController {
    
    /**
     * 角色列表展示
     */
    public function roleList() {
        $map = null; // 传入的查询条件
        $Role   = D('Role'); // 实例化Auth对象
        $count  = $Role->where($map)->count();// 查询满足要求的总记录数
        $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Role->where($map)->order('role_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('rinfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    
    /**
     * 保存角色信息 ajax请求
     */
    public function saveRole() {
        if(empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $role_id = $_POST['id']; // 操作的角色id
        $Role = D('Role');
        if(!$Role->getByRole_id($role_id)) {
            die($this->retAjaxInfo(false, '该角色不存在！'));
        }
        $column = $_POST['column']; // 操作的数据表字段名称
        // 字符串安全过滤
        $value = $this->str_check($_POST['value']); // 修改的值
        // 允许修改的字段
        $filter = array('role_name','valid_flag');
        if(!preg_match('/^\d{4}$/', $role_id) || 
                !preg_match('/^[A-Za-z_]+$/', $column) || 
                !in_array($column,$filter)) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        $where['role_id'] = $role_id;
        $data["$column"] = $value;
        // 判断数据是否改变，未改变则返回
        $col = $Role->getFieldByRole_id($role_id,$column);
        if($col == $value) {
            die($this->retAjaxInfo(false, '数据未改变！'));
        }
        // 保存角色信息
        $flag = $Role->where($where)->save($data);
        if(!$flag) {
            die($this->retAjaxInfo(false, '更新失败！'));
        }
        die($this->retAjaxInfo(true,$value));
    }


    /**
     * 分配权限
     */
    public function assignAuth($role_id) {
        $Role = new \Model\RoleModel();
        // 两个业务逻辑
        // save
        if(!empty($_POST)) {
            $retflag = $Role ->saveAuth($_POST['role_id'],$_POST['auth_id']);
            if($retflag) {
                $this->redirect('roleList',array(),0.5,$this->retScriptErr('分配权限成功！'));
            } else {
                $this->redirect('assignAuth',array('role_id'=>$role_id),0.5,$this->retScriptErr('分配权限失败！'));
            }
        } else {
            // select
            // 查询被分配权限的角色信息
            $rinfo = $Role->find($role_id);
            $this->assign('rinfo',$rinfo);
            // 根据auth_ids获得具体权限
            $map['valid_flag'] = 1;
            $auth_info = D('Auth')->where($map)->select();
//            exit(dump($auth_info));
            $this->assign('auth_info',$auth_info);
            $this->display();
//            $map['auth_level'] = 0;
//            $auth_infoA = D('Auth')->where($map)->select();
//            $map['auth_level'] = 1;
//            $auth_infoB = D('Auth')->where($map)->select();
//            $this->assign('auth_infoA',$auth_infoA);
//            $this->assign('auth_infoB',$auth_infoB);
//            $this->display();
        }
    }
}

