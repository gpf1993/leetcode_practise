<?php

//issue: https://leetcode-cn.com/problems/two-sum/

class Solution {

    public function twoSum1 ($arr = [], $target) { //通过
        $beginFlag = -1;
        $endFlag   = -1;
        for ( $i = 0; $i < count($arr);  $i++) {
            for ($index = $i + 1; $index < count($arr); $index++) {
                if ($arr[$i] + $arr[$index] == $target) {
                    $beginFlag = $i;
                    $endFlag   = $index;
                    break;
                }
            }
        }
        $data  =[$beginFlag, $endFlag];
        return $data;
    }

    public function twoSum($arr = [], $target) { //通过
        $map = [];
        for ($i = 0; $i < count($arr);  $i++) {
            if (array_key_exists($target - $arr[$i], $map)) {
                return [$map[$target - $arr[$i]], $i];
            }
            $map[$arr[$i]] = $i;
        }
        return [];
    }
}

$obj = new Solution();
echo print_r($obj->twoSum([2,7,11,15], 9), true);