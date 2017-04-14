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
     * 进入订单信息填写页面
     */
    public function submitOrder(){
        $this->display();
    }
    /**
     * 创建订单
     */
    public function addOrder() {
        if (empty($_POST) || empty($this->getCurrUser()) ) {
            die($this->error());
        }
        $cartList = $this->cart->getCartList();
        $cartTotalPrice = $this->cart->totalPrice;
        if(empty($cartList) || $cartTotalPrice < 0) {
            die($this->error());
        }
        $user = $this->getCurrUser();
        $_POST["user_id"] = $user["user_id"];
        $_POST["user_name"] = $user["user_name"];
        $_POST["pay_price"] = $cartTotalPrice;
        // 订单表开启事务
        $Order = D('Order');
        $Order->startTrans();
        // 订单费表开启事务
        $OrderItem = D('Order_item');
        $OrderItem->startTrans();
        
        $flag=true;
        $data = $Order->create();
        $orderId = $Order ->add($data);
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
        $data["order_id"] = $orderId;
        //情空购物车
        $this->cart->clearCart();
        $this->assign("data",$data);
        $this->display("orderSuccess");
    }
}
