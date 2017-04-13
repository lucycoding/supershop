<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageNoteController extends AdminController {
    
    /**
     * 获取用户帖子
     */
    public function noteList() {
        $map['valid_flag'] = 1; // 传入的查询条件
        $Note   = D('Note'); // 实例化Auth对象
        $count  = $Note->where($map)->count();// 查询满足要求的总记录数
        $Page   = parent::getPage($count,8);// 获取分页 传入总记录数和每页显示的记录数
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Note->where($map)->order('note_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('ninfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 保存帖子一个字段信息 ajax请求
     */
    public function saveNoteOneField() {
        if(empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $note_id = $_POST['id']; // 操作的用户id
        $Note = D('Note');
        if(!$Note->getByNote_id($note_id)) {
            die($this->retAjaxInfo(false, '该帖子不存在！'));
        }
        $column = $_POST['column']; // 操作的数据表字段名称
        // 字符串安全过滤
        $value = $this->str_check($_POST['value']); // 修改的值
        // 允许修改的字段
        $filter = array('note_title','note_content','valid_flag');
        if(!preg_match('/^\d{7}$/', $note_id) || 
                !preg_match('/^[A-Za-z_]+$/', $column) || 
                !in_array($column,$filter)) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        $where['note_id'] = $note_id;
        $data["$column"] = $value;
        // 判断数据是否改变，未改变则返回
        $col = $Note->getFieldByNote_id($note_id,$column);
        if($col == $value) {
            die($this->retAjaxInfo(false, '数据未改变！'));
        }
        // 保存信息
        $flag = $Note->where($where)->save($data);
        if(!$flag) {
            die($this->retAjaxInfo(false, '更新失败！'));
        }
        die($this->retAjaxInfo(true,$value));
    }
}

