<?php

namespace App\_26;

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $qty = count($nums);

        $previousIndex = 0;
        $nextIndex = 1;

        while ($nextIndex < $qty) {
            if ($nums[$previousIndex] === $nums[$nextIndex]) {
                unset($nums[$nextIndex]);
            } else {
                $previousIndex = $nextIndex;
            }

            $nextIndex++;
        }

        return count($nums);
    }
}