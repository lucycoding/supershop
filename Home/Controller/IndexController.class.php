<?php
namespace Home\Controller;
use Tools;

class IndexController extends Tools\HomeController {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
//        $cart[0] = array('id'=>'100001','num'=>'2');
//        dump($cart);
//        $str = serialize($cart);
//        echo $str;
//        $unstr = unserialize($str);
//        dump($unstr);
//        cookie('test',  serialize($cart));
//        dump(unserialize(cookie('test')));
//        exit();
//        cookie('name','value','expire=1800&prefix=supershop_');
//        exit(dump(cookie('supershop_name')));
//$Model = M('Goods');
////$where['bookId'] = '114';
////$list = $Model->where($where)->bind(':bookId',I('bookId'))->select();
////dump($list);
//$where['salegoods']    =    '1';
////$where['price']  =    ':name';
//$bind[':salegoods']    =    array(I('salegoods'),\PDO::PARAM_INT);
////$bind[':name']  =    array(I('name'),\PDO::PARAM_STR);
//$list = $Model->where($where)->bind($bind)->limit(4)->select();
//dump($list);
//        $goods = new \Model\GoodsModel();
//        $retList = $goods ->showGoods(1, 1);
//        foreach ($retList AS $v)
//        {
//            echo $v['gid']."-".$v['gname'];
//        }
//        dump($retList);
//        $user =  D("User");
//        dump($goods);
//        $ginfo = $goods ->field('bookId') ->where('price <300') ->select();
//        $ginfo = $goods->parseFieldsMap($ginfo);
//        dump($ginfo);
        $this->display();
    }
}