<?php

class Solution6 {
    const ARR = [
        '('  =>  1,
        '['  =>  2,
        '{'  =>  3,
        ')'  => -1,
        ']'  => -2,
        '}'  => -3
    ];

    function isValid($s) {
        if (empty($s)) {
            return true;
        }
        $str_arr = str_split($s);
        $stack   = [];
        foreach ($str_arr as $v) {
           if (count($stack)) {
               $pop = array_pop($stack);
               if ($pop == abs(self::ARR[$v]) && $pop != self::ARR[$v]) {
                   continue;
               } else {
                   array_push($stack, $pop);
                   array_push($stack, self::ARR[$v]);
               }
           } else {
               array_push($stack, self::ARR[$v]);
           }
        }
        return count($stack) == 0 ? true : false;
    }
}

$model = new Solution6();
$data  = $model->isValid("((");
var_dump($data);
