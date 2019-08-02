<?php
/**
 * Created by PhpStorm.
 * User: liyaohui
 * Date: 2019/7/30
 * Time: 15:35
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        // 字符串处理
        // if ($x >= 0) {
        //     $flag = 1;
        // } else {
        //     $flag = -1;
        //     $x = -$x;
        // }
        // $strArr = array_reverse(str_split(strval($x)));
        // $num = $flag * implode($strArr);
        $num = 0;

        while($x != 0) {
            $pop = $x % 10; // 取出当前最后一位
            $x = intval($x / 10); // 去掉最后一位
            $num = $num * 10 + $pop;
            if ($num < -2147483648 || $num > 2147483647) return 0;
        }
        // if ($num < -2147483648 || $num > 2147483647) return 0;
        return $num;
    }
}