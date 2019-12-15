<?php 
echo "Массивы. Нумерованные/ассоциативные";

$arr = array();
$arr = []; //с 5.4

$arr = array(2, 6, 9, 90, -23);
$arr = [2, 6, 9, 90, -23];

//Нет методов у массиов, есть только функции
//Обращение к элементу массива
$arrElem = $arr[2];
var_dump($arrElem);

$arr[4] = 777;
$arr[50] = 777;
var_dump($arr); //создает без undefined промежуточные

//перебор массива без изменения
$arr = [2,6,8,12];
foreach ($arr as $value) {
	// на каждой итерации в переменную валью будет копироваться значение жлементов массива
	var_dump($value);
} //до 7.0 версии

//начиная с 7.0 можно менять жлементы массива
foreach ($arr as &$value) {
	$value*=2;
}
unset($value);
var_dump($arr);

//ассоциативный массив
$userInfo = [
'id' => 1,
'login' => 'qwerty',
'pwd' => 'password763'
];
var_dump($userInfo);

//обращение
$arrElem =$userInfo['login'];
var_dump($arrElem);

//переопределение значений массива
$userInfo['pwd']='dr986';
$userInfo['name']= 'Tom';

//перебор элементов ассоциативного массива
foreach ($userInfo as $key => $value) {
	//на каждой итерации в key будет копироваться ключ, а в $value - значение
	var_dump($key . ' : ' . $value);
}

// foreach ($userInfo as $key => $value):
//альтернативный код
// endforeach;

?>