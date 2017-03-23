<?php
return array(
	//'配置项'=>'配置值'
    // 设置rewrite
    'URL_MODEL'             =>  '2', //URL模式
    // 模板后缀
    'URL_HTML_SUFFIX'       =>  'html',
    
    // 页面底部显示跟踪信息
    'SHOW_PAGE_TRACE'       =>  'true',
    
    // 默认分组设置
    'DEFAULT_MODULE'        =>  'Home', // 默认模块
    'MODULE_ALLOW_LIST'     =>  array('Home','Admin'),    
    
    // 切换模板引擎 默认Think
    'TMPL_ENGINE_TYPE'      =>  'Smarty', 
    // success与error模板
    'TMPL_ACTION_ERROR'     =>  'Tpl/dispatch_jump',
    'TMPL_ACTION_SUCCESS'   =>  'Tpl/dispatch_jump',
    
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'supershop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'tb_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_FIELDTYPE_CHECK'    =>  true,  // 开启字段类型验证
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    // 开启Model数据_map自动处理
    'READ_DATA_MAP'         =>  true,
    
    // 国际化
    'LANG_SWITCH_ON'        =>  true,
    'DEFAULT_LANG'          =>  'zh-cn', // 默认语言
    'LANG_AUTO_DETECT'      =>  true, // 自动侦测语言
    'LANG_LIST'             =>  'en-us,zh-cn',// 必须写可允许的语言列表
    'VAR_LANGUAGE'          =>  'l', // 默认语言切换变量
    
    //Cookie
//    'COOKIE_PREFIX'         =>  'ss_',
    'COOKIE_EXPIRE'         =>  '3600',
    'COOKIE_PATH'           =>  '/supershop/',
//    'COOKIE_DOMAIN'         =>  '127.0.0.1',
    
    // 缓存配置
    'DATA_CACHE_TYPE'     => 'Memcache',
    'MEMCACHE_HOST'       => '127.0.0.1',
    'MEMCACHE_PORT'       => '11211',
    'DATA_CACHE_TIME'     => '3600',
);
