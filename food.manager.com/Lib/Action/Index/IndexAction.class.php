<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	private $user_db;
	private $allow_operation;
	public function __construct(){
		parent::__construct();
		$this->user_db=M("user");
		self::isLogin();
	}
	public function isLogin(){
		$operation=$_GET['_URL_'][2];
		if(isset($_SESSION['user'])){

		}
		else if(in_array($operation,C("ALLOW"))){
		}
		else{
			self::login();
			exit;

		}
		
	}

	public function index(){
		$this->display("index");
		
	}
	public function login(){
		if(isset($_POST['dosubmit'])){
			$username=self::filter($_POST['username']);
			$password=self::filter($_POST['password']);
			$user=$this->user_db->where("name='$username'")->find();
			if($user['pwd']==md5($password)){
				session("user",array("id"=>$user['id'],"username"=>$user['name']));
				self::index();
			}
			else if($user['pwd']!=md5($password)){

			}
			else if(is_null($user)){
				//user does not exist

			}
		}
		else{
			if(!empty(session("user"))){
				self::index();
			}
			else
				$this->display("login");
		}

	}
	public function register(){
		if(isset($_POST['dosubmit'])){
			$data['name']=self::filter($_POST['username']);
			$data['pwd']=md5(self::filter($_POST['password']));
			$data['tel']=self::filter($_POST['tel']);
			$data['email']=self::filter($_POST['email']);
			$res=$this->user_db->where("name='$name'")->find();
			if(is_null($res)){
				$id=$this->user_db->add($data);
				//session("user",array("id"=>$id,"name"=>$data['name']));
				$this->success("注册成功","http://food.manager.com/Index/");
			
			}
			else{
				$this->error("该用名已经被占用");
			}

		}
		else{
			
			$this->display("register");
		}
	}
	//过滤特殊字符
	public function filter($str){
		return $str;
	}
}


