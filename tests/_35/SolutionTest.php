<?php

namespace Tests\_35;

use App\_35\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider dataProvide
     *
     * @param array $nums
     * @param int $target
     * @param int $result
     */
    public function test(array $nums, int $target, int $result)
    {
        $solution = new Solution();
        self::assertSame($solution->searchInsert($nums, $target), $result);
    }

    public function dataProvide()
    {
        return [
            [[1, 3, 5, 6], 5, 2],
            [[1, 3, 5, 6], 2, 1],
            [[1, 3, 5, 6], 7, 4],
            [[1, 3, 5, 6], 0, 0],
            [[1], 0, 0],
        ];
    }
}