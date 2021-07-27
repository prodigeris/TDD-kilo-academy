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

    public function fizzBuzzDataProvider(): array
    {
        return [
            'number_1' => [
                1, '1'
            ],
            'number_2' => [
                2, '2'
            ],
            'number_3' => [
                3, 'Fizz'
            ],
            'number_4' => [
                4, '4'
            ],
            'number_5' => [
                5, 'Buzz'
            ],
            'number_6' => [
                6, 'Fizz'
            ],
            'number_9' => [
                9, 'Fizz'
            ],
            'number_10' => [
                10, 'Buzz'
            ],
            'number_15' => [
                15, 'FizzBuzz'
            ],
            'number_20' => [
                20, 'Buzz'
            ],
            'number_100' => [
                100, 'Buzz'
            ],
            'number_300' => [
                300, 'FizzBuzz'
            ],
            'number_13' => [
                13, 'Fizz'
            ],
            'number_551' => [
                551, 'Buzz'
            ],
        ];
    }

    // 13 - Fizz
    // 31 - Fizz
    // 551 - Buzz
    /**
     * @dataProvider fizzBuzzDataProvider
     */
    public function test_should_return_result_according_to_data_set(int $number, string $expected): void
    {
        $actual = $this->fizzBuzz->execute($number);

        self::assertSame($expected, $actual);
    }
}
