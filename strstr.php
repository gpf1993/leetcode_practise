<?php
class Solution10 {

    function strStr($haystack, $needle) {
        if (empty($needle) || $haystack == $needle) {
            return 0;
        }
        $search_arr = str_split($haystack);
        $find_arr   = str_split($needle);
        $index      = 0;
        $i          = 0;
        for (; $i < count($search_arr); ) {
            if (isset($find_arr[$index++])) {
                if ($search_arr[$i] == $find_arr[$index++]) {
                    var_dump($index);
//                if ($index == count($find_arr)) {
//                    if ($index == 1) {
//                        return 0;
//                    }
//                    var_dump($i);
//                    var_dump($index);
//                    return $index == 1 ? 0 : $i - $index;
//                }
                }
            } else {
               continue;
            }
            $i++;
        }
        return -1;
    }
}

$model = new Solution10();
$data = $model->strStr("aaa", "aa");
var_dump($data);