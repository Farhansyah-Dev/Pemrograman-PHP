<?php

require_once "../Model/TodoListApp.php";
require_once "../BusinesLogic/addTodoList.php";

addTodolist("1. Perhatikan materi");
addTodolist("2. Praktikan ");
addTodolist("3. Ulangi");

var_dump($todoList);