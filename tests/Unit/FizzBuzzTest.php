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
        ];
    }

    //  1 - 1
    //  2 - 2
    //  3 - Fizz
    //  4 - 4
    //  5 - Buzz
    //  6 - Fizz
    // 7 - 7
    // 8 - 8
    // 9 - Fizz


    /**
     * @dataProvider fizzBuzzDataProvider
     */
    public function test_should_return_result_according_to_data_set(int $number, string $expected): void
    {
        $actual = $this->fizzBuzz->execute($number);

        self::assertSame($expected, $actual);
    }
}
