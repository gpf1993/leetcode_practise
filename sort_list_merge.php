<?php


class ListNode {
    public $val  = 0;
    public $next = null;
    function __construct($val, $next) {
        $this->val  = $val;
        $this->next = $next;
    }

    public function initList () {
        $root = null;
        $tail = null;
        for ($i = 1; $i < 10; $i++) {
            $current = null;
            if (empty($root)) {
                $root = new ListNode($i, null);
                $tail = $root;
            } else {
                $tempNode = new ListNode($i, null);
                $tail->next = $tempNode;
                $tail = $tempNode;
            }
        }
        return $root;
    }
}

class Solution7 {

    function mergeTwoLists($l1, $l2) {
       if ($l1 == null) {
           return $l2;
       }
       if ($l2 == null) {
           return $l1;
       }
       if ($l1->val < $l2->val) {
           $l1->next = $this->mergeTwoLists($l1->next, $l2);
           return $l1;
       } else {
           $l2->next = $this->mergeTwoLists($l1, $l2->next);
           return $l2;
       }
    }
}
// 1->2->4
$node1 = new ListNode(2, null);
$node2 = new ListNode(6, null);
$node3 = new ListNode(8, null);
$node1->next = $node2;
$node2->next = $node3;


// 1->3->4
$node11 = new ListNode(1, null);
$node12 = new ListNode(3, null);
$node13 = new ListNode(4, null);
$node11->next = $node12;
$node12->next = $node13;

$L_1 = $node1;
$L_2 = $node11;

$model = new Solution7();
$data = $model->mergeTwoLists($L_1, $L_2);
echo print_r($data, true);
