<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageOrderController extends AdminController {
    
    /**
     * 
     * @param type $type 通过get传入/type/$type
     * 0 未发货 1 已发货 2 已确认收货
     */
    public function orderList($type = 3) {
        // 判断是否传入type
        if(in_array($type, array(0,1,2)))
            $map['status'] = $type;
        $map['valid_flag'] = 1; // 传入的查询条件
        $Order   = D('Order'); // 实例化Auth对象
        $count  = $Order->where($map)->count();// 查询满足要求的总记录数
        $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Order->where($map)->order('order_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('oinfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
}

