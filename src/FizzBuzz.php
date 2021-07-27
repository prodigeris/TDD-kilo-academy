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

        if($this->isDivisibleBy($number, 3) || $this->doesNumberContain($number, '3')) {
            $result .= self::FIZZ;
        }

        if($this->isDivisibleBy($number, 5)) {
            $result .= self::BUZZ;
        }

        if($this->isNotDivisible($result)) {
            $result .= $number;
        }

        return $result;
    }

    private function doesNumberContain(int $number, string $what): bool
    {
        return strpos((string)$number, $what) !== false;
    }

    private function isDivisibleBy(int $number, int $what): bool
    {
        return $number % $what === 0;
    }

    private function isNotDivisible(string $result): bool
    {
        return $result === '';
    }
}
