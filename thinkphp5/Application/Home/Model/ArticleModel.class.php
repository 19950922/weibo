<?php  
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model {
	public function addArticle($data){
		$data['add_time']=time();
		$article=M('article');
		$res=$article->add($data);
		return $res;
	}
	//获取用户发表的微博文章
	public function getData($user_id){
		$article=M('article');
		$data=$article->where(array('user_id'=>$user_id))->order('article_id desc')->select();
		$arr=array();
		foreach($data as $k => $v){
			$v['img']=explode(',', $v['img']);
			$arr[]=$v;
		}
		return $arr;
	}
	public function getArticleCount($user_id){
		$article=M('article');	
		$count=$article->where(array('user_id'=>$user_id))->count();
		return $count;
	}
}
?>