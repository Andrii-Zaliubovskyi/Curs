<?php
@session_start();
class BlogsController extends Controller {

	private $data;
	function __construct(){
		$this->data = array();
	}
	
	function blog(){
		
		if(!isset($_SESSION['id'])){
			header('Location: http://localhost/Test/Curs/index.php');
		}
		$userId = $_SESSION['id'];
		

		
		$model = Core::model('blogs');
		$arr = $model->isBlogCreated($userId);
		$blogId = '';
		if(count($arr)==0){
			$blogId = $model->create(array('idUser'=>$userId));
		}
		else{
			$blogId = $arr[0]['id'];
		}
		
		$_SESSION['blogId'] = $blogId;
		
		$this->readArticles($blogId);
	}
	
	function readArticles($blogId){
		$model = Core::model('articles');
		$articles = $model->readArticles($blogId);
		$view = Core::view('userPage', array('articles'=>$articles));
		$html = $view->render(true);
	}
	
	function allBlogs(){

		$model = Core::model('blogs');
		$blogs = $model->allBlogs();
		
		$view = Core::view('allBlogs', array('blogs'=>$blogs));
		$html = $view->render(true);
	}
	
	function readBlog($id){
		if(isset($_SESSION['blogId'])){
			
			if($_SESSION['blogId'] == $id){ 
				header('Location: http://localhost/Test/Curs/index.php/blogs/blog');
			}
		}
		
		$this->readArticles($id);
	}
	
	function quit(){
		//session_unset();
		$_SESSION['id'] = null;
		$_SESSION['login'] = null;
		header('Location: http://localhost/Test/Curs/index.php');
	}
	
	function newArticle(){
		$view = Core::view('newArticle', $this->data);
		//$view->SetData($this->data);
		$html = $view->render(true);
	}
	
	function deleteArticle($id){
		$model = Core::model('articles');
		$model->deleteArticle($id);
		
		header('Location: http://localhost/Test/Curs/index.php/blogs/blog');
	}
	
	
	function saveArticle(){
		if(empty($_POST['title']) or empty($_POST['text'])){
			$this->data['err'] = 'You must input theme and text of article...';			
			$this->newArticle();
			exit();
		}
		else{
			$model = Core::model('articles');
			$model->addArticle($_SESSION['blogId']);


			header('Location: http://localhost/Test/Curs/index.php/blogs/blog');
			//exit();
		}
	}
	
	
	function article($id){
		header("Location: http://localhost/Test/Curs/index.php/blogs/articles/$id");
		//return $this->db->select("SELECT * FROM `articles` WHERE Id = ?", array($id));
	}
	
	
	function addComment($idArticle){
		$model = Core::model('comments');
		$model->addComment($idArticle);
		$this->article($idArticle);
	}
	
	
	function articles($id){
		$model = Core::model('articles');
		$article = $model->article($id)[0];
		$this->data['article'] = $article;
		
		$model = Core::model('comments');
		$comments = $model->readComments($id);
	
		if(count($comments)>0){
			$this->data['comments'] = $comments;
		}
		$view = Core::view('article', $this->data);
		//$view->SetData($this->data);
		$html = $view->render(true);
		//return $this->db->select("SELECT * FROM `articles` WHERE Id = ?", array($id));
	}

	function all(){
		$model = Core::model('articles');
		$info = $model->all(0, 100, false);
		$tab = html_table($info, array('td'=>'border:1px solid gray;','th'=>'border:1px solid gray;','table'=>'border:1px solid gray;'));
		$view = Core::view('main', array('table' => $tab));
		$view->render(true);
	}
	
}