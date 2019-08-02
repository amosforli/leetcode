<?php
/**
 * Created by PhpStorm.
 * User: liyaohui
 * Date: 2019/7/30
 * Time: 17:03
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0 || ($x > 0 && $x % 10 == 0)) {
            return false;
        }
        $num = 0;
        $temp = $x;
        while ($x != 0) {
            $pop = $x % 10;
            $x = intval($x / 10);
            $num = $num * 10 + $pop;
        }
        if ($num == $temp) return true;
        else return false;
    }
}