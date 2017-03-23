<?php
namespace Tools;
use Think\Controller;
class CommonController extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    /**
     * 
     * @param type $err 传入的错误信息
     * @param flag 是否为script语句
     * @return type 返回script
     */
    public static function retScriptErr($err, $flag=false) {
        if($flag)
            return '<script>'.$err.'</script>';
        return '<script>alert("'.$err.'");</script>';
    }
    
    /**
    * 判断是否Ajax请求
    */
    public function is_ajax_request(){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        } else {
            return false;
        }
    }
    /**
     * ajax返回信息处理
     * @param type $flag 操作成功true，失败false
     * @param type $info 返回信息
     * @return type 返回json字符串
     */
    public function retAjaxInfo($flag,$info) {
        if($flag) {
            $flag = 'ok';
        } else {
            $flag = 'error';
        }
        $retinfo = '';
        // 转义info中的\
        $info = str_replace("\\", "\\\\", $info);
        if(is_array($info)) { // 数组拼接
            $retinfo = '{';
            foreach ($info as $k=>$v) {
                $retinfo .= '\"'.$k.'\":\"'.$v.'\",';
            }
            $retinfo = substr($retinfo, 0,-1);
            $retinfo .= '}';
        } else {
            $retinfo = '"' . $info . '"';
        }
        return "{\"retval\":\"".$flag."\", \"reterr\":\"\", \"retinfo\":".$retinfo."}";
    }
    
    /**
     * 防止sql注入代码，过滤post
     * @param type $post
     * @return type
     */
    function post_check($post)     
    {     
        if (!get_magic_quotes_gpc()) {// 判断magic_quotes_gpc是否为打开     
            $post = addslashes($post); // 进行magic_quotes_gpc没有打开的情况对提交数据的过滤     
        }
        $post = str_replace("_", "\_", $post); // 把 '_'过滤掉     
        $post = str_replace("%", "\%", $post); // 把' % '过滤掉     
        $post = nl2br($post); // 回车转换     
        $post= htmlspecialchars($post); // html标记转换        
        return $post;     
    }  
    
    /**
     * 防止sql注入代码，过滤字符串
     * @param type $str
     * @return type
     */
    public function str_check( $str ) {     
        if (!get_magic_quotes_gpc()) {// 判断magic_quotes_gpc是否打开     
            $str = addslashes($str); // 进行过滤     
        }     
        $str = str_replace("_", "\_", $str); // 把 '_'过滤掉     
        $str = str_replace("%", "\%", $str); // 把' % '过滤掉     
        return $str;     
    }     
}

