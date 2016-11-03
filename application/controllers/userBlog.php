<?php

class UserBlogController extends Controller {

	function __construct(){

	}
	
	function blog(){
		//p('Welcome to the best of the best MAIN!! controller, noob!');
	
		$view = Core::view('userPage');
		$html = $view->render(true);
	}
	
	function newArticle(){
		//p('Welcome to the best of the best MAIN!! controller, noob!');
	
		$view = Core::view('newArticle');
		$html = $view->render(true);
	}
	
	
	function saveArticle(){
		//p('Welcome to the best of the best MAIN!! controller, noob!');
		
		if(empty($_POST['new'])){
		
		p('111111111111111111');
		unset($_POST['text']);
			unset($_POST['theme']);
			$_POST['err'] = 'You must input theme and text of article...';
			$this->newArticle();
			exit();
		}
		else{
			

			
			unset($_POST['new']);
			unset($_POST['theme']);
			//die();

			header('Location: http://localhost/Test/Curs/index.php/userBlog/blog');
			exit();
		}
	}
	///////////////////////////////////////////////в session зберігати user id??
	///////////////////////////////////////////////
	function all(){
		$model = Core::model('articles');
		$info = $model->all(0, 100, false);
		$tab = html_table($info, array('td'=>'border:1px solid gray;','th'=>'border:1px solid gray;','table'=>'border:1px solid gray;'));
		$view = Core::view('main', array('table' => $tab));
		$view->render(true);
	}
	
}