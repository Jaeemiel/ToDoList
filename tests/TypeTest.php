<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;

class TypeTest extends \PHPUnit\Framework\TestCase
{

    #[DataProvider('numberValuesProvider')]
    public function testNumber($value)
    {
        $this->assertTrue(is_int($value) || is_float($value));
    }

    public static function numberValuesProvider(): array
    {
        return [
            [1],
//            ["2"],
            [0.3],
        ];
    }


    #[DataProvider('stringValuesProvider')]
    public function testString($value)
    {
        $this->assertIsString($value);
    }

    public static function stringValuesProvider(): array
    {
        return [
//            [1],
            ["2"],
        ];
    }

//    public function testString()
//    {
//        $value = "ahaha";
//        $this->assertIsString($value);
//    }


}