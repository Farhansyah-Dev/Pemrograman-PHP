<?php

require_once __DIR__ . "/Model/TodoListApp.php";
require_once __DIR__ . "/BusinesLogic/AddTodoList.php";
require_once __DIR__ . "/BusinesLogic/RemoveTodoList.php";
require_once __DIR__ . "/BusinesLogic/ShowTodoList.php";

require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";

echo "Aplikasi Todo List".PHP_EOL;

ViewShowTodoList();