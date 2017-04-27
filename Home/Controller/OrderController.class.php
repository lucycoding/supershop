<?php
namespace Home\Controller;
use Tools\HomeController;
/**
 * Description of OrderController
 *
 * @author lcy
 */
class OrderController extends HomeController {
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 创建订单
     */
    public function addOrder() {
        $post = I('post.'); // 获取post中所有数据
        if (is_null($post) || is_null($this->getCurrUser()) ) {
            die($this->error());
        }
        // 获取购物车数据
        $cartList = $this->cart->getCartList();
        $cartTotalPrice = $this->cart->totalPrice;
        if(is_null($cartList) || $cartTotalPrice < 0) {
            die($this->error());
        }
        // 获取session用户数据
        $user = $this->getCurrUser();
        // 封装到post中create
        $post["user_id"] = $user["user_id"];
        $post["user_name"] = $user["user_name"];
        $post["pay_price"] = $cartTotalPrice;
        $post["valid_flag"] = '1';
        // 订单表开启事务
        $Order = D('Order');
        $Order->startTrans();
        // 订单费表开启事务
        $OrderItem = D('Order_item');
        $OrderItem->startTrans();
        
        $flag=true;
        // 插入数据到订单表
        $orderId = $Order ->add($post);
        if($orderId){
            foreach($cartList as $v) {
                $map["order_id"] = $orderId;
                $map["goods_id"] = $v["goods_id"];
                $map['goods_name'] = $v['goods_name'];
                $map['price'] = $v['amount'];
                $map['num'] = $v['count'];
                $ret = $OrderItem->add($map);
                if(!$ret){ $flag = false;}
            }
        }else{
            $flag=false;
        }
        if(!$flag) {
            $Order->rollback();
            $OrderItem->rollback();
            die($this->error());
        }
        $Order->commit();
        $OrderItem->commit();
        $post["order_id"] = $orderId;
        //清空购物车
        $this->cart->clearCart();
        // 将数据传入下一个页面
        $this->assign("data",$post);
        $this->display("orderSuccess");
    }
    
    /**
     * 订单成功页
     */
    public function orderSuccess(){
        // 无数据跳转
        $data = $_REQUEST['data'];
        if(is_null($data)) {
            $this->redirect("Index/index");
        }
        $this->assign("data",$data);
        $this->display();
    }
    /**
     * 当前用户下所有订单列表
     */
    public function personalAllOrder() {
        $user = parent::getCurrUser();
        if(!empty($user)) {
            $where['user_id'] = $user['user_id'];
            $where['valid_flag'] = 1;
            $Order = D('Order');
            $list = $Order->where($where)->order('create_time desc')->select();
            $this->assign("list",$list);
        }
        $this->display();
    }
    /**
     * 该订单下商品列表
     * @param type $orderId
     */
    public function personalOrderItems($orderId) {
        if(!empty($orderId)) {
            $where['order_id'] = $orderId;
            $OrderItem = D('Order_item');
            $list = $OrderItem->where($where)->select();
            $totalPrice = 0;
            foreach ($list as $v) {
                $totalPrice += $v['price'];
            }
            $this->assign("totalPrice",$totalPrice);
            $this->assign("list",$list);
        }
        $this->display();
    }
    /**
     * 确认收货，用户操作
     * @param type $param
     */
    public function confirmOrder($id) {
        $user = parent::getCurrUser();
        if(!empty($user) && !empty($id)) {
            $where['order_id'] = $id;
            $where['user_id'] = $user['user_id'];
            $data['status'] = 2;
            $Order = D('Order');
            $flag = $Order->where($where)->save($data);
            if($flag){
                $this->assign("reterr", parent::retScriptErr("确认收货成功！"));
            }else{
                $this->assign("reterr", parent::retScriptErr("确认收货失败！"));
            }
            //再次获取订单数据
            $where['valid_flag'] = 1;
            unset($where['order_id']);
            $list = $Order->where($where)->order('create_time desc')->select();
            $this->assign("list",$list);
        }
        $this->display('personalAllOrder');
    }
}
