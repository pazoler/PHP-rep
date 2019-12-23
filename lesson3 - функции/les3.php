<?php 
// declare(strict_types=1); // режим строгой типизации
//пользовательские функции
echo "Пользовательские функции. Именованные / Анонимные";
// именованные функции 
// обхявление функций
// function name_fun_глагол (arg_type (тип данных) $arg, &$arg, arg3='default',...$arg) :return_type-возвразаемое значение {
// ...$arg - вспопомгательый аргумент функции
// &$arg - передача данных по ссылке
//тело функции
	// return 'возвращаемое значение';
	//если не определено возвращает null
	//in js - null

//  }

//вызов функции
// имя_функции();

function delenie($arg1, $arg2) {
	if ((is_int($arg1)||is_double($arg1)) && (is_int($arg2)||is_double($arg2))) {
	if(!$arg2) {
		var_dump("На ноль делить нельзя");
		return false;
	} else {
		$res = $arg1/$arg2;
		return $res;
	} 
}
else {
		return var_dump('Не тот тип данных');
	}
	echo "<br>";
 
};

$arg1 = 7;
$arg2 = 0;

$res1 = delenie($arg1, $arg2);
var_dump($res1);

//передача аргументов по ссылке
$str = 'строка';

function change_str (&$some_str) {
	$some_str .= ' после преобразования';
}

change_str($str);
var_dump($str);

//значение аргумента по умолчанию
function greeting ($user = 'Гость') {
	echo "<h3> Добро пожаловать,\$user/ </h3>";
}
// \/ - экранирование
greeting();
greeting('Jopa');

//переменное количество аргументов
function get_sum(...$nums) {
	return array_sum($nums);
}

var_dump(get_sum(3,6,8));

//функции для работы с аргументами
//если функция принимает аргумент, то мы должны обязательно туда вставить
function show_args() {
	var_dump(func_num_args());
	var_dump(func_get_args());
	var_dump(func_get_arg(1));
}

show_args(56, null, [3,78], 'string');

//указание типа аргумента и типа возвращаемого 
//PHP 5 тип аргумента: array, имя класса
//РНР 5.4 тип аргумента: array, имя класа callble;
//РНР 7.0 тип аргумента: array, Имя класса callable + скалярные типы (инт,дабл стринг, булеан)
//при передаче аргумента несоответсвующего типа в РНР 5 - ошибка, в РНР 7- исключение (typeError)

//РНР 7.0 можем указать тип возвращаемого значения
//РНР 7.1 объявление обнуляемого типа ?, string (? - null)

function sum(int $a, int $b) :?int {
return $a+$b;

}

var_dump(sum(false, 5.6));
//если не в режиме строгой типизации, то будет происходить приведение типов
// :?int - либо инт либо налл

//область видимости
//анонимные функции 
$pos_num = function ($num) {
	return $num > 0;
};
var_dump(is_callable($pos_num)); //посмотреть тип данных

function some_func($data, callable $func) {
	if ($func($data)) {
		//если ставим скобки, то будет функцией вызов
		//callable только для функций
		echo "Данные валидны <br>";
	} else {
		echo "Данные не прошли проверку";
	}
}

some_func(-78, $pos_num);
function get_info() {
	echo "INFO";
}

$some_str = 'get_info';
//вызов функции через переменную - тоже  самое, что и get_info();
$some_str();


function getAllTasks(){
    $task1 = [
        'title'=>'Задача 1',
        'date'=>date_create('yesterday'),
        'participants'=>['Артур', 'Полина'],
        'closed'=>false
    ];
    $task2 = [
        'title'=>'Задача 2',
        'date'=>date_create('tomorrow'),
        'participants'=>null,
        'closed'=>false
    ];
    $task3 = [
        'title'=>'Задача 3',
        'date'=>date_create(),
        'participants'=>['Артур', 'Глеб'],
        'closed'=>false
    ];
    $task4 = [
        'title'=>'Задача 4',
        'date'=>date_create('yesterday'),
        'participants'=>['Павел', 'Полина'],
        'closed'=>true
    ];
    return [$task1, $task2, $task3, $task4];
}
// новые задачи
// просроченные задачи
// закрытые задачи
// задачи, где участник Артур
//функция принимает массив задачи + функцию
$newTask = function($task) {
	return $task['date'] > date_create();
};

$oldTask = function($task) {
	return !$task['closed']&& $task['date']<date_create();
};

$taskArthur = function($task) {
	return in_array("Артур", $task['participants']);
};


function find_by_params (array $tasks, callable $func) :array {
	$filtered_tasks = [];
	foreach ($tasks as $task) {
		if ($func($task)) {
			$filtered_tasks[]=$task;
			// array_push($filtered_tasks, $task);
		} 
	}
	return $filtered_tasks;
};

$tasks = getAllTasks();
echo "Новые задачи";
var_dump(find_by_params($tasks, $newTask));
echo "Невыполненные задачи";
var_dump(find_by_params($tasks, $oldTask));
echo "Задачи с Артуром";
var_dump(find_by_params($tasks, $taskArthur));

$some_var = 'переменная вне функции';
const OUT_CONST = 'константа вне функции';

function func() {
	//попытка обращения к внешней перемнной
	//не можем объявленную переменную вне обратиться внутри
	//внутри и снаружи функции some_var разный
	//к константам обращение возможно где угодно
	var_dump($some_var);
	var_dump(OUT_CONST);
	$some_var= 'локальная переменная функции'
	function func1() {
		echo "Hello func1";
	}
}

var_dump($some_var);
func();
func1(); //обращение к несуществующей функции