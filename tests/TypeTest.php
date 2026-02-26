<?php

namespace tests;

class TypeTest extends \PHPUnit\Framework\TestCase
{
//    /**
//     * @dataProvider intValuesProvider
//     */
//    public function testInt($value)
//    {
//        $this->assertIsInt($value);
//    }
//
//    public static function intValuesProvider(): array
//    {
//        return [
//            [1],
////            ["2"],
////            [0.3],
//        ];
//    }

//    /**
//     * @dataProvider stringValuesProvider
//     */
//    public function testString($value)
//    {
//        $this->assertIsInt($value);
//    }
//
//    public static function stringValuesProvider(): array
//    {
//        return [
////            [1],
//            ["2"],
//        ];
//    }

    public function testString()
    {
        $value = "ahaha";
        $this->assertIsString($value);
    }


}