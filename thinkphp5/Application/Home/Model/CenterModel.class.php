<?php  
namespace Home\Model;
use Think\Model;
class CenterModel extends Model {
	//单文件上传
	public function getImg($img){    
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
		$upload->savePath  =      './Public/Uploads/';
		$upload->rootPath  =      './';
		$info   =   $upload->uploadOne($img);
		$img_path=$info['savepath'].$info['savename'];
		return $img_path;
	}
	// 多文件上传
	public function getImgs($img){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      './Public/Uploads/';
		$upload->rootPath  =      './';
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息    
		$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$arr=array();
			foreach($info as $file){        
				$arr[]=$file['savepath'].$file['savename'];    
			}
		}
		return $arr;
	}
}
?>