<?php

$a = new Solution();
print_r($a->findDuplicate([1,3,4,2,2]));
print_r($a->findDuplicate([3,1,3,4,2]));

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $tortoise = 0;
        $hare = 0;

        while (true) {
            $tortoise = $nums[$tortoise];
            $hare = $nums[$nums[$hare]];

            if ($tortoise == $hare) {
                break;
            }
        }

        $tortoise = 0;

        while (true) {
            $tortoise = $nums[$tortoise];
            $hare = $nums[$hare];

            if ($tortoise == $hare) {
                break;
            }
        }

        return $tortoise;
    }
}
