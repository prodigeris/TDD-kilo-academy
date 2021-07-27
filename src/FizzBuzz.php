<?php

declare(strict_types=1);

namespace TDD;

class FizzBuzz
{
    private const FIZZ = 'Fizz';

    private const BUZZ = 'Buzz';

    protected array $ruleMap = [3 => self::FIZZ, 5 => self::BUZZ];

    public function execute(int $number): string
    {
        $result = $this->iterateThroughRules($number);

        if($this->isEmpty($result)) {
            return (string) $number;
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

    private function isEmpty(string $result): bool
    {
        return $result === '';
    }

    private function isDivisibleOrContains(int $number, int $denominator): bool
    {
        return $this->isDivisibleBy($number, $denominator)
            || $this->doesNumberContain($number, (string)$denominator);
    }

    private function iterateThroughRules(int $number): string
    {
        $result = '';
        foreach ($this->ruleMap as $denominator => $text) {
            if ($this->isDivisibleOrContains($number, $denominator)) {
                $result .= $text;
            }
        }
        return $result;
    }
}
