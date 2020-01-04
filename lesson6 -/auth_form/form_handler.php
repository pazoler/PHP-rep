<?php
session_start();
 
//обработка данных с формы
const SUCCESS = 'success';
const ERR = 'error';

function check($login, $pwd) {
	if (!isset($login) || !isset($pwd)) {
		return false;
	}
	if (trim($login) !== 'qwerty' || trim($pwd) !== '123') {
		return false;
	}
	return true;
}

function serverAnswer () {
	$post = $_POST;
	$login = $post['login'];
	$pwd = $post['password'];
	if (!check($login, $pwd)) {
		return ERR;
	}
	//т.е если прошел авторизациб, то присваиваются следующие параметры
	$_SESSION['auth'] = true;
	$_SESSION['login'] = $login;
	return SUCCESS;

 }

$server = $_SERVER;
if($server['REQUEST_METHOD'] == 'POST') {
	echo serverAnswer();
}











 ?>
