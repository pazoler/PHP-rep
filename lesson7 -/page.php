<?php 
$color = $_COOKIES['color'] ?? 'white';
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body style="background: <?$color;?>">
 	<a href="cookie.php">cookie</a>
 </body>
 </html>

