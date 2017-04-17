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
        $Page   = parent::getPage($count,8);// 获取分页 传入总记录数和每页显示的记录数
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Order->where($map)->order('order_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('oinfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 保存订单一个字段信息 ajax请求
     */
    public function saveOrderOneField() {
        if(empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $order_id = $_POST['id']; // 操作的商品id
        $Order = D('Order');
        if(!$Order->getByOrder_id($order_id)) {
            die($this->retAjaxInfo(false, '该商品不存在！'));
        }
        $column = $_POST['column']; // 操作的数据表字段名称
        // 字符串安全过滤
        $value = $this->str_check($_POST['value']); // 修改的值
        // 允许修改的字段
        $filter = array('valid_flag');
        if(!preg_match('/^\d{1,}$/', $order_id) || 
                !preg_match('/^[A-Za-z_]+$/', $column) || 
                !in_array($column,$filter)) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        $where['order_id'] = $order_id;
        $data["$column"] = $value;
        // 判断数据是否改变，未改变则返回
        $col = $Order->getFieldByOrder_id($order_id,$column);
        if($col == $value) {
            die($this->retAjaxInfo(false, '数据未改变！'));
        }
        // 保存角色信息
        $data['last_update_time'] = date('Y-m-d H:i:s',time());
        $flag = $Order->where($where)->save($data);
        if(!$flag) {
            die($this->retAjaxInfo(false, '更新失败！'));
        }
        die($this->retAjaxInfo(true,$value));
    }
}

