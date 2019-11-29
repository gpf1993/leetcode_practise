<?php
class SolutionInsert {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        if ($target <= $nums[0]) {
            return 0;
        }
        if ($target >= $nums[count($nums) - 1]) {
            return count($nums);
        }
        for ($i = 0; $i < count($nums); $i++) {
            var_dump($i);
            if ($target > $nums[$i]) {
                continue;
            } else {
                return $i;
            }
        }
        return  -1;
    }
}

$model = new SolutionInsert();
$model->searchInsert([1,3], 3);
