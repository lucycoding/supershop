<?php
namespace Admin\Controller;
use Tools\AdminController;

class ManageOtherController extends AdminController {
    
    /**
     * 消息推送服务页面
     */
    public function webMsgSender() {
        $this->display(); // 输出模板
    }
    
    /**
     * 发送web消息 ajax
     */
    public function sendWebMsg() {
        if(empty($_POST)) { // 非post请求
            die($this->retAjaxInfo(false, '无效访问！'));
        }
        $content = $_POST['content']; // 发送内容
        
        $result = $this->sendMsg('', $content);
        if($result == 'ok') {
            die($this->retAjaxInfo(true,$return));
        }
        die($this->retAjaxInfo(false,"推送消息失败！"));
    }
    
    /**
     * 
     * @param string $to_uid 指明给谁推送，为空表示向所有在线用户推送
     * @param type $content
     */
    private function sendMsg($to_uid,$content) {
        // 推送的url地址，上线时改成自己的服务器地址
        $push_api_url = MSG_SOCKET_SEND_URL;
        $post_data = array(
           'type' => 'publish',
           'content' => $content,
           'to' => $to_uid, 
        );
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $push_api_url );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
        $return = curl_exec ( $ch );
        curl_close ( $ch );
        return $return;
    }
    
    /**
     * 服务器监控页面
     */
    public function serverVmStat() {
        redirect(SERVER_VMSTAT_URL, 0, '');
    }
}

