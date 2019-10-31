<?php
class Solution3 {

    const ROMAN = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
        '0' => 0
    ];

    public function romanToInt($s) {
        $data = 0;
        $arr = str_split($s, 1);
        if (count($arr) == 1) {
            return self::ROMAN[$arr[0]];
        } else {
            for ($i = 0; $i < count($arr); ) {
                $front = $arr[$i];
                $after = !empty($arr[$i+1]) ?  $arr[$i+1] : 0;
                if (self::ROMAN[$front] >= self::ROMAN[$after]) {
                    $data += self::ROMAN[$front];
                } else {
                    $data -= self::ROMAN[$front];
                }
                $i++;
            }
        }
        return $data;
    }
}

$model = new Solution3();
$data  = $model->romanToInt("IX");
var_dump($data);