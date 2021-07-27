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

        return (string) $number;
    }
}
