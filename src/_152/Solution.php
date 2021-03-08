<?php

namespace App\_152;

class Solution
{
    function maxProduct($nums)
    {
        $global_max = max($nums);
        $local_min= 1; $local_max = 1;
        
        foreach ($nums as $n) {
            $tmp1 = $n * $local_min;
            $tmp2 = $n * $local_max;
            $local_min = min($tmp1, $tmp2, $n);
            $local_max = max($tmp1, $tmp2, $n);
            $global_max = max($global_max, $local_max);
        }

        return $global_max;
    }
}