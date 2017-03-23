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
        $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Note->where($map)->order('note_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('ninfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
}

