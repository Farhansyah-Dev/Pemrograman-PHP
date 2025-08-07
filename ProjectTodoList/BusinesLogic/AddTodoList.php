<?php

/**
 * Function Menambahkan Todo List
 */

function AddTodoList (string $todo) {

    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList [$number] = $todo;

};