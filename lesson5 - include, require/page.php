<?php 
//подключение рнр файлов в текущий файл
//require - если файл не найдется, то выдаст ошику и не будет выполнен скрипт в дальнейшем
// require "имя_файла";
// require_once "name_file";
// //Если файл необязательный:
// //выполнение
// include "имя_файла";
// include_once "name_file";
require_once "data.php";
$books = getBooks();
//получили массив с книгами

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Main page</title>
 </head>
 <body>
 	<? include "header.php";?> 
 	<!-- вставит содержимое header -->
<? foreach ($books as $book): ?>

	<div>
		<h3>Книга: "<? echo $book['title'];?>"</h3>
		<img width = "600", height = "200" src="img/<? echo $book['img']; ?>" alt="">
		<p>Автор: "<?  echo $book['author']; ?>"</p>
		<p>Стоимость <?  echo $book['price']; ?></p>
		<a href="book.php?id=<?echo $book['id'];?>">Ссылка</a>
	</div>

<? endforeach; ?>
 </body>
 </html>