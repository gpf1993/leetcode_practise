<?php

$a = [1, 2, 3,4];

foreach ($a as $k => &$v) {
    $v *= $v;
}

echo print_r($a, true);
