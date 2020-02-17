<?php

function plusOne ($arr) {
   for ($i = count($arr) - 1; $i >= 0; $i--) {
       if ($arr[$i] < 9) {
           $arr[$i] = intval($arr[$i]) + 1;
           return $arr;
       } else {
           $arr[$i] = 0;
       }
   }
    $new_arr = [];
    $new_arr[0] = 1;
    if ($arr[0] == 0) {
        for ($i = 0; $i < count($arr); $i++) {
            $new_arr[]=0;
        }
        return $new_arr;
    } else
        return $arr;
}



