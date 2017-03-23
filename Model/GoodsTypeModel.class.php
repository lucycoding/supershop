<?php

namespace Model;
use Think\Model;
/*
 * 角色类   Role
 * 数据表   tb_role,tb_auth
 * 作者     lucy
 */
class GoodsTypeModel extends Model {
    
    protected $tableName = 'Category';
    /**
     * 添加类别
     */
    public function saveData($data) {
        $newid = $this->add($data);
        if(!$newid) { //主键
            return false;
        }
        // 拼接auth_path 
        if($data['type_pid'] ==0) {
            $path = $newid;
        } else {
            $pinfo = $this->getFieldByType_id($data['type_pid'],'type_path');
            $path = $pinfo . '-' . $newid;
        }
        // 计算auth_level
        $level = substr_count($path, '-');
        
        $where['type_id'] = $newid;
        $info['type_path'] = $path;
        $info['type_level'] = $level;
        $info['valid_flag'] = 1;
        return $this->where($where)->save($info);
    }
    
}

