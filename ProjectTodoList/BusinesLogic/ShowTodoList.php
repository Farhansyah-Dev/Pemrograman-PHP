<?php

/**
 * Menampilkan Daftar Todo List
 */

function ShowTodoList() {
    global $todoList;

    echo 'Daftar TodoList'.PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value".PHP_EOL;
    }

};