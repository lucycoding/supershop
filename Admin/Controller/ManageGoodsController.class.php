<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageGoodsController extends AdminController {
    
    /**
     * 获取商品列表
     */
    public function goodsList() {
        $map['valid_flag'] = 1; // 传入的查询条件
        $Goods   = D('Goods'); // 实例化Auth对象
        $count  = $Goods->where($map)->count();// 查询满足要求的总记录数
        $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Goods->where($map)->order('goods_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('ginfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 获取回收站商品
     */
    public function goodsTrashList() {
        $map['valid_flag'] = 0; // 传入的查询条件
        $Goods   = D('Goods'); // 实例化Auth对象
        $count  = $Goods->where($map)->count();// 查询满足要求的总记录数
        $Page   = new \Tools\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show   = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Goods->where($map)->order('goods_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('ginfo',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    
    /**
     *  添加商品
     */
    public function addGoods() {
        $Goods = D('Goods');
        $Category = D('Category');
        if(!empty($_POST)) {
            // 处理上传的图片
            if($_FILES['goods_img']['error'] < 4) {
                $cfg = array(
                    'rootPath'  =>  './Public/upload/', // 保存根路径
                );
                $up = new \Think\Upload($cfg); // 实例化文件上传类
                // 方法执行成功，返回附件信息
                $z = $up -> uploadOne($_FILES['goods_img']); // 上传一张图片
                // 大图路径
                $imagePath = $up -> rootPath.$z['savepath'].$z['savename'];
                // 小图路径
                $thumbPath = $up -> rootPath.$z['savepath'].'thumb_'.$z['savename'];
                
                // 制作缩略图
                $thumb = new \Think\Image(); // 实例化图片处理类
                $thumb ->open($imagePath); // 打开图片
                $thumb ->thumb(50, 50, 6); // 制作缩略图
//                $thumb ->text(WEB_NAME, './Public/fonts/4.ttf', 12, '#000000', \Think\Image::IMAGE_WATER_SOUTHEAST);
                $thumb ->save($thumbPath); // 保存缩略图到服务器
                
                // 把上传好的附件路径存入数据库
                $_POST['goods_image_url'] = ltrim($imagePath, './'); // 截去左边的字符
                $_POST['goods_thumb_url'] = ltrim($thumbPath, './'); // 截去左边的字符
            }
            // 设置可见
            $_POST['valid_flag'] = 1;
            // 商品信息存入数据库
            $data = $Goods ->create();
            $flag = $Goods ->add($data);
            if(!$flag) {
                $this->redirect('addGoods',array(),0.5,  $this->retScriptErr('添加失败！'));
            } else {
                $where['id'] = $flag;
                $data['goods_id'] = $flag;
                $Goods->where($where)->save($data);
            }
            // 保存类型信息至goods_cate
            if(!empty($_POST['goods_type'])) {
                $arr = $_POST['goods_type'];
                    $Goods_cate = D('Goods_cate');
                    // 批量添加数据
                    foreach ($arr as $v) {
                        if($v == '0') continue;
                        $dataList[] = array('goods_id'=>$flag,'type_id'=>$v);
                    }
                    if(!empty($dataList))
                        $Goods_cate->addAll($dataList);
            }
            $this->redirect('goodsList',array(),0.5,  $this->retScriptErr('添加成功！'));
        } else {
            $map['valid_flag'] = 1;
            $tinfo = $Category->where($map)->order('type_path')->select();
            $this->assign('tinfo', $tinfo);
            $this->display();
        }
    }
    
    
    /**
     * 保存商品一个字段信息 ajax请求
     */
    public function saveGoodsOneField() {
        if(empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $goods_id = $_POST['id']; // 操作的商品id
        $Goods = D('Goods');
        if(!$Goods->getByGoods_id($goods_id)) {
            die($this->retAjaxInfo(false, '该商品不存在！'));
        }
        $column = $_POST['column']; // 操作的数据表字段名称
        // 字符串安全过滤
        $value = $this->str_check($_POST['value']); // 修改的值
        // 允许修改的字段
        $filter = array('goods_name','goods_old_price','goods_now_price',
            'goods_produce_place','goods_brand','status','goods_num','valid_flag');
        if(!preg_match('/^\d{7}$/', $goods_id) || 
                !preg_match('/^[A-Za-z_]+$/', $column) || 
                !in_array($column,$filter)) {
            die($this->retAjaxInfo(false, '参数错误！'));
        }
        $where['goods_id'] = $goods_id;
        $data["$column"] = $value;
        // 判断数据是否改变，未改变则返回
        $col = $Goods->getFieldByGoods_id($goods_id,$column);
        if($col == $value) {
            die($this->retAjaxInfo(false, '数据未改变！'));
        }
        // 保存角色信息
        $data['last_update_time'] = date('Y-m-d H:i:s',time());
        $flag = $Goods->where($where)->save($data);
        if(!$flag) {
            die($this->retAjaxInfo(false, '更新失败！'));
        }
        die($this->retAjaxInfo(true,$value));
    }
    
}

