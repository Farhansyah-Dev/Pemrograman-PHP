<?php

require_once __DIR__ . "/../Model/TodoListApp.php";
require_once __DIR__ . "/../BusinesLogic/AddTodoList.php";
require_once __DIR__ . "/../Helper/input.php";

function ViewAddTodoList () {

    echo "Menambah Todo." .PHP_EOL;

    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        echo "Batal menambah Todo".PHP_EOL;//Batal
    } else {
        AddTodoList($todo);
    }
};