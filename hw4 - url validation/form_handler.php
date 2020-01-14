<?php 
//обработка данных с формы
$server=$_SERVER;
$request_method = $server['REQUEST_METHOD'];

if ($request_method === 'POST') {
	$post=$_POST;
	$url=$post['url'];
	var_dump($url);
	var_dump(trim($url));

	
	function is_empty ($url) {
	if (!isset($url) || !trim($url)) {
		return false;
	}	else return true;
	}

	function is_urll ($url) {
		if (!is_empty($url)) {
			echo "URL не должен быть пустым";
			return false;
		} if (!filter_var($url, FILTER_VALIDATE_URL)) {
			echo "введенная ссылка не соответствует типу URL";
		} else {
			echo "ссылка введена корректно <br>";
			return true;
		}

	}

	

	//$data[$key] = $value;	
}






if (is_urll($url)) {

//1 Сокращение ссылок:
function short_url($url) {
			//из символов самой ссылки делаем хеш длинной в 6 символов
			$short = substr(str_shuffle($url), 0, 6);
			return $short;
		}

//2 Функция чтения массива:
function read_array($array, $url) {
	foreach ($array as $key => $value) {
		
		if (trim($key) == trim($url)) {
			echo "краткая хеш ссылка уже есть: $value <br>";
			return true;
		}	
}
	return false;
}

//3 запись в файл 
// function write_url($url, $short) {
// 			$array[$url] = $short;
// 			$in_txt = serialize($array);
// 			file_put_contents('url.txt', $in_txt);
// 		}



//функция чтения файла и его проверки на наличие url (часть if), запись в случае отсутствия (else):
function read_url ($url) {
	$in_txt = file_get_contents('url.txt');
	$array = unserialize($in_txt);

	
	if (!read_array($array, $url)) {
		//сокращенная ссылка и проверка на совпадение
			$short = short_url($url);
			$check_hash= array_values($array);
			for ($i=0; $i < count($check_hash); $i++) { 
				if ($short === $check_hash[$i]) {
					$short = short_url($url);
				}
			}

			//запись ключа-значение в массив, затем в файл
			$array[$url] = $short;
			echo "ваша краткая хеш ссылка: $short";
			$in_txt = serialize($array);
			file_put_contents('url.txt', $in_txt);
			// return true;
	}
	
			

		
	
}
read_url($url);		

}



 ?>