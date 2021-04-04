<?php

require_once 'GeometricFigures.php';


class Circle implements TwoDimensionalShape
{
    private int|float $radius;
    
    function __construct(int|float $radius) {
        $this->radius = $radius;
    }
    
    function getArea() {
        return pi() * pow($this->radius,2);
    }
    
    function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}


class Rectangle implements TwoDimensionalShape
{
    private int|float $length;
    private int|float $width;
    
    function __construct(int|float $length, int|float $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function getArea() {
        return $this->length * $this->width;
    }
    
    public function getPerimeter() {
        return 2*($this->length + $this->width);
    }
}


class Square extends Rectangle
{
    function __construct(int|float $side) {
        parent::__construct($side, $side);
    }
}


class Triangle implements TwoDimensionalShape
{
    public int|float $a, $b, $c;
    
    function __construct(int|float $a, int|float $b, int|float $c) {
        if (($a + $b > $c && $a + $c > $b && $b + $c > $a) === false) {
            throw new InvalidTriangleError("NOT A TRIANGLE. Please provide valid triangle sides.");
        }
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    function getArea() {
        $half_perimeter = 0.5 * $this->getPerimeter();
        return sqrt($half_perimeter * ($half_perimeter - $this->a) * ($half_perimeter - $this->b) *
            ($half_perimeter - $this->c));
    }
    
    function getPerimeter() {
        return $this->a + $this->b + $this->c;
    }
}

class InvalidTriangleError extends Exception { }
