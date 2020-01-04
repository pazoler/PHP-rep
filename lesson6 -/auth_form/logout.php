<?php
session_start();
//закрытие сессии
function log_out (){
	unset($_SESSION['login']);
	unset($_SESSION['auth']);
	$_SESSION=[];
	session_destroy();
	//header - для направления на страницу.
	header('Location: page.php');
}

log_out();



 ?>