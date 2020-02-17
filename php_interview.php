<?php

function arrayReverse ($arr) {
    $left  = 0;
    $right = count($arr) - 1;
    while ($left < $right) {
        $temp = $arr[$left];
        $arr[$left] = $arr[$right];
        $arr[$right] = $temp;
        $left++;
        $right--;
    }
    return $arr;
}

/**
 * 获取大王
 * @param  int $n
 * @param  int $m
 * @return int
 */
function getKingMonkey($n, $m) {
    $arr = range(1, $n);
    $i = 0;
    while (count($arr) > 1) {
        $i++;
        $survice = array_shift($arr);
        if ($i % $m != 0) {
            array_push($arr, $survice);
        }
    }
    return $arr[0];
}

function binarySearch ($array, $n, $value){
    $left = 0;
    $right = $n - 1;
    while ($left <= $right) {
        $mid = intval(($left + $right) / 2);
        if ($value > $array[$mid]) {
            $left = $mid + 1;
        } elseif ($value < $array[$mid]) {
            $right = $mid - 1;
        } else {
            return $mid;
        }
    }
    return -1;
}

function get_min_abs_value($arr)
{
    $n = count($arr);
    //如果符号相同，直接返回
    if (is_same_sign($arr[0], $arr[$n - 1])) {
        return $arr[0] >= 0 ? $arr[0] : $arr[$n - 1];
    }

    //二分查找
    $left = 0;
    $right = $n - 1;

    while ($left <= $right) {
        if ($left + 1 === $right) {
            return abs($arr[$left]) < abs($arr[$right]) ? $arr[$left] : $arr[$right];
        }

        $mid = intval(($left + $right) / 2);

        if ($arr[$mid] < 0) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return false;
}

function is_same_sign($a, $b)
{
    if ($a * $b > 0) {
        return true;
    } else {
        return false;
    }
}


function selectionSort($arr) {
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}


function quick_sort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }
    $middle = $arr[0]; // 中间值
    $left   = array(); // 小于中间值
    $right  = array();// 大于中间值
    for ($i=1; $i < count($arr); $i++) {
        if ($middle < $arr[$i]) {
            $right[] = $arr[$i];
        } else {
            $left[] = $arr[$i];
        }
    }
    $left  = quick_sort($left);
    $right = quick_sort($right);
    return array_merge($left, array($middle), $right);
}



echo print_r(quick_sort([5, -2, -1, 2, 3]), true);
