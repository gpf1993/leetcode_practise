<?php


function humpToLine($str) {
    return preg_replace_callback('/([A-Z])/', function ($match) {
        return '_' . lcfirst($match[0]);
    }, $str);
}

//$str = humpToLine("NewId");
//echo substr($str, 1, -1);

$a = [1, 2, 3];
$b = [4, 5, 6];

$c = [
    'a' => 1
];
$d = [
    'a' => 2,
    'b' => 3
];

//echo print_r($a + $b, true);
//echo print_r(array_merge($a, $b), true);

//echo print_r($c + $d, true);
//echo print_r(array_merge($c, $d), true);

function  longestLength ($arr) {
    $length = 0;
    $longLength = 0;
    for ($i = 0; $i < count($arr) ; $i++) {
        if ($i == count($arr) - 1 &&  $arr[$i -1] <= $arr[$i]) {
            $length += 1;
        } elseif ($arr[$i] <= $arr[$i + 1]) {
            $length += 1;
        } elseif ($i != 0 && $arr[$i - 1 ] <= $arr[$i] && $arr[$i] > $arr[$i + 1]) {
            $length += 1;
        } else {
            if ($longLength < $length) {
                $longLength = $length;
                $length = 0;
            }
        }
    }
    echo print_r(['length' => $length], true);
}


function findLengthOfLCIS ($nums) {
    $max=0;
    $i=1;
    foreach ($nums as $key=>$value){
        if(isset($nums[$key+1])){
            if($nums[$key]<$nums[$key+1]){
                $i++;
            }
            else{
                $max=max($max,$i);
                $i=1;
            }
        }
        if($key==(count($nums)-1)){
            $max=max($max,$i);
        }
    }
    return $max;
}

function findLengthOfLCIS2($nums) {
    if ($nums == null || count($nums) == 0){
        return 0;
    }
    $begin  = 0;
    $length    = 1;
    $maxLength = 1;
    for ($i = 1; $i < count($nums); $i++){
        if ($nums[$i] > $nums[$i-1]) {
            $length += 1;
        } else {
            $length = 1;
        }
        if ($length > $maxLength) {
            $maxLength =  $length;
            $begin = $i - $maxLength + 1;
        }
    }
    $maxLength = $length > $maxLength ? $length : $maxLength;
    echo print_r(['length' => $maxLength], true);
    for ($j = $begin; $j < $begin + $maxLength; $j++) {
        echo $nums[$j] ." ";
    }
    return $maxLength;
}

findLengthOfLCIS2([5,7,2,3,4]);