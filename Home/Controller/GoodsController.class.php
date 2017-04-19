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
        if(!is_numeric($id)) {
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
     * 商品分类page
     */
    public function page($type = '') {
        $map = array();
        $cateName = '所有商品';
        if(is_numeric($type)) {
            $Cate = D('Category');
            $catedata = $Cate->getByType_id($type);
            if($catedata) {
                $map['gc.type_id'] = $type;
                $cateName = $catedata['type_name'];
            }
        }
        $Goods = D('Goods');
        $map['g.valid_flag'] = '1';
        $count = $Goods ->alias('g')
                ->join('tb_goods_cate gc ON g.goods_id = gc.goods_id','LEFT')
                ->join('tb_category c ON c.type_id = gc.type_id','LEFT')
                ->where($map)
                ->count();
        $Page = new \Tools\PageDesk($count,6);
        $show   = $Page->show();// 分页显示输出
        $list = $Goods ->alias('g')
                ->join('tb_goods_cate gc ON g.goods_id = gc.goods_id')
                ->join('tb_category c ON c.type_id = gc.type_id')
                ->where($map)
                ->order('g.goods_id desc')
                ->limit($Page->firstRow.','.$Page->listRows)
                ->select();
        $this->assign('glist',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('cateName',$cateName);// 赋值数据集
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