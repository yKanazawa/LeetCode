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

        for ($i = 0; $i < strlen($s); $i++) {
            switch ($s[$i]) {
                case ")":
                case "}":
                case "]":
                    if ($i == 0) {
                        return false;
                    }
                    if (!$this->check($s, $i)) {
                        return false;
                    }
                    $i = 0;
            }
        }
        if (preg_match("/^X*$/", $s)) {
            return true;
        }
        return false;
    }

    function check(&$s, $n) {
        $bracket = $s[$n];
        for ($i = $n - 1; $i >= 0; $i--) {
            if ($s[$i] == "X") {
                continue;
            }
            switch ($bracket) {
                case ")":
                    if ($s[$i] == "(") {
                        $s[$i] = "X";
                        $s[$n] = "X";
                        return true;
                    }
                    return false;
                case "}":
                    if ($s[$i] == "{") {
                        $s[$i] = "X";
                        $s[$n] = "X";
                        return true;
                    }
                    return false;
                case "]":
                    if ($s[$i] == "[") {
                        $s[$i] = "X";
                        $s[$n] = "X";
                        return true;
                    }
                    return false;
            }
        }
        return false;
    }
}
