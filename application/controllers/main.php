<?php

class MainController extends Controller{
	private $data;
	function __construct(){
		$this->data = array();
	}
	
	function index(){

		$view = Core::view('startPage');
		$html = $view->render(true);
	}
	
	//when user enter wrong authentification data
	function authErr(){
		//p('Welcome to the best of the best MAIN!! controller, noob!');
	
		$view = Core::view('startPage');
		$_GET['err'] = 'Enter valid data';
		$html = $view->render(true);
	}
	
	function test123($x=123, $y = 'qwerty', $z = 'Vasya'){
		$message = 'Hello 123 test! x = ' . "$x $y $z";
		$view = Core::view('main_test123');
		$view->setData(array('msg' => $message, 'title' => 'Test 123'));
		$view->userName = $z;
		$html = $view->render(true);
		//print $html;
	}
	
}