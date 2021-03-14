<?php

require_once __DIR__ . '/../GeometricFigures.php';


class Triangle implements TwoDimensionalShape
{
    public int|float $a, $b, $c;

    function __construct(int|float $a, int|float $b, int|float $c) {
        if (($a + $b > $c && $a + $c > $b && $a + $c > $b) === false) {
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
