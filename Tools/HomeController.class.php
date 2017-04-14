<?php
namespace Tools;
use Tools\CommonController;
/**
 * 前台公共controller
 */
class HomeController extends CommonController {
    /**
     * 初始化控制器时
     */
    public function _initialize(){
        if (parent::ismobile()) {
            //设置默认默认主题为 Mobile
            //C('DEFAULT_V_LAYER','Mobile');
            C('DEFAULT_THEME','Mobile');
        }
    }   
    // 购物车
    protected $cart = null;
    /**
     *限制显示个数
     */
    const LIMIT_COUNT = 6;
    /**
     *  允许获取特殊goods数据的controller
     */
    protected $allowgetgoods_arr = array(
        'Index',
        'Goods',
    );
    
    public function __construct() {
        parent::__construct();
        // 获取国际化参数
        $old_lang = session('web_lang_type');
        $new_lang = $_GET['l'];
        if(!session('web_lang') || $old_lang !== $new_lang) {
            session('web_lang', L());
            session('web_lang_type', $new_lang);
        }
        $cname = CONTROLLER_NAME;
        $this->getHeaderPage();
        if(in_array($cname, $this->allowgetgoods_arr))
            $this ->getIndexPage();
        // 购物车
        $this->getShopCart();
        // 自动登录
        $this->autoLogin();
    }
    
    /**
     *  获取特殊goods动态数据存入session
     */
    protected function getIndexPage() {
        // 商品分类
        if (!session('typeList'))
            $this->getHeaderPage();
        $typeList = session('typeList'); // 分类数据
        $tops = array();
        foreach ($typeList as $k=>$v) {
            if($v['type_pid'] == 0) {
                $topid = intval($v['type_id']); // 分类id转为int
                $tops["$topid"]['name'] = $v['type_name']; // 存入分类名称
                $tops["$topid"]['ids'][] = intval($topid); // 本（大）分类id加入分类数组
            } else {
                $topid = explode('-',$v['type_path'])[0]; // 截取所属大分类id
                $tops["$topid"]['ids'][] = intval($v['type_id']);// 将本分类加入分类数组
            }
        }
        $Goods = D('Goods');
        foreach ($tops as $k=>$v) {
            $map['gc.type_id'] = array('in',$v['ids']); // in方法查询
            $map['g.valid_flag'] = 1;
            $map['g.status'] = 1;
            $result = $Goods->field('g.goods_id,g.goods_name,g.goods_old_price,'
                    . 'g.goods_now_price,g.goods_image_url,g.goods_thumb_url,gc.type_id')
                    ->alias('g')
                    ->join('tb_goods_cate gc ON g.goods_id= gc.goods_id')
                    ->where($map)
                    ->order('g.goods_id desc')
                    ->limit(self::LIMIT_COUNT)
                    ->select();
            $tops["$k"]['values'] = $result; // 将分类下的商品信息存入返回数据中
        }
        session('showGoodsList',$tops);
        session('pushListOne',current($tops));
        session('pushListTwo',next($tops));
    }
    /**
     *  获取header模板动态数据存入session
     */
    protected function getHeaderPage() {
        $map['valid_flag'] = 1; // where条件：可使用状态1
        // 公告
        $Inform_cache = S("ss-Inform");
        if(!$Inform_cache) {
            $inform = D('Inform');
            $Inform_cache = $inform ->where($map)->select();
            S("ss-Inform",$Inform_cache);
        }
        session("informList",$Inform_cache);
        
        // 商品分类
            $type = D('Category');
            $Category_cache = $type ->where($map)->select();
        session("typeList",$Category_cache);
    }
    
    /**
     * 通过获取cookie中保存的用户登录信息自动登录
     */
    protected function autoLogin()  {
        if( is_null(session('user')) ) {
            $autologin = cookie('webautologin');
            $name = $autologin['k'];
            $password = base64_decode($autologin['v']);
            if( !is_null($autologin) ) {
                $User = D('User');
                // 判断用户名是否存在
                $info = $User ->getByUser_name($name);
                if($info) {
                    // 判断保存密码是否还正确
                    $condition["user_name"] = $name;
                    $condition["user_keyval"] = $password;
                    $info = $User->where($condition)->find();
                    if($info) {
                        // 释放不需要的变量
                        unset($info["user_keyval"]);
                        unset($info["safe_answer"]);
                        session("user",$info);
                    }
                }
            }
        }
    }
    
    protected function getShopCart() {
        $this->cart = new \Model\CartModel();
        $this->assign("cartList", $this->cart->getCartList());
        $this->assign("cartTotalPrice", $this->cart->totalPrice);
    }
    
    protected function getCurrUser() {
        return session("user");
    }
}
