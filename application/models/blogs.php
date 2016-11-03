<?php

//session_start();
class BlogsModel extends Model{

	function __construct(){
		parent::__construct('blogs');
	}

	
	function isBlogCreated($userId){
		$blogId = $this->db->select("SELECT id FROM `{$this->table}` WHERE idUser = ?", array($userId));
		

		return $blogId;
	}
	
	
	function allBlogs(){

		$blogs = $this->db->select("SELECT b.id, u.login FROM `{$this->table}` b inner join `users` u on b.idUser = u.id", array());

		return $blogs;
	}
	
	
	
	function create($data){
		$id = parent::create($data);
		return $id;
	}

	function readArticles($idBlog){
		return $this->db->select("SELECT * FROM `articles` WHERE blogId = ?", array($idBlog));
	}
	
	
	function article($id){
		return $this->db->select("SELECT * FROM `articles` WHERE Id = ?", array($id));
	}
	
	
	
	function addArticle($userId){
		//p($login);
		$fields = array('title', 'text');
		
		$articleData = array();
		foreach($fields as $field){

			$articleData[$field] = $_POST[$field];
		}
		$articleData['idBlog'] = $userId;
		
		parent::create($data);
		die();
	}

}
