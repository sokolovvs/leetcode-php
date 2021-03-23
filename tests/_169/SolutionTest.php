<?php

namespace Tests\_169;

use App\_169\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param array $data
     * @param int $result
     *
     * @dataProvider dataProvide
     */
    public function test(array $data, int $result)
    {
        $solution = new Solution();
        self::assertSame($solution->majorityElement($data), $result);
    }

    public function dataProvide()
    {
        return [
            [[3, 2, 3], 3],
            [[2, 2, 1, 1, 1, 2, 2], 2]
        ];
    }
}