<?php

namespace App\_125;

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        $str = $this->preprocessStr($s);
        $arr = $this->toArray($str);
        $reversedArray = array_reverse($arr);

        return $arr === $reversedArray;
    }

    private function preprocessStr(string $s): string
    {
        $s = preg_replace('/(\W+)/', '', strtolower($s));

        return preg_replace('/[-_]/', '', $s);
    }

    private function toArray(string $str): array
    {
        return preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
    }
}