<?php

namespace Model;
use Think\Model;
/**
 * 商品类   Goods
 * 数据表   tb_goods
 * 作者     lucy
 */
class GoodsModel extends Model {
    
    public $hostgoods_limit = 12;
    public $newgoods_limit = 12;
    public $salegoods_limit = 12;
    public $specialgoods_limit = 12;
    public $supertype_limit = 12;
    
    public function __construct() {
        parent::__construct();
    }
    
//    protected $pk = 'gid';
//    protected $fields = array(
//        'gid', 
//        'stypeid',
//        'gname',
//        'isbn',
//        'desc',
//        'oprice',
//        'nprice',
//        'picurl',
//        'putdate',
//        'place',
//        'factory',
//        'ctime',
//        'newflag',
//        'saleflag',
//        'hostflag',
//        'specialflag',
//        'gnum',
//        '_type'=>array(
//                'gid'  => 'int', 
//                'stypeid'  => 'int', 
//                'gname'  => 'varchar', 
//                'isbn'  => 'varchar', 
//                'desc'  => 'text', 
//                'oprice'  => 'float', 
//                'nprice'  => 'float', 
//                'picurl'  => 'varchar', 
//                'putdate'  => 'varchar',  
//                'place'  => 'varchar',
//                'factory'  => 'varchar',
//                'ctime'  => 'timestamp',
//                'newflag'  => 'int',
//                'saleflag'  => 'int',
//                'hostflag'  => 'int',
//                'specialflag'  => 'int',
//                'gnum'  => 'int',
//            )
//        );    
//    
//    protected $_map = array(
//        'gid'  => 'bookId', // 把表单中gid映射到数据表的bookId字段
//        'stypeid'  => 'superTypeId', // 把表单中的mail映射到数据表的email字段
//        'gname'  => 'goodsName', 
//        'isbn'  => 'ISBN', 
//        'desc'  => 'introduce', 
//        'oprice'  => 'price', 
//        'nprice'  => 'nowPrice', 
//        'picurl'  => 'picture', 
//        'putdate'  => 'produceDate',  
//        'place'  => 'publisher',
//        'factory'  => 'author',
//        'ctime'  => 'inTime',
//        'newflag'  => 'newgoods',
//        'saleflag'  => 'salegoods',
//        'hostflag'  => 'hostgoods',
//        'specialflag'  => 'specialgoods',
//        'gnum'  => 'goodsNum',
//        );
    
    /**
     * 显示商品
     * @param type $type 显示类别（热卖，新商品，降价,特别推荐）
     * @param type $flag 表示是否是（热卖，新商品，降价）value=1 
     *                    或传递supertype分类id
     * @author lucy <510155189@qq.com>
     */
    public function showGoods($type, $flag) {
        $retList = array();
        if($type === 0) {//全部商品
            $data = $this ->select();
            if($data)
                $retList=$data;
        }else {
            $limit = 6;
            if($type === 1) {//热卖
                $condition['hostgoods'] = $flag;
                $limit = $this->hostgoods_limit;
            }
            if($type === 2) {//新到
                $condition['newgoods'] = $flag;
                $limit = $this->newgoods_limit;
            }
            if($type === 3) {//打折
                $condition['salegoods'] = $flag;
                $limit = $this->salegoods_limit;
            }
            if($type === 4) {//推荐
                $condition['specialgoods'] = $flag;
                $limit = $this->specialgoods_limit;
            }
            if($type === 9) {//商品分类
                $condition['superTypeId'] = $flag;
                $limit = $this->specialgoods_limit;
            }
            $data = $this ->where($condition) ->limit($limit) ->select();
            if($data)
                $retList=$data;
        }
        return $retList;
    }
}

