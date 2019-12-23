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

//дз - папка - файлы и папки 
//функция рекурсивного удаления всех файлов и папок
 ?>