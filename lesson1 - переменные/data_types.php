<?php 
// однострочные комментарий
/**/
//все инструкции разделяются ;
// echo ""; - для вывода передаваемого в строке
echo "выводимая через ECHO информация <br>";

//функция для отладки
var_dump("var_dump вместо echo");

//Объявление переменных
$login = "qwe";
//переопределение
$login = "asd";
//обращение к переменной
var_dump($login);

//есть ли переменная
//empty(переменная) / isset(переменная)
var_dump("empty", empty($login)); //не пустой - false
var_dump("isset", isset($login)); // есть - true

$pwd = null;
var_dump("<br>empty", empty($pwd));
var_dump("<br>isset", isset($login));

$auth = "0";
var_dump("<br>empty", empty($auth)); //оба тру
var_dump("<br>isset", isset($auth)); 


//удаление значение переменной
unset($login);
var_dump($login);


//Типы данныъ
// Скалярные: булевые, integer, float, string
//Смешанный тип: массивы, объекты callbla,iterable
//2 cспециальных типа: дескриптор ресурсов и Null


//скалярные типы данных
//1 булево
echo "тип булеан";
//принимает true false
$active = true;
$connected = false;

//приведение к булеан
$login = (bool) $login;
//при приведении к boolean к false будете преобразовываться 0, -0, ноль с точками, пустая строка, null, '0'
//проверка на тип данных
var_dump(is_bool($login));

//тип Integer - целые числа
echo "тип integer";
var_dump(PHP_INT_MIN);
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_SIZE);
//приведение к типу integer
$login = (int) $login;
//gпроверка на integer
var_dump(is_integer($login));

echo "type float| double | real";
var_dump(PHP_FLOAT_MIN);
var_dump(PHP_FLOAT_MAX);
//приведение к float/double/real
$login =(float) $login;
var_dump(is_float($login));


echo "string";
//строка - набор символов
$login = (string) $login;
$first_string='одинарные ковычки отображает все символы ка есть $login /n';
//""- ищет еще специальные символы. вместо имени переменной его значение
echo "$first_string";
$second_string = "что то там и $login /n";
echo "<br>$second_string";

$login = (string) $login;
//проверка - is_string
var_dump(is_string($login));
var_dump(gettype($login)); //не пользуемся т.к возвращает тип string

//константы
echo 'константы';

//присваевается неизменяемое значение
//Объявление
//через define можем положить массив
define('STATUS_OK', 'Ok', true);
//константа будет определена без чувствительности к регистру - нахрен не нужен
const STATUS_ERROR = 'Error';
//через const Тоже с 5.6 можно задать массив
//обращение вар дампом
var_dump(STATUS_OK);
var_dump(STATUS_ERROR);





 ?>