<?php 
//Задание 1
// Создать функцию по преобразованию нотаций: строка вида 'this_is_string' преобразуется в 'thisIsString' (CamelCase-нотация)

// str_replace — Заменяет все вхождения строки поиска на строку замены
// ucwords — Преобразует в верхний регистр первый символ каждого слова в строке
// lcfirst — Преобразует первый символ строки в нижний регистр

function notation (string $note) :string {
	$new_string=str_replace('_', ' ', $note);
	$new_string=ucwords($new_string);
	$new_string=str_replace(' ', '', $new_string);
	$new_string=lcfirst($new_string);
	return $new_string;
}

$test1 = 'alpha_betta_tetta';
var_dump(notation($test1));

//Задание 2
// Дана строка, содержащая полное имя файла (например, 'C:\OpenServer\testsite\www\someFile.txt'). Написать функцию, которая сможет выделить из подобной строки имя файла без расширения.

// explode — Разбивает строку с помощью разделителя
//array_pop — Извлекает последний элемент массива
// array_shift — Извлекает первый элемент массива

function getName (string $path) {
	$name = explode('\\', $path);
	$name = array_pop($name);
	$name = explode('.', $name);
	return $name = array_shift($name);
}

$test2 = 'C:\OpenServer\testsite\www\someFile.txt';
var_dump(getName($test2));

//Задание 3
// Дано два текста. Определите степень совпадения текстов (придумать алгоритм определения соответствия, использовать 5 балльную шкалу).
//В решении будет проверяться только есть ли одинаковые слова в двух строчках, 
//т.е. вхождения символов не проверяются т.к. сложно
// 5 балльная система: 5 баллов - строки равны 
// 4 балла - строки равны при приведении к одному индексу
// 3 балла - больше половины слов из строки 2 присутствуют в строке 1
// 2 балла - есть общие слова
// 1 балл - нет общих слов

// array_intersect — Вычисляет схождение массивов
function comparisonString (string $str1, string $str2) {
	$editString1 = $str1;
	$editString2 = $str2;

	$editString1 = explode(' ', $editString1);
	$editString2 = explode(' ', $editString2);
	$result = array_intersect($editString1, $editString2);

	if ($str1 === $str2) {
		var_dump("5 баллов: Строки полностью совдают");
	} else if (strtolower($str1) == strtolower($str2)) {
		var_dump('4 балла: строки не совпадают по индексам');
	} else if (count($result) > count($editString1)/2) {
		var_dump('3 балла: большая часть слов из строки 2 входит в строку 1');
	} else if (count($result) > 0) {
		var_dump('2 балла: слова из строки 2 есть в строке 1');
	} else  {
		var_dump("1 балл: Общих слов в строках нет");
	}
}

$str1="Лето Осень яблоко Ананас, фигурное катание";
$str2="фигурное катание";
comparisonString($str1, $str2);

//Задание 4
//Дан массив, состоящий из целых чисел. Написать функцию сортировки массива по возрастанию суммы цифр чисел. Например, дан массив [13, 55, 100]. После сортировки он будет следующего вида: [100, 13, 55], тк сумма цифр числа 100 = 1, сумма цифр числа 13 = 4, а 55 = 10. На экран вывести исходный массив, массив после сортировки и сумму цифр каждого числа отсортированного массива.
$array = [213, 75, 1111];

function sortArray ($array) {
	$sum_array = [];
	$arrayforMultisort = $array;

	for ($n = 0; $n < count($array); $n++) {
		$str = (string) $array[$n];
	for ($i = 0; $i < strlen($str); $i++) {
		$result += $str[$i];
	}
	$sum_array[$n] = $result;
	$result = 0;
	}
	array_multisort($sum_array, $arrayforMultisort);
	var_dump('Начальный массив',  $array);
	var_dump('Отсортированный массив',$arrayforMultisort);
	var_dump('Сумма чисел отсортированного массива',$sum_array);	
}

sortArray($array);

//Задание 5
// Написать функцию - конвертер строки (функция принимает на вход строку и функцию-преобразователь, возвращает преобразованную строку). Использовать анонимные функции. Возможности:
// 1 перевод всех символов в верхний регистр, (strtoupper — Преобразует строку в верхний регистр)
// 2 перевод всех символов в нижний регистр, (strtolower — Преобразует строку в нижний регистр)
// 3 перевод всех символов в нижний регистр и первых символов слов в верхний регистр.

$toUpper = function($str) {
	return $converted = strtoupper($str);
};

$toLower = function($str) {
	return $converted = strtolower($str);
};

$firstToUpper = function($str) {
	$converted = strtolower($str);
	return $converted = ucwords($converted);
};



function converter (string $str, callable $func) {
	return $func($str);
}

$string = 'Alpha betta Yahoo siesta';
var_dump(converter($string, $firstToUpper));

 ?>