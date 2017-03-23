<?php

namespace Model;
use Think\Model;
/*
 * 角色类   Role
 * 数据表   tb_role,tb_auth
 * 作者     lucy
 */
class AuthModel extends Model {
    
    /**
     * 添加权限
     */
    public function saveData($data) {
        $newid = $this->add($data);
        if(!$newid) { //主键
            return false;
        }
        // 拼接auth_path 
        if($data['auth_pid'] ==0) {
            $path = $newid;
        } else {
            $pinfo = $this->getFieldByAuth_id($data['auth_pid'],'auth_path');
            $path = $pinfo . '-' . $newid;
        }
        // 计算auth_level
        $level = substr_count($path, '-');
        
        $where['auth_id'] = $newid;
        $info['auth_path'] = $path;
        $info['auth_level'] = $level;
        $info['valid_flag'] = 1;
        return $this->where($where)->save($info);
    }
    
}

