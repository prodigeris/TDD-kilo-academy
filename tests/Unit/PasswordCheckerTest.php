<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TDD\Exception\NoDigitInPasswordException;
use TDD\Exception\NoLetterInPasswordException;
use TDD\Exception\TooShortPasswordException;
use TDD\PasswordChecker;

class PasswordCheckerTest extends TestCase
{
    private const PASSWORD_TOO_SHORT = 'a23456';

    private const PASSWORD_WO_LETTER = '1234567';

    private const PASSWORD_WO_DIGIT = 'abcdefghij';

    private const VALID_PASSWORD = 'ab2cdefgh5ij';

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
        $this->expectExceptionMessage(TooShortPasswordException::MESSAGE);

        $this->checker->validate(self::PASSWORD_TOO_SHORT);
    }

    /**
     * @test
     */
    public function should_throw_exception_when_password_does_not_contain_a_letter(): void
    {
        $this->expectException(NoLetterInPasswordException::class);
        $this->expectExceptionMessage(NoLetterInPasswordException::MESSAGE);

        $this->checker->validate(self::PASSWORD_WO_LETTER);
    }

    /**
     * @test
     */
    public function should_throw_exception_when_password_does_not_contain_a_digit(): void
    {
        $this->expectException(NoDigitInPasswordException::class);
        $this->expectExceptionMessage(NoDigitInPasswordException::MESSAGE);

        $this->checker->validate(self::PASSWORD_WO_DIGIT);
    }

    /**
     * @test
     */
    public function should_not_throw_exception_when_password_matches_the_rules(): void
    {
        $this->checker->validate(self::VALID_PASSWORD);

        $this->assertTrue(true);
    }
}
