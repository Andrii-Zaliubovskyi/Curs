<?php
session_start();
class RegistrationController extends Controller {
	private $data;
	function __construct(){
		$this->data = array();
	}


	
	
	function reg(){
		$view = Core::view('registration', $this->data);
		$view->render(true);
		
	}
	

	//validation
	function regHandler(){
		$fields = array('login', 'password');
		
		$userData = array();
		foreach($fields as $field){
			if(empty($_POST[$field])){
				return $this->regError("You must enter $field");
			}
			$userData[$field] = $_POST[$field];
		}

		$model = Core::model('users');
		if(!$model->checkUnique($_POST['login'])){
			return $this->regError('Choose other login this is occupied...');
		}
		$_SESSION['id'] = $model->create($userData);
		$_SESSION['login'] = $_POST['login'];
		
		header('Location: http://localhost/Test/Curs/index.php/blogs/blog');
	}
	
	function regError($error){
	$this->data['err'] = $error;
		$view = Core::view('registration', $this->data);
		$view->render(true);
		
		//header('Location: http://localhost/Test/Curs/index.php/registration/reg');
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
		}

		$_SESSION['id'] = $arr[0]['id'];
		$_SESSION['login'] = $arr[0]['login'];
		header('Location: http://localhost/Test/Curs/index.php/blogs/blog');
		exit();
		//Core::view('startPage')->render(1);
	}
	
	private function checkUserInput($field, $val){
		return true;
	}
	
}
