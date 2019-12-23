<?php 
$get = $_GET;
$id = $get['id'] - 1;

require_once "data.php";
$book = getBooks()[$id];


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Book</title>
 </head>
 <body>
 	<? include_once 'header.php' ?>
 	<h3>Книга <?$book['title']?></h3>
 	<p> Автор: "<?  echo $book['author']; ?>"</p>
 	<img width = "600", height = "200" src="img/<? echo $book['img']; ?>" alt="">
 	<p>Стоимость <?  echo $book['price']; ?></p>
 </body>
 </html>