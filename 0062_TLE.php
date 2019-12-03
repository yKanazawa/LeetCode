<?php

$a = new Solution();
echo $a->uniquePaths(3, 2) . "\n";
echo $a->uniquePaths(7, 3) . "\n";
echo $a->uniquePaths(100, 100) . "\n";

class Solution {
    private $m;
    private $n;
    private $count;

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {
        $this->m = $m;
        $this->n = $n;
        $this->count = 0;
        $this->move(1, 1);
        return $this->count;
    }

    function move($m, $n) {
        if ($m == $this->m && $n == $this->n) {
            $this->count++;
            return;
        }
        if ($m > $this->m || $n > $this->n) {
            return;
        }
        $this->move($m+1, $n);
        $this->move($m, $n+1);
    }
}
