<?php
/**
 * Created by PhpStorm.
 * User: liyaohui
 * Date: 2019/7/30
 * Time: 16:58
 */
class MinStack {
    private $stack = [];
    private $minStack = [];
    private $count = 0;
    /**
     * initialize your data structure here.
     */
    function __construct() {

    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        //array_push($this->stack, $x);
        $this->stack[] = $x;
        if ($this->minStack) {
            $min = $this->minStack[$this->count-1];
            $this->minStack[] = $min > $x ? $x : $min;
        } else {
            $this->minStack[] = $x;
        }
        $this->count++;
    }

    /**
     * @return NULL
     */
    function pop() {
        array_pop($this->stack);
        array_pop($this->minStack);
        $this->count--;
    }

    /**
     * @return Integer
     */
    function top() {
        return $this->stack[$this->count-1];
    }

    /**
     * @return Integer
     */
    function getMin() {
        return $this->minStack[$this->count-1];
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */