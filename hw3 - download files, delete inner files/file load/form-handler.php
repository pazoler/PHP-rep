<?php 
$post=$_POST;
var_dump($post);

$files = $_FILES;
var_dump($files);

// получаем число загруженных файлов
$count = count($files['picture']['name']);
var_dump($count); 

//получаем массив с размерами файлов для проверки
$file_sizes = $files['picture']['size'];

//получаем массив с именами и временными именами
$file_names = $files['picture']['name'];
$tmp_names = $files['picture']['tmp_name'];

for ($i = 0; $i < $count; $i++) {
	//выполняем если размер файла не превышает, например, 1 мб
if ($file_sizes[$i] < 1024*1024) {
	
	// получаем расширение для каждого файла
	$ext =  pathinfo($file_names[$i], PATHINFO_EXTENSION);
	
	//делаем проверку на тип файла, условно, даем возможность загружать файлы только формата jpeg (jpg), png, tiff
	if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'tiff') {

		//меняем имя каждому файлу
		$new_name = md5($file_names[$i]);
		$full_name = $new_name . '.' . $ext;

		//перемещаем временный файл в папку
		if (move_uploaded_file($tmp_names[$i], "img/$full_name")){
			echo "Файл успешно загружен<br>";
		} else {
			echo "Не удалось загрузить файл<br>";

		}
	} else {
		echo "просим загрузить изображение формата jpg(jpeg), png или tiff";
	}

} else {
	echo "Размер файла не должен превышать 1 мб";
}

}



 ?>
