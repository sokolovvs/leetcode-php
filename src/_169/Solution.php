<?php

namespace App\_169;

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums)
    {
        $quantities = array_count_values($nums);

        $max = 0;
        $currentNumber = null;

        foreach ($quantities as $num => $qty) {
            if ($max < $qty) {
                $max = $qty;
                $currentNumber = $num;
            }
        }

        return $currentNumber;
    }
}