<?php

require_once "../Model/TodoListApp.php";
require_once "../BusinesLogic/AddTodoList.php";
require_once "../BusinesLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";

AddTodoList('Tugas Bahasa Pemrograman');
AddTodoList('Tugas Bahasa Indonesia');
AddTodoList('Tugas Kalkulus');

ShowTodoList();

ViewRemoveTodoList();

ShowTodoList();