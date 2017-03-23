<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageInformController extends AdminController {
    
    /**
     * 获取公告
     */
    public function informList() {
        $map['valid_flag'] = 1; // 传入的查询条件
        $Inform   = D('Inform'); // 实例化Auth对象
        $count  = $Inform->where($map)->count();// 查询满足要求的总记录数
        $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Inform->where($map)->order('inform_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('minfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 获取回收站公告
     */
    public function informTrashList() {
        $map['valid_flag'] = 0; // 传入的查询条件
        $Inform   = D('Inform'); // 实例化Auth对象
        $count  = $Inform->where($map)->count();// 查询满足要求的总记录数
        $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Inform->where($map)->order('inform_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('minfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     *  添加公告 ajax
     */
    public function addInform() {
        if(!$this->is_ajax_request() || empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $inform_title = $_POST['title'];
        $inform_content = $_POST['content'];
        // 释放无用参数
        unset($_POST['title']);
        unset($_POST['content']);
        // 校验
        if( strlen($inform_title) <= 0 || strlen($inform_title) > 32 ) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        // 实例化User
        $Inform = D('Inform');
        $_POST['inform_title'] = $inform_title;
        // 加密
        $_POST['inform_content'] = $inform_content;
        // 设置可见
        $_POST['valid_flag'] = 1;
        // 信息存入数据库
        $data = $Inform ->create();
        if(!$data) 
            die($this->retAjaxInfo(false, '参数错误！'));

        $flag = $Inform ->add($data);
        if(!$flag) 
            die($this->retAjaxInfo(false, '添加失败！'));

        die($this->retAjaxInfo(true, '添加成功！'));
    }
    /**
     * 保存公告一个字段信息 ajax请求
     */
    public function saveInformOneField() {
        if(empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $inform_id = $_POST['id']; // 操作的用户id
        $Inform = D('Inform');
        if(!$Inform->getByInform_id($inform_id)) {
            die($this->retAjaxInfo(false, '该公告不存在！'));
        }
        $column = $_POST['column']; // 操作的数据表字段名称
        // 字符串安全过滤
        $value = $this->str_check($_POST['value']); // 修改的值
        // 允许修改的字段
        $filter = array('inform_title','inform_content','valid_flag');
        if(!preg_match('/^\d{5}$/', $inform_id) || 
                !preg_match('/^[A-Za-z_]+$/', $column) || 
                !in_array($column,$filter)) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        $where['inform_id'] = $inform_id;
        $data["$column"] = $value;
        // 判断数据是否改变，未改变则返回
        $col = $Inform->getFieldByInform_id($inform_id,$column);
        if($col == $value) {
            die($this->retAjaxInfo(false, '数据未改变！'));
        }
        // 保存信息
        $flag = $Inform->where($where)->save($data);
        if(!$flag) {
            die($this->retAjaxInfo(false, '更新失败！'));
        }
        die($this->retAjaxInfo(true,$value));
    }
}

