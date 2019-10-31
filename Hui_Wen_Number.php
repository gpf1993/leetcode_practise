<?php

class Solution2 {


    /**
     * @param Integer $x
     * @return Boolean
     *
     * 1.整数反转看是不是和原来的的数字相同 == 会遇到溢出问题
     *
     * 优化解法：
     * 反转一半，如果相等就说明是回文数
     * 找到一半的条件：  原始数字除以 10，然后给反转后的数字乘上 10，所以，当原始数字小于反转后的数字时，就意味着我们已经处理了一半位数的数字
     */
    function isPalindrome1($x) {
        if ($x >= 0) {
            $reverseNumber = $this->reverse($x);
            return $reverseNumber == $x ? true : false;
        }
        return false;
    }

    public function reverse($x) {
        $res = 0;
        $of  = ((1 << 31) - 1) / 10;
        while ($x != 0) {
            if (abs($res) > $of) {
                return 0;
            }
            $res = $res * 10 + $x % 10;
            $x = intval($x / 10);
        }
        return $res;
    }

    function isPalindrome($x) {
        if ($x >= 0) {
            $arr = [];
            if ($x == 0) {
                $arr[] = $x;
            }
            while ($x != 0) {
                $arr[] = intval($x % 10) ;
                $x = intval($x / 10);
            }
            if (count($arr)) {
                for ($i = 0; $i < floor(count($arr) / 2); $i++) {
                    if ($arr[$i] != $arr[count($arr) - $i - 1]) {
                        return false;
                    }
                }
                return true;
            }
            return false;
        }
        return false;
    }
}
$model = new Solution2();
$model->isPalindrome(-122);


