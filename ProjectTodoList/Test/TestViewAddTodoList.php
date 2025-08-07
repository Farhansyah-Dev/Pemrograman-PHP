<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinesLogic/AddTodoList.php";
require_once "../BusinesLogic/ShowTodoList.php";

AddTodoList("Tugas Basis Data");
AddTodoList("Tugas Logika Informatika");
AddTodoList("Tugas Pemrograman Web");

ViewAddTodoList();

ShowTodoList();

ViewAddTodoList();

ShowTodoList();
