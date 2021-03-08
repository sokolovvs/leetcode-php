<?php

namespace Tests\_152;

use App\_152\Solution;
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
        $this->assertSame($solution->maxProduct($data), $result);
    }

    public function dataProvide()
    {
        return [
            [[2, 3, -2, 4], 6],
            [[-2, 0, -1], 0]
        ];
    }
}