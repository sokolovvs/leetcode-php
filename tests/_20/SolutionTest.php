<?php

namespace Tests\_20;

use App\_20\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param string $data
     * @param boolean $result
     *
     * @dataProvider dataProvide
     */
    public function test(string $data, bool $result) {
        $solution = new Solution();
        self::assertSame($solution->isValid($data), $result);
    }

    public function dataProvide()
    {
        return [
            ["()", true],
            ["()[]{}", true],
            ["(]", false],
            ["([)]", false],
            ["{[]}", true],
        ];
    }
}