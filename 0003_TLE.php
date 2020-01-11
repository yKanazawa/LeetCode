<?php

$a = new Solution();

echo $a->lengthOfLongestSubstring('abcabcbb') . "\n"; // 3
echo $a->lengthOfLongestSubstring('bbbbb')    . "\n"; // 1
echo $a->lengthOfLongestSubstring('pwwkew')   . "\n"; // 3
echo $a->lengthOfLongestSubstring(' ')        . "\n"; // 1
echo $a->lengthOfLongestSubstring('')         . "\n"; // 0
echo $a->lengthOfLongestSubstring('au')       . "\n"; // 2
echo $a->lengthOfLongestSubstring('aab')      . "\n"; // 2
echo $a->lengthOfLongestSubstring('dvdf')     . "\n"; // 3
echo $a->lengthOfLongestSubstring('biyastksrdnilpdytdqrdnnkary')     . "\n"; // 9

// for Output Limit Exceeded
// https://leetcode.com/problems/4sum/discuss/8729/what-does-output-limit-exceeded-mean
error_reporting(0);
ini_set('display_errors', 0);

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        for ($l = strlen($s); $l > 0; $l--) {
            for ($i = 0; $i <= strlen($s) - $l; $i++) {
                $str = substr($s, $i, $l);
                if (!$this->checkDuplicate($str)) {
                    return strlen($str);
                }
            }
        }
        return 0;
    }

    function checkDuplicate($str){
        $already = [];
        for ($i = 0; $i < strlen($str); $i++) {
            if ($already[$str[$i]] == true) {
                return true;
            }
            $already[$str[$i]] = true;
        }
        return false;
    }
}