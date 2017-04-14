<?php

namespace Model;

use Think\Model;

class CartModel extends Model {

    Protected $autoCheckFields = false;
    //当前购物车名
    public $cookieName;
    //购物车总价格
    public $totalPrice;

    public function __construct($cookieName = "shopcart") {
        $this->cookieName = $cookieName;
        $length = strlen(cookie($this->cookieName));
        if ($length<=0) {
            cookie($this->cookieName,'');
        }
    }

    //获取购物车的信息
    public function getCart() {
        $cur_cart_array = unserialize(cookie($this->cookieName));
        return $cur_cart_array;
    }

    //获取购物车商品清单
    public function getCartList() {
        $cur_cart_array = unserialize(cookie($this->cookieName));
        if ($cur_cart_array != '') {
            $Goods = D("Goods");
            $len = count($cur_cart_array);
            for ($i = 0; $i < $len; $i++) {
                $goodsid = $cur_cart_array[$i]["id"];
                $num = $cur_cart_array[$i]["num"];
                
                $list = $Goods->getByGoods_id($goodsid);
                $list["count"] = $num;
                $list["amount"] = $num * $list["goods_now_price"];
                $cartList[$i] = $list;
                $totalPrice+=$list["amount"];
            }
            //返回商品总价格
            $this->totalPrice = $totalPrice;
            return $cartList;
        }
        return null;
    }

    //加入购物车,购物车的商品id和购物车的商品数量
    public function addcart($goods_id, $goods_num) {
        $cur_cart_array = unserialize(cookie($this->cookieName));
        if ( empty($cur_cart_array) ) {
            $cart_info[0]["id"] = $goods_id; //商品id保存到二维数组中
            $cart_info[0]["num"] = $goods_num; //商品数量保存到二维数组中
            cookie($this->cookieName, serialize($cart_info));
        } else {
            //返回数组键名倒序取最大
            $ar_keys = array_keys($cur_cart_array);
            $len = count($ar_keys);
            $max_array_keyid = $ar_keys[$len - 1] + 1;
            //遍历当前的购物车数组
            //遍历每个商品信息数组的0值，如果键值为0且货号相同则购物车该商品已经添加
            $is_exist = $this->isexist($goods_id, $goods_num, $cur_cart_array);
            if ($is_exist == false) {
                $cur_cart_array[$max_array_keyid]["id"] = $goods_id;
                $cur_cart_array[$max_array_keyid]["num"] = $goods_num;
                cookie($this->cookieName, serialize($cur_cart_array));
            } else {
                $arr_exist = explode("/", $is_exist);
                $id = $arr_exist[0];
                $num = $arr_exist[1];
                $cur_cart_array[$id]["num"] = $num;
                cookie($this->cookieName, serialize($cur_cart_array));
            }
        }
    }

    //判断购物车是否存在相同商品
    public function isexist($id, $num, $array) {
        $isexist = false;
        foreach ($array as $key1 => $value) {
            foreach ($value as $key => $arrayid) {
                if ($key == "id" && $arrayid == $id) {
                    $num = $value["num"] + $num;
                    $isexist = $key1 . "/" . $num;
                }
            }
        }
        return $isexist;
    }

    //从购物车删除
    public function delcart($goods_array_id) {
        //回复序列化的数组
        $cur_goods_array = unserialize(cookie($this->cookieName));
        //删除该商品在数组中的位置
//        unset($cur_goods_array[$goods_array_id]);
        array_splice($cur_goods_array,$goods_array_id,1);
        cookie($this->cookieName, serialize($cur_goods_array));
        //使数组序列化完整的保存到cookie中
    }

    //清空购物车
    public function clearCart() {
        cookie($this->cookieName, null);
    }

    //修改购物车货品数量   
    public function update_cart($up_id, $up_num) {
        //回复序列化的数组
        $cur_cart_array = unserialize(cookie($this->cookieName));
            //返回数组键名倒序取最大
        $ar_keys = array_keys($cur_cart_array);
        $len = count($ar_keys);
        $max_array_keyid = $ar_keys[$len - 1] + 1;
        //遍历当前的购物车数组
        //遍历每个商品信息数组的0值，如果键值为0且货号相同则购物车该商品已经添加
        $is_exist = $this->isexist($up_id, $up_num, $cur_cart_array);
            if ($is_exist == false) {
                $cur_cart_array[$max_array_keyid]["id"] = $up_id;
                $cur_cart_array[$max_array_keyid]["num"] = $up_num;
            } else {
                $arr_exist = explode("/", $is_exist);
                $id = $arr_exist[0];
                $cur_cart_array[$id]["num"] = $up_num;
            }
        cookie($this->cookieName, serialize($cur_cart_array));
    }
}
