<?php

namespace Tests\_151;

use App\_151\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param string $data
     * @param string $result
     *
     * @dataProvider dataProvide
     */
    public function test(string $data, string $result)
    {
        $solution = new Solution();
        $this->assertSame($solution->reverseWords($data), $result);
    }

    public function dataProvide()
    {
        return [
            ["the sky is blue", "blue is sky the"],
            ["  hello world  ", "world hello"],
            ['a good   example', "example good a"],
            ["  Bob    Loves  Alice   ", "Alice Loves Bob"],
            ["Alice does not even like bob", "bob like even not does Alice"],
        ];
    }
}