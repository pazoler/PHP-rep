<?php 
//сообщение на сервер клиентом (браузер) запросом
// сообщение - сервер - отвеное_сообщение

//сообщение состоит из:
// 1 строка запроса (+ метод передачи данных, адрес, версия протокола передачи данных)
// 2 Заголовки - дополнительная информация по сообщению
// 3 Тело сообщения
var_dump('Response');

//на стороне сервера есть глобальный массив СЕРВЕР: сервер - массив.Инфа записывается сервером
$server = $_SERVER;
var_dump($server);

//получаем необходимое значение:
//документ рут - корневая директория сервера
$document_root = $server['DOCUMENT_ROOT'];
var_dump($document_root);

$http_host = $server['HTTP_HOST'];
var_dump($http_host);

$request_uri = $server['REQUEST_URI'];
var_dump($request_uri);

$url = 'http://' . $http_host . $request_uri;
var_dump($url);

//строка запроса может содержать
// 1 латинские буквы
// 2 цифры
// 3 некторые знаки препинания

//функции кодировки
$str_url = 'http://host?имя=Михаил&возраст=34 года';
$str1 = urlencode($str_url);
var_dump($str1);
var_dump(rawurlencode($str_url));

var_dump(urldecode($str1)); //+rawurldecode

$data  = [

	'name' => 'Mike',
	'age' => 58
];

//http_build_query - должна принимать массив или об\ект
//для быстрого запроса:
$url = 'http://host/page?' . http_build_query($data);
var_dump($url);

















 ?>