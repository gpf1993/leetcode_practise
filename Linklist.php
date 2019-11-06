<?php
//单个节点

class node {
    //初始化变量,包括存储的内容 和 下一个数据的指针
    public $id = 0;
    public $data = '';
    public $next = null;
    //构造函数,设置存储内容的数据
    public function __construct($id,$nodedata) {
        $this->id = $id;
        $this->data = $nodedata;
    }
}

class singleLink
{
    public $head = '';
    public $size = 0;

    public function insert($id, $value, $prenodeid = 0) {
        $node = new node($id, $value);
        //空链表,直接添加
        if ($this->size == 0) {
            $this->head = $node;
        } elseif ($prenodeid == 0) {
            $node->next = $this->head;
            $this->head = $node;
        } else {
            $cruntnode = $this->head;
            while ($cruntnode->next != null) {
                if ($cruntnode->next->id == $prenodeid) {
                    $node->next = $cruntnode->next;
                    $cruntnode->next = $node;
                    break;
                }
                $cruntnode = $cruntnode->next;
            }
        }
        $this->size++;
        return $this;
    }
}
$linklist = new singleLink();

$linklist->insert(1,'hello');

$linklist->insert(2,'my');

$linklist->insert(3,'love');

$linklist->insert(4,'haha4');

$linklist->insert(5,'haha5');

$linklist->insert(6,'haha6');

$linklist->insert(7,'haha7');



$linklist->delete(5);

$linklist->insert(8,'haha8')->insert(9,'haha9')->insert(10,'haha10')->insert(11,'haha11');

var_dump($linklist);