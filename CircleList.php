<?php

class LNode {
    public $data;
    public $next;
}


class LinkListUtil {
    //当单链表中没有环时返回null，有环时返回环的入口结点
    public static function searchEntranceNode ($L) {
        $slow = $L; //p表示从头结点开始每次往后走一步的指针
        $fast = $L; //q表示从头结点开始每次往后走两步的指针
        while($fast != null && $fast->next !=null) {
            if($slow == $fast) break;//p与q相等，单链表有环
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
         if($fast == null || $fast->next==null) return null;
        // 重新遍历，寻找环的入口点
        $slow = $L;
        while($slow != $fast)  {
            $slow = $slow->next;
            $fast = $fast->next;
        }
        return $slow;
    }
}


function selectSort ($arr) {
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        $minIndex = $i;
        for ($j=$i+1; $j < $length; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
}

function quickSort ($arr) {
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    $flag  = $arr[0];
    $left  = [];
    $right = [];
    for ($i = 0; $i < $length; $i++) {
        if ($arr[$i] < $flag) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $left  = quick_sort($left);
    $right = quick_sort($right);
    return array_merge($left, [$flag], $right);
}
