<?php

namespace App\_20;

class Solution
{
    private const PAIRS = [
        '{' => '}',
        '[' => ']',
        '(' => ')',
    ];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = [];

        foreach ($this->toArray($s) as $ch) {
            if ($ch === '{' || $ch === '[' || $ch === '(') {
                $stack[] = $ch;
            } elseif ($ch === '}' || $ch === ']' || $ch === ')') {
                $lastEl = $stack[count($stack) - 1] ?? null;

                if ($lastEl) {
                    if ((self::PAIRS[$lastEl] ?? null) !== $ch) {
                        return false;
                    }

                    array_pop($stack);
                } else {
                    return false;
                }
            }
        }

        return empty($stack);
    }

    private function toArray(string $str): array
    {
        return preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
    }
}