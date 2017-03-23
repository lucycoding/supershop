<?php

namespace Model;
use Think\Model;
/*
 * 公告类   Inform
 * 数据表   tb_inform
 * 作者     lucy
 */
class InformModel extends Model {
    
    protected $pk = 'iid';
    protected $fields = array(
        'iid', 
        'ititle',
        'icontent',
        'itime',
        '_type'=>array(
                'iid'  => 'int', 
                'ititle'  => 'varchar', 
                'icontent'  => 'varchar', 
                'itime'  => 'timestamp', 
            )
        );    
    
    protected $_map = array(
                'iid'  => 'informId', 
                'ititle'  => 'informTitle', 
                'icontent'  => 'informContent', 
                'itime'  => 'informTime', 
        );
    
}

