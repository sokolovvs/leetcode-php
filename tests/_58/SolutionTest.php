<?php

namespace Tests\_58;

use App\_58\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider dataProvide
     *
     * @param string $str
     * @param int $result
     */
    public function test(string $str, int $result)
    {
        $solution = new Solution();
        self::assertSame($solution->lengthOfLastWord($str), $result);
    }

    public function dataProvide()
    {
        return [
            ["Hello World", 5],
            [" ", 0],
            ["a ", 1],
        ];
    }
}