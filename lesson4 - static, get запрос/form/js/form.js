let form = document.forms.lang;



//отправка формы с перезагрузкой страницы
// form.addEventListener("submit", formHandler);
// function formHandler(event) {
// 	event.preventDefault();
// 	if(!formValid(this)) return;
// 	//this - контекст формы. т.к. отправка данных формы
// 	//с перезагрузкой страницы
// 	//метод submit - отправит форму и перезагрузит
// 	console.log('Отправка формы на сервер');
// 	this.submit();
// }

function formValid(form) {
	//валидация полей формы
	return true; //если валидно.
}





//отправка формы без перезагрузки страницы
//AJAX запрос
form.addEventListener('submit', ajaxFormHandler);

function ajaxFormHandler(event) {
	event.preventDefault();
	if(!formValid(this)) return;
	//собираются значения из формы в формдате
	let formData = new FormData(this);

	let xhr = new XMLHttpRequest(); //объект запроса
	//POST - метод передачи, потом как должны уйти данные из формы
	//action - атрибут
	//true - не завершит работу страницы7
	xhr.open('POST', this.action, true);
	//передаем объект со всеми данными формы
	xhr.send(formData);
	//когда ответ придет, тогда сработает следующая функция:
	xhr.onload = function () {
		//после ответа от сервера
		//проверяем статус, 200 - успешно
		if (xhr.status === 200) {
			responseHandler(xhr.responseText);
		}
	}

	function responseHandler(server_answer) {
		console.log("Ответ сервера: " + server_answer);
		let country = document.getElementById('country');
		country.innerText=server_answer;
		console.log(country);
	}

}



