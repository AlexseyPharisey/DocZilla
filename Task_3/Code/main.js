//Создание переменной addMessage класса message
//Создание переменной addButton класса add
//Получение списка тегов ul с помощью класса todo
let addMessage = document.querySelector('.message'),
    addButton = document.querySelector('.add');
let todo = document.querySelector('.todo');

//Создание массива todoList, который будет хранить все дела
let todoList = [];
//Если в localStorage есть данные массива, то мы их возвращаем
if(localStorage.getItem('todo')){
    todoList = JSON.parse(localStorage.getItem('todo'));
    displayMessages();
}

//Обработчик события нажатия на кнопку
addButton.addEventListener('click', function(){

//Массив, который будет создаваться после нажатия на кнопку
//todo - текст сообщения
//cheked - переменная, контролирующая выполнение дела
//important -

    let newTodo = {
        todo: addMessage.value,
        checked: false,
        important: false
    };
//Добавление newTodo в массив todoList
    todoList.push(newTodo);
    displayMessages();
//Сохранение данных массива в localStorage
    localStorage.setItem('todo', JSON.stringify(todoList));
});

//Функция вывода массива при помощи тега li
function displayMessages(){
    let displayMessage = '';
    if(todoList.length === 0) todo.innerHTML = '';
    todoList.forEach(function(item, i){
//Генерация тега li с конкатенацией
        displayMessage += `
        <li>
            <input type='checkbox' id='item_${i}' ${item.checked ? 'checked' : ''}>
            <label for='item_${i}' class="${item.important ? 'important' : ''}">${item.todo}</label>
        </li>        
        `;
//Вывод информации (наших дел)
        todo.innerHTML = displayMessage;
    });
}

//Обработчик события изменения списка todo
todo.addEventListener('change', function(event){
//Получение текста (innerHTML) тега label
    let valueLabel = todo.querySelector('[for=' + event.target.getAttribute('id') + ']').innerHTML;
//Создание "галочек" тега label и сохранение их в localStorage
    todoList.forEach(function (item){
       if (item.todo === valueLabel){
           item.checked = !item.checked;
           localStorage.setItem('todo', JSON.stringify(todoList));
       }
    });
});

//Обработчик события нажатия правой кнопкой мыши по делу
todo.addEventListener('contextmenu', function(event){
//Отмена стандартного поведения браузера, для возможности
//клика правой кнопкой мыши
   event.preventDefault();
//Переборка массива todoList
   todoList.forEach(function(item, i){
//Реализация удаления дела при нажатии ctrl+ПКМ
       if(item.todo === event.target.innerHTML){
           if(event.ctrlKey || event.metaKey){
               todoList.splice(i,1);
           }else{
               item.important = !item.important;
           }
           displayMessages();
//Сохрание значения label в localStorage
           localStorage.setItem('todo', JSON.stringify(todoList));
       }
   })
});




