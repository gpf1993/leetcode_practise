<?php

//无重复字符的最长子串
function lengthOfLongestSubstring2 ($s) {
    $s = str_split($s);
    $n = count($s);
    $ans = 0;
    $map = [];
    for ($j = 0, $start = 0; $j < $n; $j++) {
        $alpha = $s[$j];
        if (isset($map[$alpha])) {
           $start = $map[$alpha] > $start ?  $map[$alpha] : $start;
        }
        $ans = $ans > $j - $start + 1 ? $ans : $j - $start + 1;
        $map[$alpha] = $j + 1;
    }
    return $ans;
}

//var_dump(lengthOfLongestSubstring("abcb"));

function lengthOfLongestSubstring ($str) {
    if (strlen($str) <= 1) {
        return strlen($str);
    }
    $strArr = str_split($str);
    $length = count($strArr);
    $left   = 0;
    $right  = 0;
    $subLength = 0;
    $subLongLength = 0;
    $index = 0;
    $map = [];
    while ($right < $length) {
        if (isset($map[$strArr[$index]])) {
            if ($index >= 1 && $strArr[$index] == $strArr[$index - 1]) {
                $left = $index;
            } elseif ($map[$strArr[$index]] + 1 < $index) { //ckilbkd  abba
                $left = $left > $map[$strArr[$index]] + 1 ? $left : $map[$strArr[$index]] + 1;
            } else {
                $left++;
            }
            $subLength = $index - $left + 1;
        } else {
            $subLength += 1;
        }
        $map[$strArr[$index]] = $index;
        $subLongLength = $subLength > $subLongLength ?  $subLength : $subLongLength;
        $right++;
        $index++;
    }
    return $subLongLength;
}
var_dump(lengthOfLongestSubstring("abba"));        //dvdf   abcabcbb  bbbbb pwwkew  "ckilbkd"
var_dump(lengthOfLongestSubstring("dvdf"));
var_dump(lengthOfLongestSubstring("abcabcbb"));
var_dump(lengthOfLongestSubstring("bbbbb"));
var_dump(lengthOfLongestSubstring("pwwkew"));
var_dump(lengthOfLongestSubstring("ckilbkd"));
