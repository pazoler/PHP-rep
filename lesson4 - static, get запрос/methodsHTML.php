<?php 
//данные передаются методом get
//get запрос
//все параметры передаются в строке запроса
//данные остаются в истории браузера
//кешируется
// и имеется ограничение по размеру

$server = $_SERVER;

$request_method = $server['REQUEST_METHOD'];
var_dump($request_method);

if ($request_method == 'GET') {
	$get = $_GET;
	var_dump($get);
}

//Данные post запроса невидымы, не остаются в браузере и не офишируются
//POST - по тегу формы
//данные придут в виде строки
if ($request_method == 'POST') {
	$post = $_POST;
	$login = $post['login'];
	$age = $post['age'];
	var_dump($login, $age);
}




 ?>