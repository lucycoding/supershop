<?php

namespace Model;
use Think\Model;
/*
 * 商品分类类   Supertype
 * 数据表       tb_supertype
 * 作者         lucy
 */
class SupertypeModel extends Model {
    
    protected $pk = 'stypeid';
    protected $fields = array(
        'stypeid', 
        'stypename',
        '_type'=>array(
                'stypeid'  => 'int', 
                'stypename'  => 'varchar', 
            )
        );    
    
    protected $_map = array(
                'stypeid'  => 'superTypeId', 
                'stypename'  => 'typeName', 
        );
}

