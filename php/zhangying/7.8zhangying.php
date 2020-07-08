<?php 
/*
|2020.7.8| [11.盛最多水的容器](https://leetcode-cn.com/problems/container-with-most-water/)|[张颖]
*/
class Solution {
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        //双指针
        $length = count($height);
        $left = 0; //key
        $right = $length - 1; //从0开始，长度-1
        $max = 0; //定义最大值
        while($left < $right) { //不是一个的情况下
            $max = max($max,min($height[$left],$height[$right])*($right-$left)); 
            if($height[$left] <= $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        return $max;

    }
}
/*
|2020.7.8| [283. 移动零](https://leetcode-cn.com/problems/move-zeroes/)|[张颖]
*/


?>
