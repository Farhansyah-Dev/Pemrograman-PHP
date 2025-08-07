<?php

/**
 * Function Menghapus TodoList
 */

function RemoveTodoList(int $number ): bool {

    global $todoList;

    if ($number > sizeof($todoList)) {
        return False;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
    
    unset($todoList[sizeof($todoList)]);

    return True;

};