<?php 
// session_id(); //возвращает иденификатор сессии
// session_id('NEW_SESSION_ID'); //устанавливает идентификтор сессии
session_name('NEW_SESSION_NAME'); //возвращает
// session_name('NEW_SESSION_NAME'); //устанавливает
//вызываются до функции session_start();

session_id(get_random());

function get_random() {
	return rand(10, 40);
}
session_start();
setcookie('name', 'value');
//номер сессии лучше генерировать
// session_regenerate_id(); //функция сама генерирует id
//cookies - хранение данных на сторне клиента
//данные хранятся в виде ключ - значение
// setcookie() - задает cookie - до любого ответа сервера
//$_COOKIE - супер глобальный масссив
//данные будут доступны только при повторном обращении к серверу

// setcookie(name, value, expire, path, domain, secure, httponly)
//аргументы: name - ключ, value - значение,
//expire - время жизни cookie - необязательный
//path - путь к каталогу на сервере, для которого будут доступны cookie
//domain - домен для которого будут доступны cookie
//secure - (TRUE|FALSE) - если TRUE, То cookie будут передаваться только по https протоколу
//httponly - (TRUE|FALSE) если TRUE, то cookie не будут доступны скриптам js
//воспользоваться cookie браузера
$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST') {
	$post = $_POST;
	if (isset($post['color'])) {
		if($post['color'] != $_COOKIE['color']) {
			setcookie('color', $post['color']);
			$color = $post['color'];
		} else {
			$color = $_COOKIE['color'];
		}
	}
}

if ($server['REQUEST_METHOD' === 'GET']) {
	$color = $_COOKIE['color'] ?? 'white';
}

//хранение данных в массиве
setcookie('lang[1]', 'PHP');
setcookie('lang[2]', 'Javascript');

if (isset($_COOKIE['lang'])) {
	echo "Выбранные языки:<br>";
	foreach ($_COOKIE['lang'] as $key => $val) {
		echo "$key: $val <br>";
	}
}

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body style="background: <?echo $color;?>">
 	<form action="cookie.php" method="post">
 		<h5>Изменить цвет фона</h5>
 		<select name="color" id="">
 			<option value="red">Красный</option>
 			<option value="green">Зеленый</option>
 			<option value="yellow">Желтый</option>
 		</select>
 		<input type="submit" value="Изменить">
 	</form>
 	<a href="page.php">СТраница</a>
 </body>
 </html>