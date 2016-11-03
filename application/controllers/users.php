<?php
session_start();
class UsersController extends Controller {
	private $data;
	function __construct(){
		$this->data = array();
	}

	function index(){
		return $this->all();
	}

	function all(){
		$model = Core::model('users');
		$info = $model->all(0, 100, false);
		$tab = html_table($info, array('td'=>'border:1px solid gray;','th'=>'border:1px solid gray;','table'=>'border:1px solid gray;'));
		$view = Core::view('main', array('table' => $tab));
		$view->render(true);
	}
	
	
	function reg(){
		if(! empty($_POST))
			return $this->regHandler();
		return $this->regForm();
	}
	
	function regForm(){
		Core::view('users/reg_form')->render(1);
	}
	//validation
	function regHandler(){
		$fields = array('login', 'password');
		
		$userData = array();
		foreach($fields as $field){
			if(! isset($_POST[$field])){
				//return $this->regForm();
				$_POST['err'] = "You must enter $field";
			
				header('Location: http://localhost/Test/Curs/index.php');
				exit();
			}
			// $val = $_POST[$field];
			// if(! $this->checkUserInput($field, $val))
				// return $this->regForm();
			$userData[$field] = $_POST[$field];
		}
		
		$model = Core::model('users');
		if(!$model->checkUnique($_POST['login'])){
			//regForm - with error same name
			$_POST['err'] = 'enter other login this is occupied...';
			header('Location: http://localhost/Test/Curs/index.php');
			//return $this->regForm();
			//unset($_GET['error']);
		}
		$_SESSION['id'] = $model->create($userData);
		p($info);
		header('Location: http://localhost/Test/Curs/index.php/blogs/blog');
	}
	
	function authError(){
		
		$_POST['err'] = 'Enter valid data';
		
		header('Location: http://localhost/Test/Curs/index.php');
		//Core::view('users/reg_form')->render(1);
	}
	
	//аутентифікація юзера
	function authHandler(){
		$fields = array('login', 'password');
		p('1111111111111111111111');
		$userData = array();
		foreach($fields as $field){
			if(! isset($_POST[$field]))
				return $this->authError();

			$userData[$field] = $_POST[$field];
		}
		
		$model = Core::model('users');
		//Check user auth
		$arr = $model->checkAuth($_POST['login'], $_POST['password']);
		if(count ($arr) == 0){
			//regForm - with error same name
			//p('1111111111111111111111');
			//$_GET['error'] = 'Enter valid login and password...';
			return $this->authError();
			//return $this->regForm();
			//unset($_GET['error']);
		}

		$_SESSION['id'] = $arr[0]['id'];
		$_SESSION['login'] = $arr[0]['login'];

		//$info = $model->create($data);
		////core->enter to user page
		//p($info);
		//p('1111111111111111111111222222222');
		header('Location: http://localhost/Test/Curs/index.php/blogs/blog');
		exit();
		//Core::view('startPage')->render(1);
	}
	
	private function checkUserInput($field, $val){
		return true;
	}
	
}
