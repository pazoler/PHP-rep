<?php 
// команды по файлам

//копирвоание содержимого одного файла в другой (возвращает true false если скопировано)

// if(copy('somedir/file1.txt', 'somedir/file2.txt')) {
// 	echo "копирование успешно <br>";
// }

// //переименование файлов
// if (rename('somedir/file1.txt', 'somedir/new_name.txt'))
// {
// 	echo "переименование успешно <br>";
// }

//удаление файла
// if (unlink('somedir/new_name.txt')) {
// 	echo "удаление успешно";
// }

// //создание директории
// mkdir('new_dir');
// //удаление директории
// rmdir("new_dir");

//функцияЮ которая выводит содержимое директории
function read_dir($dirname) {
	if (is_dir($dirname)) {
		if ($dh = opendir($dirname))
			var_dump($dh);
		while(($data = readdir($dh)) !== false) {
			echo 'data ' . $data . ' type ' . filetype($dirname . '/' . $data)."<br>";
		}
		closedir($dh);
	}
}

read_dir('somedir');

//чтение из файла, запись в фвайл
$filename = 'somedir/file1.txt';
$data = file_get_contents($filename);

//если ошибка чтения, то функция возвращает false
//if (file_get_contents($filename)===false) {} - проверка
echo "$data";

//последовательно выполняется 3 функции
// fopen  + fread + fclose

//считывание из файла в массив
//каждая строка в файле - новый элемент массива
$arr_data = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
var_dump($arr_data);
// _data = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES - убираем переносы и пустые строки, черточка объединяет константы

//оп функции fread
function read_file_fread($filename) {
	$fp = fopen($filename, 'r');
	// $content = fread($fp, filesize($filename));
	//чтение не всего файла:
	$content = null;
	while (!feof($fp)) {
		$content .= fread($fp, 1024);
		//вместо fread  можно юзать fget, которой можно не передавать размер (там будет одна строчка)
	}
	fclose($fp);
	return $content;

}

$data = read_file_fread($filename);
echo "$data";


//запись в файл
file_put_contents($filename, ' информация для добавления ', FILE_APPEND | LOCK_EX);
//FILE_APPEND - не перезаписывает, а добавляет инфу
//file_put_contents() - последовательный вызов
// fopen + fwrite + fclose, если указан LOCK_EX, то будет еще вызвано flock

function write_file($filename, $data) {
	$fp = fopen($filename, 'a');
	fwrite($fp, $data);
	fclose($fp);
}

//предполагается передача стрчоки (не массив и не объект)
write_file($filename, 2345);

//дз - папка - файлы и папки 
//функция рекурсивного удаления всех файлов и папок
 ?>