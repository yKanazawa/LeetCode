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
        $result[0] = new ListNode(0);
        $sum = 0;
        $i = 1;
        while (true) {
            if(is_null($l1) && is_null($l2) && $sum == 0) {
                break;
            }
            $sum += $l1->val ?? 0;
            $sum += $l2->val ?? 0;
            $val = $sum % 10;
            $sum = ($sum - $val) / 10;
            $result[$i] = new ListNode($val);
            $result[$i-1]->next = &$result[$i];
            $i++;
            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        if ($i == 1){
            return new ListNode(0);
        }
        return $result[1];
    }
}