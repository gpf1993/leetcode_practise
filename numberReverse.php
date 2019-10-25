<?php
class Solution1 {

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
}
$model = new Solution1();
var_dump($model->reverse(12));
