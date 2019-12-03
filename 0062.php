<?php

$a = new Solution();
echo $a->uniquePaths(2, 2) . "\n";
echo $a->uniquePaths(3, 2) . "\n";
echo $a->uniquePaths(4, 4) . "\n";
echo $a->uniquePaths(7, 3) . "\n";
echo $a->uniquePaths(100, 100) . "\n";

class Solution {
    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {
        // 2 x 2 : xy, yx
        // 3 x 2 : xxy, xyx, yxx
        // 4 x 2 : xxxy, xxyx xyxx, yxxx
        // 3 x 3 : xxyy, xyxy, xyyx, yxxy, yxyx, yyxx
        // 4 x 3 : xxxyy, xxyxy, xxyyx, xyxxy, xyxyx, xyyxx, yxxxy, yxxyx, yxyxx, yyxxx

        $dist = ($m - 1) + ($n- 1);

        $path = $this->gmp_fact($dist) / ($this->gmp_fact($m - 1) * $this->gmp_fact($dist - ($m - 1)));

        return $path;
    }

    function gmp_fact($n) {
        if ($n == 0) {
            return 1;
        }
        $result = $n;
        for ( $i = $n -1; $i > 0; $i-- ) {
            $result = $result * $i;
        }
        return $result;
    }
}
