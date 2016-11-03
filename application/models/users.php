<?php

class UsersModel extends Model{

	private $hashSalt = 'qwerty-salt!';

	function __construct(){
		parent::__construct('users');
	}

	function create($data){
		// if(! $this->checkUnique($data['login'])){
			// return null;
		// }
		if(isset($data['id']))
			unset($data['id']);
		if(isset($data['password'])){
			$data['password'] = $this->hashPass($data['password']);
		}
		$id = parent::create($data);
		
		return $id;
	}

	
	
	
	function checkUnique($login){
		p($login);
		return (0 == count (
			
			$this->db->select("SELECT id FROM `{$this->table}` WHERE login = ?", array($login ))
		));
	}

	function checkAuth($login, $pass){
		$arr = $this->db->select("SELECT id, login FROM `{$this->table}` WHERE login = ? AND password = ?", array($login, $this->hashPass($pass) ));
		
		return $arr;
	}

	function hashPass($pass){
		$res = hash_hmac('sha512', $pass, Core::conf('pass_hash_salt'));
		//p($res);
		return $res;
	}

}
