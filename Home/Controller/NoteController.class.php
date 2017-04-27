<?php
namespace Home\Controller;
use Tools\HomeController;
use Tools\File;

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
    
    public function addNote() {
        if(!empty($_POST)){
            $user = $this->getCurrUser();
            if(empty($user)) {
                //未登录
                $this->error('请先登录后再发帖！','/supershop/Home/User/login',3);
            }
            if(empty($_POST['note_title']) || empty($_POST['note_content'])) {
                $this->redirect('notePage');
            }
            // 过滤
            $filterTitle = $this->noteFilter($_POST['note_title']);
            $filterContent = $this->noteFilter($_POST['note_content']);
            if($_POST['note_title'] != $filterTitle){
                $_POST['note_old_title'] = $_POST['note_title'];
                $_POST['note_title'] = $filterTitle;
            }
            if($_POST['note_content'] != $filterContent){
                $_POST['note_old_content'] = $_POST['note_content'];
                $_POST['note_content'] = $filterContent;
            }
            $_POST['user_id'] = $user['user_id'];
            $_POST['user_name'] = $user['user_name'];
            $Note = D('Note');
            $flag = $Note ->add($_POST);
        }
        $this->redirect('notePage');
    }
    /**
     * 过滤字符
     * @param type $content
     * @return type
     */
    private function noteFilter($content){
        $file = new File();
        $filter = $file->getNoteFilterContent();
        if(!empty($content)){
            $contentArr = preg_split('/(?<!^)(?!$)/u', $content );
            foreach($contentArr as $c) {
                foreach ($filter as $f){
                    $strpos = strpos($f, $c);
                    if($strpos!==false) {
                        $content = str_replace($c, "*", $content);
                    }
                }
            }
        }
        return $content;
    }
}