<?php

namespace Tests\_125;

use App\_125\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param string $data
     * @param bool $result
     *
     * @dataProvider dataProvide
     */
    public function test(string $data, bool $result)
    {
        $solution = new Solution();
        self::assertSame($solution->isPalindrome($data), $result);
    }

    public function dataProvide()
    {
        return [
            ["A man, a plan, a canal: Panama", true],
            ["race a car", false],
            ["ab_a", true],
        ];
    }
}