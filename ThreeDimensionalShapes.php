<?php 

require_once 'GeometricFigures.php';
require_once 'TwoDimensionalShapes.php';


class Prism implements ThreeDimensionalShape
{
    private int|float $height;
    private TwoDimensionalShape $base_shape;
    
    function __construct(TwoDimensionalShape $base_shape, int|float $height) {
        $this->height = $height;
        $this->base_shape = $base_shape;
    }
    
    function getVolume() {
        return $this->height * $this->base_shape->getArea();
    }
    
    function getSurfaceArea() {
        return 2 * $this->base_shape->getArea() + $this->height * $this->base_shape->getPerimeter();
    }
}


class Sphere implements ThreeDimensionalShape
{
    private int|float $radius;
    
    function __construct($radius) {
        $this->radius = $radius;
    }
    
    function getVolume() {
        return 4 * pi() * pow($this->radius,3)/3;
    }
    
    function getSurfaceArea() {
        return 4 * pi() * pow($this->radius,2);
    }
}


class RectangularPrism extends Prism
{
    function __construct($length, $width, $height) {
        parent::__construct(new Rectangle($length, $width), $height);
    }
}


class Cylinder extends Prism
{
    function __construct(int|float $height, int|float $radius) {
        parent::__construct(new Circle($radius), $height);
    }
}


class TriangularPrism extends Prism
{
    function __construct($height, $a, $b, $c) {
        parent::__construct(new Triangle($a, $b, $c), $height);
    }
}


class Cube extends RectangularPrism
{
    function __construct(int|float $side) {
        parent::__construct($side, $side, $side);
    }
}

