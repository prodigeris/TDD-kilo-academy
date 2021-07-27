<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TDD\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_should_initialize_fizz_buzz_class(): void
    {
        $this->assertInstanceOf(FizzBuzz::class, $this->fizzBuzz);
    }


}
