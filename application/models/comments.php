<?php


 
//session_start();
class CommentsModel extends Model{

	function __construct(){
		parent::__construct('comments');
	}


	
	
	function create($data){
		$id = parent::create($data);
		return $id;
	}

	function readComments($id){
		
		$arr = $this->db->select("SELECT * FROM `{$this->table}` WHERE IdArticle = ?", array($id));
		return $arr;
	}

	
	function addComment($id){
		$fields = array('title', 'text');
		$comment = '';
		if(isset($_POST['text'])){
			$comment = $_POST['text'];
		}
		
		$commentData = array();

		
		

		//p($userId);
		if(!isset($_SESSION['login'])){
			$commentData['user'] = 'Guest';	
		}
		else{
			$commentData['user'] = $_SESSION['login'];
		}
		
		$commentData['text'] = $comment;
		$commentData['idArticle'] = $id;
		$commentData['date'] = (new \DateTime())->format('Y-m-d H:i:s');
		parent::create($commentData);
	}
	
	
	function deleteArticle($id){
		//p($login);
		parent::delete($id);
	}
	
}
