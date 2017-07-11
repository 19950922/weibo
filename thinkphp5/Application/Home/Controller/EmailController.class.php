<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
header("Access-Control-Allow-Origin:*");
class EmailController extends Controller {
    public function send(){
        if(sendMail('2737165688@qq.com','你好!邮件标题','这是一款test邮件正文！')){
            echo '发送成功！';
        }
        else{
            echo '发送失败！';
        }
    }
    public function index(){
    	$username=I('post.username');
    	$model=D('User');
    	$res=$model->getForget($username);
    	print_r($res);
    }
}
?>