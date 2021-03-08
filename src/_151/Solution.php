<?php

namespace App\_151;

class Solution
{

    /**
     * @param string $str
     * @return String
     */
    function reverseWords($str)
    {
        $str = trim($str);
        $str = $this->stripSpace($str);
        $words = explode(' ', $str);

        return implode(' ', array_reverse($words));
    }

    public function stripSpace(string $string): string
    {
        return preg_replace('/\s+/', ' ', $string);
    }
}