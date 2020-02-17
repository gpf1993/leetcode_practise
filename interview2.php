<?php
$num = 20;
function A (&$num) {
    static  $num;
    $num = $num * 10;
}

A($num);
echo $num ."\n";
$a = 0;
$b = "";
$c = null;
$d = false;
$e = array();

var_dump(is_null($a));
var_dump(is_null($b));
var_dump(is_null($c));
var_dump(is_null($d));
var_dump(is_null($e));

echo  "////////////////////////////\n";

var_dump(empty($a));
var_dump(empty($b));
var_dump(empty($c));
var_dump(empty($d));
var_dump(empty($e));


echo  "===========================\n";
var_dump(isset($a));
var_dump(isset($b));
var_dump(isset($c));
var_dump(isset($d));
var_dump(isset($e));