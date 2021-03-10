<?php

namespace App\_35;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        if (max($nums) < $target) {
            return count($nums);
        }

        foreach ($nums as $k => $v) {
            if ($target < $v || $target === $v) {
                return $k;
            }
        }
    }
}