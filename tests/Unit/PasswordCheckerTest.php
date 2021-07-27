<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TDD\Exception\NoLetterInPasswordException;
use TDD\Exception\TooShortPasswordException;
use TDD\PasswordChecker;

class PasswordCheckerTest extends TestCase
{
    private PasswordChecker $checker;

    protected function setUp(): void
    {
        $this->checker = new PasswordChecker();
    }

    /**
     * @test
     */
    public function should_initialize_password_checker_class(): void
    {
        $this->assertInstanceOf(PasswordChecker::class, $this->checker);
    }

    /**
     * @test
     */
    public function should_throw_exception_when_password_is_shorter_than_7_chars(): void
    {
        $this->expectException(TooShortPasswordException::class);
        $this->expectExceptionMessage(TooShortPasswordException::PASSWORD_CHECK_FAILED_TOO_SHORT);

        $this->checker->validate('a23456');
    }

    /**
     * @test
     */
    public function should_throw_exception_when_password_does_not_contain_a_letter(): void
    {
        $this->expectException(NoLetterInPasswordException::class);
        $this->expectExceptionMessage(NoLetterInPasswordException::MESSAGE);

        $this->checker->validate('1234567');
    }
}
