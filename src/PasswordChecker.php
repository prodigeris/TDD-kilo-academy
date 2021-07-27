<?php

declare(strict_types=1);

namespace TDD;

use TDD\Exception\NoLetterInPasswordException;
use TDD\Exception\TooShortPasswordException;

class PasswordChecker
{
    public function validate(string $string): void
    {
        if($this->notContainsLetter($string)) {
            throw new NoLetterInPasswordException();
        }
        throw new TooShortPasswordException();
    }

    private function containsLetter(string $string): int|false
    {
        return preg_match('/[a-zA-Z]/', $string);
    }

    private function notContainsLetter(string $string): bool
    {
        return ! $this->containsLetter($string);
    }
}
