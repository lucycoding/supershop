<?php
namespace Home\Controller;
use Tools\HomeController;

class GoodsController extends HomeController {
    public function __construct() {
        parent::__construct();
    }
    /**
     * 商品详情页
     */
    public function details($id = '') {
        if(!$id) {
            $this->redirect('Index/index');
        }
        $Goods = D('Goods');
        // 判断商品是否存在
        $retinfo = $Goods->getByGoods_id($id);
        if(!$retinfo)
            $this->redirect('Index/index',array(),0.5,  $this->retScriptErr('该商品不存在！'));
        $this->assign('goodsInfo', $retinfo);
        // 取出该商品的购买记录以及评价信息
        $Goods_log = D('Goods_log');
        $retinfo = $Goods_log->getByGoods_id($id);
        $this->assign('goodsLogInfo', $retinfo);
        
        $this->display();
    }
    /**
     * 加入购物车 ajax
     */
    public function addCart($id = '', $num = 1) {
        if(!$this->is_ajax_request()) {
            die($this->retAjaxInfo(false,'无效访问！'));
        }
        if(!$id) {
            die($this->retAjaxInfo(false,'参数错误！'));
        }
        $this->cart->addcart($id, $num);
        die($this->retAjaxInfo(true,'操作成功！'));
    }
    /**
     * 加入购物车
     */
    public function delCart($id) {
        if(!is_numeric($id)) {
            $this->error('参数错误！');
        }
        $this->cart->delcart($id);
        $this->success();
        
    }
    /**
     * 购物车页面
     */
    public function cart() {
        $this->display();
    }
    /**
     * 更新购物车商品数量
     * @param type $id
     */
    public function updateCartCount($id = '', $count) {
        if(!is_numeric($id) || !is_numeric($count)){
            $this->error('参数错误！');
        }
        $this->cart->update_cart($id, $count);
        $this->redirect('cart');
    }
    
    /**
     * 获取分类 手机端
     */
    public function getCategory() {
        $map['valid_flag'] = 1; // where条件：可使用状态1
        // 商品分类
        $type = D('Category');
        $result_data["status"] = 0;
        $Category = $type ->where($map)->select();
        if($Category) {
            $result_data["status"] = 1;
            $result_data["data"] = $Category;
        }
        die(json_encode($result_data));
    }
}