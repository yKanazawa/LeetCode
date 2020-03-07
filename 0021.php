<?php

$l1 = [];
$l1[0] = new ListNode(1);
$l1[1] = new ListNode(2);
$l1[2] = new ListNode(4);
$l1[0]->next = &$l1[1];
$l1[1]->next = &$l1[2];
$l1[2]->next = null;

$l2 = [];
$l2[0] = new ListNode(1);
$l2[1] = new ListNode(3);
$l2[2] = new ListNode(4);
$l2[0]->next = &$l2[1];
$l2[1]->next = &$l2[2];
$l2[2]->next = null;

printListNode($l1[0]);
printListNode($l2[0]);
$a = new Solution();
printListNode($a->mergeTwoLists($l1[0], $l2[0]));

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
    return;
}

class Solution {
    public $result = [];
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $this->result[0] = new ListNode(0);
        $i = 1;
        while (true) {
            if (is_null($l1) && is_null($l2)) {
                break;
            }
            if (!is_null($l1) && is_null($l2)) {
                $this->result[$i] = new ListNode($l1->val);
                $this->result[$i-1]->next = &$this->result[$i];
                $l1 = $l1->next;
            } else if (is_null($l1) && !is_null($l2)) {
                $this->result[$i] = new ListNode($l2->val);
                $this->result[$i-1]->next = &$this->result[$i];
                $l2 = $l2->next;
            } else if ($l1->val <= $l2->val) {
                $this->result[$i] = new ListNode($l1->val);
                $this->result[$i-1]->next = &$this->result[$i];
                $l1 = $l1->next;
            } else {
                $this->result[$i] = new ListNode($l2->val);
                $this->result[$i-1]->next = &$this->result[$i];
                $l2 = $l2->next;
            }
            $i++;
        }
        return $this->result[1];
    }
}