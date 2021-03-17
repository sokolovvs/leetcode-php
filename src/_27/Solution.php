<?php

namespace App\_27;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        $qty = count($nums);
        $index = 0;

        while ($index < $qty) {
            if ($nums[$index] === $val) {
                unset($nums[$index]);
            }

            $index++;
        }

        return count($nums);
    }
}