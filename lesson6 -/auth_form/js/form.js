// // объявление переменных
// // кнопка открытия модального окна
// let open_modal_btn = document.getElementById('open_modal');
// // кнопка закрытия модального окна
// let cancel_btn = document.getElementById('cancel');
// // модальное окно
// let modal = document.querySelector('.modal');
// // элемент для вывода ошибок заполнения полей формы и авторизации
// let error_field = document.getElementById('errors');
// // форма
// let form = document.forms.auth_form;


// // функции
// // открытие модального окна
// function open_modal() {
//     modal.classList.add('open');
// }
// // закрытие модального окна
// function close_modal() {
//     modal.classList.remove('open');
//     error_field.innerText = "";
// }

// // обработчики событий
// // при нажатии (событие click) на кнопку open_modal_btn будет вызвана функция open_modal
// open_modal_btn.addEventListener('click', open_modal);
// // при нажатии (событие click) на кнопку cancel_btn будет вызвана функция close_modal
// cancel_btn.addEventListener('click', close_modal);


// объявление переменных
// кнопка открытия модального окна
let open_modal_btn = document.getElementById('open_modal');
// кнопка закрытия модального окна
let cancel_btn = document.getElementById('cancel');
// модальное окно
let modal = document.querySelector('.modal');
// элемент для вывода ошибок заполнения полей формы и авторизации
let error_field = document.getElementById('errors');
// форма
let form = document.forms.auth_form;


// функции
// открытие модального окна
function open_modal() {
    modal.classList.add('open');
}
// закрытие модального окна
function close_modal() {
    modal.classList.remove('open');
    error_field.innerText = "";
}

// обработчики событий
// при нажатии (событие click) на кнопку open_modal_btn будет вызвана функция open_modal
open_modal_btn.addEventListener('click', open_modal);
// при нажатии (событие click) на кнопку cancel_btn будет вызвана функция close_modal
cancel_btn.addEventListener('click', close_modal);

function validate() {
    if(form.login.value.length < 3 ||
    form.password.value.length < 3) {
        return false;
    }
    return true;
}

function sendForm(event) {
    event.preventDefault();
    if(!validate()) {
        error_field.innerText = "Не все поля заполнены" +
            "корректно.";
        return;
    }
    let request = new XMLHttpRequest();
    request.open('post', this.action,
        true);
    request.onload = function() {
        if(request.status === 200) {
            responseHandler(request.responseText);
        }
    }
    request.send(new FormData(this));
}

form.addEventListener("submit", sendForm);

function responseHandler(answer) {
    if(answer === SUCCESS) {
        window.location.replace("account.php");
    } else if(answer === ERR) {
        error_field.innerText = "Ошибка " +
            "авторизации.";
    }
}
const SUCCESS = "success";
const ERR = "error";









