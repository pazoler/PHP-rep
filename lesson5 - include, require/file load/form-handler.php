<?php 
//данные из формы в массиве $_POST
$post=$_POST;
var_dump($post);

//Данные загружаемых файлов приходят в массив $_FILES

$files = $_FILES;
var_dump($files);

//имя файла
$file_name = $files['picture']['name']; 
var_dump($file_name);
//расширение файла
$ext = pathinfo($file_name, PATHINFO_EXTENSION);

//Необходимо изменять имя файла
$name = md5($file_name); //+data
var_dump($name);

$full_name = $name . '.' . $ext;
var_dump($full_name);

//проверить размер
//проверить тип

//переместить файла из временной папки
//move_uploaded_file();
//сначало временная папка, потом куда получаем
$tmp_name = $files['picture']['tmp_name'];
if (move_uploaded_file($tmp_name, "img/$full_name")){
echo "Файл успешно загружен";
} else {
	echo "Не удалось загрузить файл";

}



 ?>
