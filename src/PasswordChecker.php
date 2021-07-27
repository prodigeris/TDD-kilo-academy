<?php

declare(strict_types=1);

namespace TDD;

use TDD\Exception\NoDigitInPasswordException;
use TDD\Exception\NoLetterInPasswordException;
use TDD\Exception\TooShortPasswordException;

class PasswordChecker
{
    private const MIN_LENGTH = 7;

    public function validate(string $string): void
    {
        if($this->notContainsDigit($string)) {
            throw new NoDigitInPasswordException();
        }
        if($this->notContainsLetter($string)) {
            throw new NoLetterInPasswordException();
        }
        if($this->shortenThanMin($string)) {
            throw new TooShortPasswordException();
        }
    }

    private function containsLetter(string $string): int|false
    {
        return preg_match('/[a-zA-Z]/', $string);
    }

    private function notContainsLetter(string $string): bool
    {
        return ! $this->containsLetter($string);
    }

    private function containsDigit(string $string): int|false
    {
        return preg_match('/\d/', $string);
    }

    private function notContainsDigit(string $string): bool
    {
        return !$this->containsDigit($string);
    }

    private function shortenThanMin(string $string): bool
    {
        return strlen($string) < self::MIN_LENGTH;
    }
}
