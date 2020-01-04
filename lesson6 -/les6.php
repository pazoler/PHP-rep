<?php 
session_start();
//указываем до ответа и отправки данных
//либо инфииализирует новую, либо ставит предыдущую
//по SID - находит файл по ключу и подгружается

//работа с сессиями осуществляется через суперглобальный массив $_SESSION
$_SESSION['auth'] = true;
$_SESSION['username'] = 'qwerty';
var_dump($_SESSION);

//данные об уникальном идентификаторе передаются на клиент


//проверка наличия переменной в массиве $_SESSION
var_dump(isset($_SESSION['auth']));
var_dump(isset($_SESSION['username']));

//удаление пары ключ значение 
unset($_SESSION['auth']);

// $_SESSION = [] - онуление массива
// unset($_SESSION) - удаление массива - не делаем

session_destroy();
//закрывает сесию







 ?>
 <h3><a href="les6.2.php">session2</a></h3>