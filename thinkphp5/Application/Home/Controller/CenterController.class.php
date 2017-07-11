<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
header("Access-Control-Allow-Origin:*");
class CenterController extends Controller {
    //个人中心数据
    public function index(){
        // $article=D('Article');
        // $article_count=$article->getArticleCount(3);
        // print_r($article_count);die;
        // echo 1;die;
        $row=I();
        $user_id=$row['user_id'];
        // echo $user_id;die;
        //个人中心
        $model=M('center');
        $user=$model->where(array('uid'=>$user_id))->find();
        //用户微博文章
        $article=D('Article');
        $articles=$article->getData($user_id);
        $article_count=$article->getArticleCount($user_id);

        //用户信息
        $User=D('User');
        $users=$User->getUserInfo($user_id);
        $data=array(
            'users'=>$users,
            'user'=>$user,
            'article_count'=>$article_count,
            'articles'=>$articles
        );
        // print_r($data);die;
        echo json_encode(array('success'=>1,'data'=>$data));
    }
    //详情接口
    public function detail(){
        $row=I();
        $article_id=$row['article_id'];
        print_r($article_id);
    }
    //修改头像默认值
    public function default(){
        $row=I();
        $user_id=$row['user_id'];
        $user=D('User');
        $res=$user->getUserInfo($user_id);
        if($res){
            echo json_encode(array('success'=>1,'row'=>$res));
        }
    }
    //修改头像
    public function update(){
        $row=I();
        $user_id=$row['user_id'];
        $img=$_FILES['img'];
        $center=D('Center');
        $imgpath=$center->getImg($img);
        $img_path=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).substr($imgpath, 1);
        $user=D('User');
        $res=$user->updateInfo($user_id,$img_path);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}