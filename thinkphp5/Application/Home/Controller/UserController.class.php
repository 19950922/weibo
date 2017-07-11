<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
header("Access-Control-Allow-Origin:*");
class UserController extends Controller {
    public function index(){
        $row=I();
        $model=D('User');
        $res=$model->verify($row);
        if($res){
            echo json_encode(array('success'=>1,'msg'=>$res['user_id']));
        }else{
            echo json_encode(array('error'=>1,'msg'=>'message error'));
        }
    }
    public function forget(){
        $username=I('post.username');
        $model=D('User');
        $res=$model->getForget($username);
        print_r($res);
    }
}