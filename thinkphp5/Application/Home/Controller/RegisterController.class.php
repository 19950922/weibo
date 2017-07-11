<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
header("Access-Control-Allow-Origin:*");
class RegisterController extends Controller {
    public function reg(){
        $row=I();
        $tel=$row['tel'];
        $url='http://api.k780.com/?app=phone.get&phone='.$tel.'&appkey=10003&sign=b59bc3ef6191eb9f747dd4e83c99f2a4&format=json';
        $html=file_get_contents($url);
        $area=json_decode($html,true);
        $citys=$area['result']['att'];
        $arr=explode(',', $citys);
        $row['city']=$arr[2];
        $model=D('User');
        $insertId=$model->addRow($row);
        if($insertId ){
            echo json_encode(array('success'=>1,'id'=>$insertId));
        }else{
            echo json_encode(array('success'=>0));
        }
    }
    public function getusername(){
        $username=I('post.username');
        $model=D('User');
        $res=$model->testusername($username);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function gettel(){
        $tel=I('post.tel');
        $model=D('User');
        $res=$model->testtel($tel);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function getemail(){
        $email=I('post.email');
        $model=D('User');
        $res=$model->testemail($email);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}