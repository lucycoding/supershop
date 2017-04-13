<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageGoodsTypeController extends AdminController {
    
    /**
     * 类别列表展示
     */
    public function goodsTypeList() {
        $map['valid_flag'] = 1; // 传入的查询条件
        $Category   = D('Category'); // 实例化Auth对象
        $count  = $Category->where($map)->count();// 查询满足要求的总记录数
        $Page   = parent::getPage($count,8);// 获取分页 传入总记录数和每页显示的记录数
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Category->where($map)->order('type_path')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('tinfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    
    /**
     *  添加类别
     */
    public function addGoodsType() {
        $where['valid_flag'] = 1;
        $tinfo = D('Category')->where($where)->order('type_path')->select();
        $this->assign('tinfo', $tinfo);
        if(!empty($_POST)) {
            $Type = new \Model\GoodsTypeModel();
            $flag = $Type ->saveData($_POST);
            if(!$flag) {
                $this->redirect('addGoodsType',array(),0.5,  $this->retScriptErr('添加失败！'));
            } else {
                $this->redirect('goodsTypeList',array(),0.5,  $this->retScriptErr('添加成功！'));
            }
        } 
        $this->display();
    }
}

