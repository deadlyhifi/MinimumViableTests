<?php

namespace MVT\Test;

use MVT\FizzBuzz;

class FizzBuzzTest extends TestAbstract
{
    public function test_handles_non_integers_correctly()
    {
        $fizzBuzz = new FizzBuzz();
        $collection = ['A', '1', 'B', 'C', '1234'];

        $this->setExpectedException('Exception', 'All integers please.');

        $fizzBuzz->process($collection);
    }

    /**
     * @dataProvider collectionDataProvider
     */
    public function test_handles_fizz_correctly($collection, $expected)
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->process($collection);

        $this->assertEquals($expected, $result, 'FizzBuzz did not handle Fizz values correctly.');
    }

    /**
     * @dataProvider collectionDataProvider
     */
    public function test_handles_buzz_correctly($collection, $expected)
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->process($collection);

        $this->assertEquals($expected, $result, 'FizzBuzz did not handle Buzz values correctly.');
    }

    /**
     * @dataProvider collectionDataProvider
     */
    public function test_handles_fizzbuzz_correctly($collection, $expected)
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->process($collection);

        $this->assertEquals($expected, $result, 'FizzBuzz did not handle FizzBuzz values correctly.');
    }

    public function collectionDataProvider()
    {
        return [
            [
                [1, 2, 5, 7, 10],
                [1, 2, 'Buzz', 7, 'Buzz']
            ],
            [
                [1, 2, 5, 7, 10],
                [1, 2, 'Buzz', 7, 'Buzz']
            ],
            [
                [14, 15, 30, 31, 45],
                [14, 'FizzBuzz', 'FizzBuzz', 31, 'FizzBuzz']
            ]
        ];
    }
}
