<?php

namespace Tests\_14;

use App\_14\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param array $data
     * @param string $result
     *
     * @dataProvider dataProvide
     */
    public function test(array $data, string $result) {
        $solution = new Solution();
        $this->assertSame($solution->longestCommonPrefix($data), $result);
    }

    public function dataProvide()
    {
        return [
            [["flower","flow","flight"], "fl"],
            [["ab","a",], "a"],
        ];
    }
}