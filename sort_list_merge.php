<?php


class ListNode {
    public $val  = 0;
    public $next = null;
    function __construct($val, $next) {
        $this->val  = $val;
        $this->next = $next;
    }
}

class Solution7 {

    function mergeTwoLists($l1, $l2) {
        $newHead = null;
        $newTail = null;
        if (empty($l1) || empty($l2)) {
            return $l1 ?? $l2;
        }
        while ($l1 != null || $l2 != null) {
           $tempNode1 = new ListNode($l1->val, null);
           $tempNode2 = new ListNode($l2->val, null);
           if ($tempNode1->val <= $tempNode2->val) {
               $temp = $tempNode1;
               $temp->next = $tempNode2;
           } else {
               $temp = $tempNode2;
               $tempNode2->next = $tempNode1;
           }
           if (empty($newHead)) {
               $newHead = $temp;
           } else {
               if ($newTail->val <= $temp->val) {
                   $newHead->next = $temp;
               } else {
                   $newTail->next = $temp;
               }
           }
           $newTail =  $temp->next;
           if ($l2->next != null && $l1->next == null) {
               $newTail->next = $l2->next;
               break;
           }
           if ($l1->next != null && $l2->next == null) {
               $newTail->next = $l1->next;
               break;
           }
           $l1 = $l1->next;
           $l2 = $l2->next;
        }
        return $newHead;
    }
}
// 1->2->4
$node1 = new ListNode(5, null);
//$node2 = new ListNode(2, null);
//$node3 = new ListNode(4, null);
//$node1->next = $node2;
//$node2->next = $node3;


// 1->3->4
$node11 = new ListNode(0, null);
$node12 = new ListNode(3, null);
$node13 = new ListNode(4, null);
$node11->next = $node12;
$node12->next = $node13;

$L_1 = $node1;
$L_2 = $node11;

$model = new Solution7();
$data = $model->mergeTwoLists(null, $L_2);
echo print_r($data, true);
