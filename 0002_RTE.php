<?php

$l1 = [];
$l1[0] = new ListNode(2);
$l1[1] = new ListNode(4);
$l1[2] = new ListNode(3);
$l1[0]->next = &$l1[1];
$l1[1]->next = &$l1[2];
$l1[2]->next = null;

$l2 = [];
$l2[0] = new ListNode(5);
$l2[1] = new ListNode(6);
$l2[2] = new ListNode(4);
$l2[0]->next = &$l2[1];
$l2[1]->next = &$l2[2];
$l2[2]->next = null;

printListNode($l1[0]);
printListNode($l2[0]);
$a = new Solution();
printListNode($a->addTwoNumbers($l1[0], $l2[0]));

/**
 * Definition for a singly-linked list.
 */
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}

function printListNode(ListNode $l) {
    echo $l->val;
    if (!is_null($l->next)) {
        echo '->';
        printListNode($l->next);
    } else {
        echo PHP_EOL;
    }
}

class Solution {
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $num1 = $this->list2Num($l1);
        $num2 = $this->list2Num($l2);

        return $this->num2List($num1 + $num2);
    }

    function list2Num(ListNode $l) {
        $result = 0;
        $digit = 1;
        while (true) {
            if (is_null($l)) {
                break;
            }
            $result += $l->val * $digit;
            $l = $l->next;
            $digit *= 10;
        }
        return $result;
    }

    function num2List($num) {
        $result[0] = new ListNode(0);
        if($num == 0) {
            return $result[0];
        }
        $digit = 1;
        $i = 1;
        while (true) {
            if($num == 0) {
                break;
            }
            $val = $num % ($digit * 10);
            $result[$i] = new ListNode($val / $digit);
            $result[$i-1]->next = &$result[$i];

            $num -= $val;
            $digit *= 10;
            $i++;
        }
        return $result[1];
    }
}