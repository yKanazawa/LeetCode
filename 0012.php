<?php

$a = new Solution();

echo $a->intToRoman(1)  . "\n"; // I
echo $a->intToRoman(2)  . "\n"; // II
echo $a->intToRoman(3)  . "\n"; // III
echo $a->intToRoman(4)  . "\n"; // IV
echo $a->intToRoman(5)  . "\n"; // V
echo $a->intToRoman(6)  . "\n"; // VI
echo $a->intToRoman(7)  . "\n"; // VII
echo $a->intToRoman(8)  . "\n"; // VIII
echo $a->intToRoman(9)  . "\n"; // IX
echo $a->intToRoman(10) . "\n"; // X
echo $a->intToRoman(11) . "\n"; // XI
echo $a->intToRoman(12) . "\n"; // XII
echo $a->intToRoman(13) . "\n"; // XIII
echo $a->intToRoman(14) . "\n"; // XIV
echo $a->intToRoman(15) . "\n"; // XV
echo $a->intToRoman(16) . "\n"; // XVI
echo $a->intToRoman(17) . "\n"; // XVII
echo $a->intToRoman(18) . "\n"; // XVIII
echo $a->intToRoman(19) . "\n"; // XIX
echo $a->intToRoman(20) . "\n"; // XX

echo $a->intToRoman(30) . "\n"; // XXX
echo $a->intToRoman(40) . "\n"; // XL
echo $a->intToRoman(50) . "\n"; // L
echo $a->intToRoman(58) . "\n"; // LVIII (50 + 5 + 1 + 1)

echo $a->intToRoman(1994) . "\n"; // MCMXCIV (1000 + 900 + 90 + 4)

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {

        $result = "";
        while ($num > 0) {
            if ($num >= 1000) {
                $num -= 1000;
                $result = $result . 'M';
            } else if ($num >= 900) {
                $num -= 900;
                $result = $result . 'CM';
            } else if ($num >= 500) {
                $num -= 500;
                $result = $result . 'D';
            } else if ($num >= 400) {
                $num -= 400;
                $result = $result . 'CD';
            } else if ($num >= 100) {
                $num -= 100;
                $result = $result . 'C';
            } else if ($num >= 90) {
                $num -= 90;
                $result = $result . 'XC';
            } else if ($num >= 50) {
                $num -= 50;
                $result = $result . 'L';
            } else if ($num >= 40) {
                $num -= 40;
                $result = $result . 'XL';
            } else if ($num >= 10) {
                $num -= 10;
                $result = $result . 'X';
            } else if ($num >= 9) {
                $num -= 9;
                $result = $result . 'IX';
            } else if ($num >= 5) {
                $num -= 5;
                $result = $result . 'V';
            } else if ($num >= 4) {
                $num -= 4;
                $result = $result . 'IV';
            } else if ($num >= 1) {
                $num -= 1;
                $result = $result . 'I';
            }
        }
        return $result;
    }
}