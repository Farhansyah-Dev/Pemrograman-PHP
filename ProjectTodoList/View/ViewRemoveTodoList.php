<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinesLogic/RemoveTodoList.php";

function ViewRemoveTodoList () {
    echo "Menghapus Todo.".PHP_EOL;

    $pilihan = input('Nomor (x untuk batalkan) ');

    if ($pilihan == "x") {
        echo "Batal menghapus Todo.".PHP_EOL;
    }
    else {
        $succsess = RemoveTodoList($pilihan);

        if ($succsess) {
            echo "Succsess menghapus Todo nomor $pilihan".PHP_EOL;
        } 
        else {
            echo "Gagal menghapus Todo $pilihan".PHP_EOL;
        }
    }
};