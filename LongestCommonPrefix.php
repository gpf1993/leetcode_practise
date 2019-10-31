<?php
class Solution4 {

    public function longestCommonPrefix1 ($str = []) {
        if (count($str) == 1) {
            return "";
        } elseif (count($str) >= 2) {
            $target  = $str[0];
            for ($i = 1; $i < count($str); $i++) {
                for ($index = 0; $index < strlen($target); $index++) {
                    $flag   = substr($target, $index, strlen($target));
                    if(strpos($str[$i], $flag) !== false){
                        $target = $flag;
                        break;
                    } elseif ($index == strlen($target) - 1 && strpos($str[$i], $flag) === false) {
                        return "";
                    }
                }
            }
        }
        return "";
    }

    public function longestCommonPrefix ($str = []) {
        $flag    = "";
        $target  = "flower";
        for ($index = 0; $index < strlen($target); $index++) {
            $flag   = substr($target, $index, strlen($target));
            var_dump($flag);
            if(strpos("flow", $flag) !== false){
                $target = $flag;
                break;
            }
        }
        return "";
    }

    function longStr ($str1, $str2) {
        $max_len = 0;
        $c_arr   = [];
        $result = [];
        $pos    = 0;
        $str1_arr = str_split($str1);
        $str2_arr = str_split($str2);
        for ($i = 0; $i < count($str1_arr); $i ++) {
            $temp_arr = [];
            for ($j = 0; $j < count($str2_arr); $j++) {
                $temp = 0;
                if ($str1_arr[$i] == $str2_arr[$j]) {
                    $temp = 1;
                    $c_arr[$i][] = $j;
                }
                $temp_arr[] = $temp;
            }
            $result[] = $temp_arr;
        }
        var_dump($c_arr);
//        foreach ($result as $row) {
//            for ($j = 0; $j < count($row); $j ++) {
//                if ($j == count($row) - 1) {
//                    echo "  ".$row[$j]." \n";
//                } else {
//                    echo "  ".$row[$j];
//                }
//            }
//        }
    }
}

$model = new Solution4();
//$data  = $model->longestCommonPrefix(["flower","flow","flight"]);
//var_dump($data);
$model->longStr("acbcbcef", "abcbced");