<?php

function faktorialLoop (int $value): int {
    $awal = 1;
    for ($i = 1; $i <= $value; $i++){
        $awal *= $i;
    }
    return $awal;
}
var_dump(faktorialLoop(5));

//Recursive Function

function faktorialRecursive(int $value) :int {
    if ($value == 1){
        return 1;
    } else {
        return $value * faktorialRecursive ($value - 1);
    }
}
var_dump(faktorialRecursive(5));