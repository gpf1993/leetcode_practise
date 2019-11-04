<?php
class Solution4 {

    //最长公共前缀
    public function longestCommonPrefix ($str = []) {
        $flagIndex = 0;
        $target = "";
        if (count($str) == 1) {
            return $str[0];
        } elseif (count($str) >= 2) {
            $target = $str[0];
            for ($i = 1; $i < count($str); $i++) {
                for ($index = 0; $index < strlen($target); $index++) {
                    $flag   = substr($target, 0, strlen($target) - $index);
                    if (strlen($flag) == 1) {
                        if (strpos($str[$i], $flag) === 0)  {
                            $target = $flag;
                            $flagIndex += 1;
                            break;
                        } else {
                            return "";
                        }
                    }
                    if(strpos($str[$i], $flag) === 0) {
                        $target = $flag;
                        $flagIndex += 1;
                        break;
                    }
                    if ($index == strlen($target) - 1 && strpos($str[$i], $flag) === false) {
                        return "";
                    }
                }
            }
        }
        if ($flagIndex == count($str) - 1){
            return $target;
        }
        return "";
    }

    //最长公共子串
    function longStr ($str1, $str2) {
        $c_arr   = [];
        $result = [];
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

    }
}

$model = new Solution4();
$data  = $model->longestCommonPrefix(["abca","aba","aaab"]);
var_dump($data);
//$model->longStr("acbcbcef", "abcbced");