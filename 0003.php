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
echo $a->lengthOfLongestSubstring('abcb')     . "\n"; // 3
echo $a->lengthOfLongestSubstring('asjrgapa') . "\n"; // 6

// for Output Limit Exceeded
// https://leetcode.com/problems/4sum/discuss/8729/what-does-output-limit-exceeded-mean
error_reporting(0);
ini_set('display_errors', 0);

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        if (strlen($s) < 2) {
            return strlen($s);
        }

        $chrNum = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $chrNum[$s[$i]]++;
        }

        $duplicateChar = $this->getDuplicateChar($chrNum);
        $duplicateDist = $this->getDuplicateDist($s, $duplicateChar);
        if (!$duplicateDist) {
            $duplicateDist = [strlen($s)];
        }
        foreach ($duplicateDist as $l) {
            for ($i = 0; $i <= strlen($s) - $l; $i++) {
                $str = substr($s, $i, $l);
                if (!$this->checkDuplicate($str)) {
                    return strlen($str);
                }
            }
        }
        return 0;

    }

    function getDuplicateChar($chrNum)
    {
        $result = [];
        foreach($chrNum as $key => $value) {
            if ($value > 1) {
                $result[] = $key;
            }
        }
        return $result;
    }

    function getDuplicateDist($s, $duplicateChar)
    {
        $result = [];
        foreach($duplicateChar as $chr) {
            $start = 0;
            $preStart = 0;
            while (true) {
                $pos = strpos($s, $chr, $start);
                if ($pos === false) {
                    $result[] = strlen($s) - $start + 1;
                    $result[] = strlen($s) - $preStart;
                    break;
                }
                $result[] = $pos - $start + 1;
                if ($preStart == 0) {
                    $result[] = $pos;
                }
                $preStart = $start;
                $start = $pos + 1;
            };
        }
        $result = array_unique($result);
        rsort($result);
        return $result;
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