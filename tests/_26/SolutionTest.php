<?php

namespace Tests\_26;

use App\_26\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param array $data
     * @param int $result
     *
     * @dataProvider dataProvide
     */
    public function test(array $data, int $result): void
    {
        $solution = new Solution();
        self::assertSame($solution->removeDuplicates($data), $result);
    }

    public function dataProvide()
    {
        return [
            [[1, 1, 2], 2],
            [[0, 0, 1, 1, 1, 2, 2, 3, 3, 4], 5],
        ];
    }
}