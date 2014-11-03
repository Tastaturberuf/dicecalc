<?php
namespace DiceCalc\Tests\CalcOperation;

use DiceCalc\CalcOperation;

class LessThanTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider dataForLessThan
     *
     * @param $num1
     * @param $num2
     * @param $expected
     */
    public function testLessThan($num1, $num2, $expected)
    {
        $actual = CalcOperation::lessthan($num1, $num2);

        $this->assertSame($expected, $actual);
    }

    public function dataForLessThan()
    {
        return [
            [1, 2, true],
            ['1', 2, true],
            [1, '2', true],
            ['1', '2', true],
            ['a1', 2, false],
            [1, 'a2', false],
            ['a1', 'a2', false],
        ];
    }
}
