<?php
namespace Tools;
use Think\Controller;
class CommonController extends Controller {
    
    public function __construct() {
        parent::__construct();
    }
    /**
     * 返回js错误信息
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
    /**
     * 判断是否为移动端
     * @return boolean
     */
    function ismobile() {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
            return true;

        //此条摘自TPM智能切换模板引擎，适合TPM开发
        if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
            return true;
        //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA']))
            //找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
        //判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array(
                'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
            );
            //从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return true;
            }
        }
        //协议法，因为有可能不准确，放到最后判断
        if (isset ($_SERVER['HTTP_ACCEPT'])) {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return true;
            }
        }
        return false;
    }
    
    
/*************************** api开发辅助函数 **********************/

    /**
     * @param null $msg  返回正确的提示信息
     * @param flag success CURD 操作成功
     * @param array $data 具体返回信息
     * Function descript: 返回带参数，标志信息，提示信息的json 数组
     *
     */
    function returnApiSuccess($data = array(),$msg = 'success') {
        $result = array(
            'status' => 1,
            'msg' => $msg,
            'data' => $data
        );
        print json_encode($result);
    }

    /**
     * @param null $msg  返回具体错误的提示信息
     * @param flag success CURD 操作失败
     * Function descript:返回标志信息 ‘Error'，和提示信息的json 数组
     */
    function returnApiError($msg = 'fail') {
        $result = array(
            'status' => 0,
            'msg' => $msg,
        );
        print json_encode($result);
    }

    /**
     * @param null $msg  返回具体错误的提示信息
     * @param flag success CURD 操作失败
     * Function descript:返回标志信息 ‘Error'，和提示信息，当前系统繁忙，请稍后重试；
     */
    function returnApiErrorExample() {
        $result = array(
            'status' => 0,
            'msg' => '当前系统繁忙，请稍后重试！',
        );
        print json_encode($result);
    }

    /**
     * @param null $data
     * @return array|mixed|null
     * Function descript: 过滤post提交的参数；
     *
     */
    function checkDataPost($data = null) {
        if (!empty($data)) {
            $data = explode(',', $data);
            foreach ($data as $k => $v) {
                if ((!isset($_POST[$k])) || (empty($_POST[$k]))) {
                    if ($_POST[$k] !== 0 && $_POST[$k] !== '0') {
                        returnApiError($k . '值为空！');
                    }
                }
            }
            unset($data);
            $data = I('post.');
            unset($data['_URL_'], $data['token']);
            return $data;
        }
    }

    /**
     * @param null $data
     * @return array|mixed|null
     * Function descript: 过滤get提交的参数；
     *
     */
    function checkDataGet($data = null) {
        if (!empty($data)) {
            $data = explode(',', $data);
            foreach ($data as $k => $v) {
                if ((!isset($_GET[$k])) || (empty($_GET[$k]))) {
                    if ($_GET[$k] !== 0 && $_GET[$k] !== '0') {
                        returnApiError($k . '值为空！');
                    }
                }
            }
            unset($data);
            $data = I('get.');
            unset($data['_URL_'], $data['token']);
            return $data;
        }
    }

}

