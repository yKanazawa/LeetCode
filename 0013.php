<?php

$a = new Solution();

echo $a->romanToInt('I')     . "\n"; // 1
echo $a->romanToInt('II')    . "\n"; // 2
echo $a->romanToInt('III')   . "\n"; // 3
echo $a->romanToInt('IV')    . "\n"; // 4
echo $a->romanToInt('V')     . "\n"; // 5
echo $a->romanToInt('VI')    . "\n"; // 6
echo $a->romanToInt('VII')   . "\n"; // 7
echo $a->romanToInt('VIII')  . "\n"; // 8
echo $a->romanToInt('IX')    . "\n"; // 9
echo $a->romanToInt('X')     . "\n"; // 10
echo $a->romanToInt('XI')    . "\n"; // 11
echo $a->romanToInt('XII')   . "\n"; // 12
echo $a->romanToInt('XIII')  . "\n"; // 13
echo $a->romanToInt('XIV')   . "\n"; // 14
echo $a->romanToInt('XV')    . "\n"; // 15
echo $a->romanToInt('XVI')   . "\n"; // 16
echo $a->romanToInt('XVII')  . "\n"; // 17
echo $a->romanToInt('XVIII') . "\n"; // 18
echo $a->romanToInt('XIX')   . "\n"; // 19
echo $a->romanToInt('XX')    . "\n"; // 20

echo $a->romanToInt('XXX')   . "\n"; // 30
echo $a->romanToInt('XL')    . "\n"; // 40
echo $a->romanToInt('L')     . "\n"; // 50
echo $a->romanToInt('LVIII') . "\n"; // 58

echo $a->romanToInt('MCMXCIV') . "\n"; // 1994

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $result = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $result += $this->add($s, $i);
        }
        return $result;
    }

    function add($s, &$i) {
        $s2 = $s[$i] . $s[$i+1];
        switch ($s2) {
            case 'IV':
                $i++;
                return 4;
            case 'IX':
                $i++;
                return 9;
            case 'XL':
                $i++;
                return 40;
            case 'XC':
                $i++;
                return 90;
            case 'CD':
                $i++;
                return 400;
            case 'CM':
                $i++;
                return 900;
        }
        switch ($s[$i]) {
            case 'I':
                return 1;
            case 'V':
                return 5;
            case 'X':
                return 10;
            case 'L':
                return 50;
            case 'C':
                return 100;
            case 'D':
                return 500;
            case 'M':
                return 1000;
        }
    }
}