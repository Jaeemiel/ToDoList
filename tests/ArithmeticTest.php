<?php

namespace tests;

class ArithmeticTest extends \PHPUnit\Framework\TestCase
{
//    /**
//     * @dataProvider zeroValuesProvider
//     */
//    public function testEqualZero($num)
//    {
//
//        $this->assertEquals(0, $num);
//    }

    public function testEqualZero()
    {
        $num = 0;
        $this->assertEquals(0, $num);
    }

//    public static function zeroValuesProvider(): array
//    {
//        return [
//            [1],
//            [2],
//            [0],
//        ];
//    }


}