<?php 
// переменные вне функции недоступны, которые обхявлены внутри

//static переменная
//данные сохраняются в переменную внутри функции, сохраняет предыдущие значения
function counter() {
	static $counter = 0;
	$counter++;
	return $counter;
}

var_dump(counter());
var_dump(counter());
var_dump(counter());
var_dump(counter());




 ?>