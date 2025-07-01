<?php

/**
 * Menampilkan Daftar Todo List
 */

function showTodoList() {
    global $todolist;

    echo 'Daftar TodoList'.PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number. $value".PHP_EOL;
    }

};