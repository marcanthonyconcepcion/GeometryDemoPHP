<?php

require_once __DIR__."/../GeometricFigures.php";
require_once __DIR__."/../GeometricFigures.php";
require_once __DIR__."/../ThreeDimensionalShapes/Prism.php";
require_once __DIR__."/../ThreeDimensionalShapes/RectangularPrism.php";
require_once __DIR__."/../ThreeDimensionalShapes/Sphere.php";
require_once __DIR__."/../ThreeDimensionalShapes/Cylinder.php";
require_once __DIR__."/../ThreeDimensionalShapes/TriangularPrism.php";
require_once __DIR__."/../ThreeDimensionalShapes/Cube.php";

use PHPUnit\Framework\TestCase;


class ThreeDimensionalShapesTest extends TestCase
{
    private ThreeDimensionalShape $dut;

    protected function tearDown() : void {
        unset($this->dut);
    }

    function testPrism() {
        $length = 40;
        $width = 50.35;
        $height = 60;
        $base_rectangle_area = $length * $width;
        $base_rectangle_perimeter = 2 * ($length + $width);
        $mock_base_shape = $this->createMock(TwoDimensionalShape::class);
        $mock_base_shape->method('getArea')->willReturn($base_rectangle_area);
        $mock_base_shape->method('getPerimeter')->willReturn($base_rectangle_perimeter);
        $expected_volume = $height*$base_rectangle_area;
        $expected_surface_area = 2*$base_rectangle_area + $height*$base_rectangle_perimeter;
        $this->dut = new Prism($mock_base_shape, $height);
        $this->assertEquals($expected_volume, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area, $this->dut->getSurfaceArea());
    }

    function testRectangularPrism() {
        $length = 10.67;
        $width = 20;
        $height = 30.35;
        $base_rectangle_area = $length * $width;
        $base_rectangle_perimeter = 2*($length + $width);
        $expected_volume = $height * $base_rectangle_area;
        $expected_surface_area = 2 * $base_rectangle_area + $height * $base_rectangle_perimeter;
        $this->dut = new RectangularPrism($length, $width, $height);
        $this->assertEquals($expected_volume, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area, $this->dut->getSurfaceArea());
    }

    function testSphere() {
        $radius = 10.34;
        $expected_volume = 4*pi()*pow($radius, 3)/3;
        $expected_surface_area = 4*pi()*pow($radius,2);
        $this->dut = new Sphere($radius);
        $this->assertEquals($expected_volume, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area, $this->dut->getSurfaceArea());
    }

    function testCylinder() {
        $radius = 10;
        $height = 30.34;
        $base_circle_area = pi() * pow($radius,2);
        $base_circle_perimeter = 2 * pi() * $radius;
        $expected_volume = $height * $base_circle_area;
        $expected_surface_area = 2 * $base_circle_area + $height * $base_circle_perimeter;
        $this->dut = new Cylinder($height, $radius);
        $this->assertEquals($expected_volume, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area, $this->dut->getSurfaceArea());
        $expected_volume_direct = pi() *  pow($radius, 2) * $height;
        $expected_surface_area_direct = 2 * pi() * $radius * $height + 2 * pi() * pow($radius, 2);
        $this->assertEquals($expected_volume_direct, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area_direct, $this->dut->getSurfaceArea());
    }

    function testTriangularPrism() {
        $a = 20;
        $b = 30.34;
        $c = 40;
        $prism_height = 30;
        $base_triangle_perimeter = $a + $b + $c;
        $base_triangle_half_perimeter = $base_triangle_perimeter/2;
        $base_triangle_area = sqrt($base_triangle_half_perimeter * ($base_triangle_half_perimeter-$a) *
            ($base_triangle_half_perimeter-$b) * ($base_triangle_half_perimeter-$c));
        $expected_volume = $prism_height * $base_triangle_area;
        $expected_surface_area = 2 * $base_triangle_area + $prism_height * $base_triangle_perimeter;
        $this->dut = new TriangularPrism($prism_height, $a, $b, $c);
        $this->assertEquals($expected_volume, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area, $this->dut->getSurfaceArea());
    }

    function testCube() {
        $side = 10.34;
        $base_square_area = pow($side, 2);
        $base_square_perimeter = 4 * $side;
        $expected_volume = $side * $base_square_area;
        $expected_surface_area = 2 * $base_square_area + $side * $base_square_perimeter;
        $this->dut = new Cube($side);
        $this->assertEquals($expected_volume, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area, $this->dut->getSurfaceArea());
        $expected_volume_direct = pow($side, 3);
        $expected_surface_area_direct = 6 * pow($side, 2);
        $this->assertEquals($expected_volume_direct, $this->dut->getVolume());
        $this->assertEquals($expected_surface_area_direct, $this->dut->getSurfaceArea());
    }
}
