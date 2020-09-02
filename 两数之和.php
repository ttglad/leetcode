<?php

/**
 *
给定一个整数数组 nums?和一个目标值 target，请你在该数组中找出和为目标值的那?两个?整数，并返回他们的数组下标。

你可以假设每种输入只会对应一个答案。但是，数组中同一个元素不能使用两遍。


示例:

给定 nums = [2, 7, 11, 15], target = 9

因为 nums[0] + nums[1] = 2 + 7 = 9
所以返回 [0, 1]
 *
 *
 */


/**
 * @param $nums
 * @param $target
 *
 * 解题思路
 * 1、暴力破解 - 不解释
 * 2、先把key - value 反转，然后利用key值是否存在来解题，注意事项，value会重复，需要判断相同的value是否为答案即可,
 *    判断时候要去除自身是否存在，例如
 */
function twoSum($nums, $target)
{
    $numArray = [];
    $return = [];
    foreach ($nums as $key => $_num) {
        if (key_exists($target - $_num, $numArray)) {
            $return = [$key, $numArray[$target - $_num]];
            sort($return);
            break;
        }
        $numArray[$_num] = $key;
    }

    return $return;
}

$array = [3, 2, 4];
$array = [3, 2, 3];

$data = twoSum($array, 6);

print_r($data);