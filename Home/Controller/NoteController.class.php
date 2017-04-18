<?php
namespace Home\Controller;
use Tools\HomeController;

class NoteController extends HomeController {
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 论坛界面
     */
    public function notePage() {
        $map['valid_flag'] = 1; // 传入的查询条件
        $Note   = D('Note'); // 实例化Auth对象
        $count  = $Note->where($map)->count();// 查询满足要求的总记录数
        $Page   = new \Tools\PageDesk($count,6);// 获取分页 传入总记录数和每页显示的记录数
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Note->where($map)->order('note_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('nlist',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
}