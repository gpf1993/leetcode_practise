<?php
class Solution9 {

    function removeDuplicates(&$nums) {
        $length = count($nums);
        for ($i = 0; $i < $length - 1; $i++) {
            if (!isset($nums[$i])) {
                continue;
            }
            if ($nums[$i] != $nums[$i+1]) {
                continue;
            } else {
                unset($nums[$i]);
                //$nums[$i] = null;
                //echo print_r($nums, true); exit();
                //$i = 0;
            }
        }
//        $index = 0;
//        while ($index < count($nums)) {
//            if ($nums[$index] != $nums[$index+1]) {
//                continue;
//            } else {
//                unset($nums[$index]);
//            }
//        }
        echo print_r($nums, true);
        return count($nums);
    }
}

$model = new Solution9();
$arr = [0,0,1,1,1,2,2,3,3,4];
$length = $model->removeDuplicates($arr);
var_dump($length);
