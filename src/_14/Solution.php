<?php

namespace App\_14;

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $lengths = [];

        foreach ($strs as $str) {
            $lengths[] = strlen($str);
        }

        $minLength = min($lengths);
        $countStrs = count($strs);

        if ($countStrs === 1) {
            return $strs[0];
        }

        if ($countStrs === 0) {
            return "";
        }

        $matchCount = 0;
        $flag = true;

        for ($i = 0; $i < $minLength; $i++) {
            foreach ($strs as $k => $str) {

                if ($strs[$k + 1] ?? null) {
                    $flag &= $strs[$k + 1][$i] === $strs[$k][$i];
                }

                if (!$flag) {
                    break 2;
                }

                if ($k + 1 === count($strs)) {
                    ++$matchCount;
                }
            }
        }

        return substr($strs[0], 0, $matchCount);
    }
}