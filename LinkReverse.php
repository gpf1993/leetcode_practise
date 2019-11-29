<?php
include 'sort_list_merge.php';

$node1 = new ListNode(2, null);
$node2 = new ListNode(6, null);
$node3 = new ListNode(8, null);

$node1->next = $node2;
$node2->next = $node3;

echo print_r($node1, true);

$head = $node1;

function reverse (ListNode $head) {
    $newHead = null;
    while ($head != null) {
        $temp = $head->next;
        $head->next = null;
        if (empty($newHead)) {
            $newHead = $head;
        } else {
            $head->next = $newHead;
            $newHead    = $head;
        }
        $head = $temp;
    }
    return $newHead;
}

echo print_r(reverse($head), true);
