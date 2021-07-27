<?php

declare(strict_types=1);

namespace TDD;

class FizzBuzz
{
    public function execute(int $number): string
    {
        if($number === 3) {
            return 'Fizz';
        }

        if($number === 5) {
            return 'Buzz';
        }

        return (string) $number;
    }
}
