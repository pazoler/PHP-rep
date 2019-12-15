<?php 
echo ' логические операторы',
" && - and, || or, ! - not, xor - искл или";
$bool = false || true;
var_dump($bool);

$bool = false or true;
var_dump($bool);

//оператор xor
$a = 45;
$b = 45;

var_dump($a==45 xor $b==45);
var_dump($a==45 xor $b==79);


//Тернарный оператор
$a = 23;
$b = 45;
$c = 12;
//проверить находится ли с в диапахоне между a b. Информацию 
$res = $c > $a && $c < $b ? "c in the diapazone $a $b" : "c not in diapazone $a $b";

$login;
$login = isset($login) ? $login : 'Гость';
//начиная с php 7 эквивалентно работе объединения с null
$login = $login ?? 'Гость';
var_dump($login);

//сокращенная запись тернарного оператора
$data = 0;
$res = $data ?: "Значение data = $data";
var_dump($res);

//if ifelse else
$num = 2000;
if ($num > 500 && $num < 800) {
	$sum = $num - $num*0.05;
	var_dump($sum);
 } else if ($num > 800 && $num < 1000) {
	$sum = $num - $num*0.10;
 	var_dump($sum);
 } else if ($num > 1000 && $num < 1300) {
 	$sum = $num - $num*0.10;
 	var_dump("$sum + подарок");
 } else if ($num > 1300) {
 	$sum = $num - $num*0.15;
 	var_dump($sum);
 } else {
 	var_dump($num);
 };

 
// $num ='№29'
//  switch ($num) {
//  	case '№29':
//  		var_dump("протяженность маршрута $num - 12 ");
//  	break;
 	
//  	case '№34':
//  		var_dump("протяженность маршрута $num - 6 ");
//  	break;
//  	case '№2':
//  		var_dump("протяженность маршрута трамвая $num - 18 ");
//  	break;
//  	case '№26':
//  		var_dump("протяженность маршрута трамвая $num - 12 ");
//  	break;
//  	case '№31':
//  		var_dump("протяженность маршрута троллейбус $num - 17 ");
//  	break;
//  	default:
//  		var_dump("введите корректный номер маршрута");
//  };

// for($i=0; $i<3; $i++) {
// while (true) {
// 	$res= rand(0, 99);
// 	var_dump($res);
// 	if ($res > 90) break;
// };
// };
// while(условие):
// 	тело цикла;
// endwhile;

// for (инициализация; условие; обноввление счетчика):
// 	тело цикла;
// endfor;


echo "массивы";


 ?>


