<?php 
$auth = true;
$login = 'qwerty';
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
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?if ($auth):?>
 		<h2>Welcome, <? echo $login;?></h2>
 		<a href="#">Выйти из личного кабинета</a>
 	<? else: ?>
 		<h2>Welcome, Guest</h2>
 		<a href="#">Войти в личный кабинет</a>
 <? endif; ?>


<? foreach ($cities as $city): ?>

<div>
	<h3>Путешествие в <? echo $city['title'];?></h3>
<img width = "600", height = "200" src="img/<? echo $city['img']; ?>" alt="">
<p>Стоимость <?  echo $city['price']; ?></p>
<a href="city.php?id=<?echo $city['id'];?>">Ссылка</a>
</div>
<? endforeach; ?>
 </body>
 </html>