<?php

function lengthOfLastWord ($s) {
    $s = trim($s);
    if (strlen($s) == 0) {
        return 0;
    }
    $str_arr = explode(" ", $s);
    echo print_r($str_arr, true);
    return $str_arr[count($str_arr) - 1] == "" ?
         strlen($str_arr[count($str_arr) - 2])
        : strlen($str_arr[count($str_arr) - 1]);
}


var_dump(lengthOfLastWord("b   a    "));