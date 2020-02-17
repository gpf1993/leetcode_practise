<?php

class LinkNode {
    public $val    = 0;
    public $next   = null;
    public $prefix = null;

    function __construct($val, $next, $prefix) {
        $this->val    = $val;
        $this->next   = $next;
        $this->prefix = $prefix;
    }
}

$node1 = new LinkNode(2, null,null);
$node2 = new LinkNode(6, null,null);
$node3 = new LinkNode(8, null,null);
$node4 = new LinkNode(10,null,null);

$head = null;
$tail = null;
function create($node, &$head, &$tail) {
    if (empty($head)) {
        $head = $node;
    } else {
        if (empty($tail)) {
//            if ($node->val == 6) {
//                echo print_r($head, true);
//            }
            $node->prefix = $head->val;
            $tail = $node;
            $tail->next   = null;
            $head->next   = $tail;
        } else {
            $tail->next   = $node;
            $node->prefix = $tail->val;
            $tail = $node;
        }
    }
}
create($node1,$head, $tail);
create($node2,$head, $tail);
create($node3,$head, $tail);
create($node4,$head, $tail);
echo print_r($head, true);
echo "///////////////////////////////////\n";
//echo print_r($tail, true);