<?php


 
//session_start();
class ArticlesModel extends Model{

	private $hashSalt = 'qwerty-salt!';

	function __construct(){
		parent::__construct('articles');
	}


	
	
	function create($data){
		$id = parent::create($data);
		return $id;
	}

	function readArticles($id){
		
		$arr = $this->db->select("SELECT title, text, date, id, IdBlog FROM `{$this->table}` WHERE IdBlog = ?", array($id));
		for($i=0;$i<count($arr);$i++){			
			if((strlen($arr[$i]['text'])-1)>300){
				$arr[$i]['text'] = substr($arr[$i]['text'], 0, 300);
				$arr[$i]['text'] .= '...';
			}			
		}
		return $arr;
	}

	
	function addArticle($blogId){
		//p($login);
		$fields = array('title', 'text');
		
		$articleData = array();
		foreach($fields as $field){

			$articleData[$field] = $_POST[$field];
			p($articleData[$field]);
		}
		//p($userId);
		$articleData['idBlog'] = $blogId;
		$articleData['date'] = (new \DateTime())->format('Y-m-d');
		parent::create($articleData);
	}
	
	function article($id){
		return $this->db->select("SELECT * FROM `{$this->table}` WHERE Id = ?", array($id));
	}
	
	function addComment($id){
		$fields = array('title', 'text');
		//if(isset($_POST['text']
		$commentData = array();
		foreach($fields as $field){

			$commentData[$field] = $_POST[$field];
			p($commentData[$field]);
		}
		//p($userId);
		$commentData['idBlog'] = $blogId;
		$commentData['date'] = (new \DateTime())->format('Y-m-d H:i');
		parent::create($commentData);
	}
	
	function deleteArticle($id){
		//p($login);
		parent::delete($id);
	}
	
}
