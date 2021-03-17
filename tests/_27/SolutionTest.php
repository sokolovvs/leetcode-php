<?php

namespace Tests\_27;

use App\_27\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param array $data
     * @param int $item
     * @param int $result
     *
     * @dataProvider dataProvide
     */
    public function test(array $data, int $item, int $result): void
    {
        $solution = new Solution();
        self::assertSame($solution->removeElement($data, $item), $result);
    }

    public function dataProvide()
    {
        return [
            [[3, 2, 2, 3], 3, 2],
            [[0, 1, 2, 2, 3, 0, 4, 2], 2, 5],
        ];
    }
}