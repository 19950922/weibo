<?php  
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	public function verify($row){
		$user=M('user');
		$username=$row['username'];
		$password=md5($row['password']);
		$res =$user->where(array('username'=>$username,'password'=>$password))->find();
		return $res;
	}
	public function addRow($row){
		$user=M('user');
		$time=time();
		$row['password']=md5($row['password']);
		$row['reg_time']=$time;
		$row['last_time']=$time;

		return $user->add($row);
	}
	public function testusername($username){
		$user=M('user');
		$res=$user->where(array('username'=>$username))->find();
		return $res;
	}
	public function testtel($tel){
		$user=M('user');
		$res=$user->where(array('tel'=>$tel))->find();
		return $res;
	}
	public function testemail($email){
		$user=M('user');
		$res=$user->where(array('email'=>$email))->find();
		return $res;
	}
	public function getForget($username){
		$user=M('user');
		$row=$user->where(array('username'=>$username))->find();
		return $row['email'];
	}
	//个人信息默认值
	public function getUserInfo($user_id){
		$user=M('user');
		$res=$user->where(array('user_id'=>$user_id))->find();
		return $res;
	}
	public function updateInfo($user_id,$img_path){
		$user=M('user');
		$res=$user->where(array('user_id'=>$user_id))->save(array('img'=>$img_path));
		return $res;
	}
}
?>