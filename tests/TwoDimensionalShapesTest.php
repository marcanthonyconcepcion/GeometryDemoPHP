<?php

require_once __DIR__."/../GeometricFigures.php";
require_once __DIR__."/../TwoDimensionalShapes/Circle.php";
require_once __DIR__."/../TwoDimensionalShapes/Rectangle.php";
require_once __DIR__."/../TwoDimensionalShapes/Square.php";
require_once __DIR__."/../TwoDimensionalShapes/Triangle.php";

use PHPUnit\Framework\TestCase;


class TwoDimensionalShapesTest extends TestCase
{
    private TwoDimensionalShape $dut;

    protected function tearDown() : void {
        unset($this->dut);
    }

    function testRectangle() {
        $length = 10.458;
        $width = 20.56;

        $expected_area = $length * $width;
        $expected_perimeter = 2 * $length + 2 * $width;

        $this->dut = new Rectangle($length, $width);

        $this->assertEquals($expected_area, $this->dut->GetArea());
        $this->assertEquals($expected_perimeter, $this->dut->GetPerimeter());
    }

    function testSquare() {
        $side = 10.34;

        $expected_area = pow($side, 2);
        $expected_perimeter = 4 * $side;

        $this->dut = new Square($side);

        $this->assertEquals($expected_area, $this->dut->GetArea());
        $this->assertEquals($expected_perimeter, $this->dut->GetPerimeter());
    }

    function testCircle() {
        $radius = 10.45;

        $expected_area = pi() * pow($radius,2);
        $expected_perimeter = 2 * pi() * $radius;

        $this->dut = new Circle($radius);

        $this->assertEquals($expected_area, $this->dut->GetArea());
        $this->assertEquals($expected_perimeter, $this->dut->GetPerimeter());
    }

    function testTriangle() {
        $first_side = 70;
        $second_side = 100.34;
        $third_side = 50;

        $half_perimeter = ($first_side + $second_side + $third_side)/2;
        $expected_area = sqrt($half_perimeter * ($half_perimeter - $first_side) * ($half_perimeter - $second_side)
            * ($half_perimeter - $third_side));
        $expected_perimeter = intval($first_side + $second_side + $third_side);

        $this->dut = new Triangle($first_side, $second_side, $third_side);
        $this->assertEquals($expected_area, $this->dut->getArea());
        $this->assertEquals($expected_perimeter, $this->dut->getPerimeter());
    }

    function testInvalidTriangle() {
        $first_side = 10;
        $second_side = 20;
        $third_side = 30;
        $this->expectException(InvalidTriangleError::class);
        $this->dut = new Triangle($first_side, $second_side, $third_side);
    }
}
