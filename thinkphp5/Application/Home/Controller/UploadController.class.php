<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
header("Access-Control-Allow-Origin:*");
class UploadController extends Controller {
    //发表微博上传多图片
    public function index(){
    	$model=D('Center');
    	$img=$_FILES['img'];
        //多文件
    	$imgarr=$model->getImgs($img);
        $imgarray=array();
        foreach($imgarr as $k => $v){
            $imgarray[]=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).substr($v, 1);
        }
    	$imgstr=implode(',', $imgarray);
        $data=I();
        $data['img']=$imgstr;
        // print_r($data);die;
        $models=D('Article');
        $res=$models->addArticle($data);
        echo $res;
    }
}