<?php

declare(strict_types=1);

namespace TDD;

class FizzBuzz
{
    private const FIZZ = 'Fizz';

    private const BUZZ = 'Buzz';

    public function execute(int $number): string
    {
        $result = '';

        if($number % 3 === 0) {
            $result .= self::FIZZ;
        }

        if($number % 5 === 0) {
            $result .= self::BUZZ;
        }

        if($result === '') {
            $result .= $number;
        }

        return $result;
    }
}
