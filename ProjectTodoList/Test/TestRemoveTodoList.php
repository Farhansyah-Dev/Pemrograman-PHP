<?php

require_once "../Model/TodoListApp.php";
require_once "../BusinesLogic/addTodoList.php";
require_once "../BusinesLogic/removeTodoList.php";
require_once "../BusinesLogic/ShowTodoList.php";

addTodolist('Muhammad');
addTodolist('farhan');
addTodolist('wirdiansyah');
addTodolist('waryanto');
addTodolist('joko anwar');

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$succes = removeTodoList(6);
var_dump($succes);

showTodoList();