<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinesLogic/addTodoList.php";
require_once "../View/ViewAddTodoList.php";

addTodolist("Tugas Basis data");
addTodolist("Tugas Logika Informatika");
addTodolist("Tugas Pemrograman Web");

ViewAddTodoList();

ViewShowTodoList();