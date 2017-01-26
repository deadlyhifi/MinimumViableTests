<?php

namespace MVT;

class FizzBuzz
{
    public function process($collection)
    {
        return array_map(function ($item) {
            if (! is_int($item)) {
                throw new \Exception("All integers please.");
            }

            $fizzbuzz = '';

            if ($item % 3 === 0) {
                $fizzbuzz .= 'Fizz';
            }

            if ($item % 5 === 0) {
                $fizzbuzz .= 'Buzz';
            }

            return $fizzbuzz !== '' ? $fizzbuzz : $item;
        }, $collection);
    }
}
