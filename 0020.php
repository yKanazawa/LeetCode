<?php

$a = new Solution();
echo $a->isValid("()")     . "\n"; // true
echo $a->isValid("()[]{}") . "\n"; // true
echo $a->isValid("(]")     . "\n"; // false
echo $a->isValid("([)]")   . "\n"; // false
echo $a->isValid("{[]}")   . "\n"; // true

echo $a->isValid("}")      . "\n"; // false
echo $a->isValid("")       . "\n"; // true
echo $a->isValid("([]")    . "\n"; // false

class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if (strlen($s) == 0) {
            return true;
        }
        $result = false;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == "X") {
                continue;
            }
            $result = $this->search($s, $i, $s[$i]);
            if ($result == false) {
                return false;
            }
            $s[$i] = "X";
        }
        echo $s . "\n";
        return $result;
    }

    function search(&$s, $i, $bracket) {
        echo "bracket=" . $bracket;
        echo $s[$i];
        switch ($s[$i]) {
            case "(":
            case "{":
            case "[":
                $result = $this->search($s, $i + 1, $s[$i]);
                if ($result == false) {
                    return false;
                }
                $s[$i] = "X";
                return true;
            case ")":
                if ($bracket == "(") {
                    $s[$i] = "X";
                    return true;
                }
                return false;
            case "}":
                if ($bracket == "{") {
                    $s[$i] = "X";
                    return true;
                }
                return false;
            case "]":
                if ($bracket == "[") {
                    $s[$i] = "X";
                    return true;
                }
                return false;
        }
    }
}
