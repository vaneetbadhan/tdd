<?php

namespace Tests\Unit\ArithmeticHelper;

use App\Helpers\Math\ArithmeticHelper;
use PHPUnit\Framework\TestCase;

class ArithmeticHelperMultiplyTest extends TestCase
{
    public function test_multiply_can_multiply_numbers()
    {
        $num1 = 5;
        $num2 = 10;
        $mult = $num1 * $num2;

        $result = ArithmeticHelper::multiply($num1, $num2);

        $this->assertSame($mult, $result, 'Does not multiply numbers correctly.');
    }
	
    public function test_multiply_can_take_in_multiple_numbers()
    {
        $num1 = 5;
        $num2 = 10;
        $num3 = 120;
        $mult = $num1 * $num2 * $num3;

        $result = ArithmeticHelper::multiply($num1, $num2, $num3);

        $this->assertSame($mult, $result, "Multiply does not work when has multiple arguments");
    }

    public function test_multiply_cannot_take_in_string_arguments()
    {
        $this->expectException(\InvalidArgumentException::class);

        $result = ArithmeticHelper::multiply("abc");
    }

    

    public function test_multiply_cannot_take_in_null_argument()
    {
        $this->expectException(\InvalidArgumentException::class);
        $result = ArithmeticHelper::multiply(null);
    }

    public function test_multiply_needs_at_least_one_argument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $result = ArithmeticHelper::multiply();

    }
}