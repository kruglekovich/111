<?php
session_start();
class User {
	private $name;
	private $login;
	private $pas;

	public function set($n, $l, $p) {
		$this->name = $n;
		$this->login = $l;
		$this->pas = $p;
	} 

	public function saveToSession(){
		$_SESSION['user_name'] = $this->name;
		$_SESSION['user_login'] = $this->login;
		$_SESSION['user_pas'] = $this->pas;
	}
	public function show(){
		echo '<h3>Имя: '.$this->name.'</h3>';
		echo '<h3>Логин: '.$this->login. '</h3>';
	}
}
?>