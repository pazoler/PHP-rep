<?php 
//потом информация будет браться из базы данных
$cities = [
	[
		'id' => 1,
		'title' => 'Париж',
		'price' => 1234,
		'img' => '1.jpg'
	],
	[
		'id' => 2,
		'title' => 'Нью-Йорк',
		'price' => 4526,
		'img' => '1.jpg'
	],
	[
		'id' => 3,
		'title' => 'Лондон',
		'price' => 7890,
		'img' => '1.jpg'
	]
];

//что бы айди вручную не передавали фигню - проверка или 404.
$get = $_GET;
$id = $get['id'];
$id = $id - 1;
var_dump($id);
$city = $cities[$id];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Путешествие в <?echo $city['title']; ?></title>
 </head>
 <body>
 	<h1><?echo $city['title'];?></h1>
 	<div><img src="img/<? echo $city['img']; ?>" alt=""></div>
 	<p><?echo $city['price'];?></p>
 </body>
 </html>