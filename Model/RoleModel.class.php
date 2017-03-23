<?php

namespace Model;
use Think\Model;
/*
 * 角色类   Role
 * 数据表   tb_role,tb_auth
 * 作者     lucy
 */
class RoleModel extends Model {
    
    /**
     * 保存分配权限
     */
    public function saveAuth($role_id, $auth_id) {
        $authids = implode(',', $auth_id);
        
        // 制作role_auth_ac
        $authinfo = D('Auth')->select($authids);
        $s = "";
        foreach ($authinfo as $k=>$v) {
            if(!empty($v['auth_c']) && !empty($v['auth_a']))
                $s .= $v['auth_c'].'-'.$v['auth_a'].',';
        }
        $s = rtrim($s,',');
        $where['role_id'] = $role_id;
        $data['role_auth_ids'] = $authids;
        $data['role_auth_ac'] = $s;
        return $this->where($where)->save($data);
    }
    
}

