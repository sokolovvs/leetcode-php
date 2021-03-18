<?php

namespace App\_58;

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        $words = explode(' ', trim($s));

        return strlen(array_pop($words));
    }
}