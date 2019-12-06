<?php

$a = new Solution();
echo $a->isValid("()")     . "\n";
echo $a->isValid("()[]{}") . "\n";
echo $a->isValid("(]")     . "\n";
echo $a->isValid("([)]")   . "\n";
echo $a->isValid("{[]}")   . "\n";

class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        return true;
    }
}
