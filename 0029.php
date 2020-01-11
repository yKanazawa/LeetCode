<?php

$a = new Solution();

$arr = [3,2,2,3];
echo $a->removeElement($arr, 3) . "\n"; // 2
$arr = [0,1,2,2,3,0,4,2];
echo $a->removeElement($arr, 2) . "\n"; // 5


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $nums = array_diff($nums, [$val]);
        return sizeof($nums);
    }
}
