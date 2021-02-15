<?php

use JetBrains\PhpStorm\Pure;

require_once __DIR__ . '/../GeometricFigures/TwoDimensionalShape.php';

class Circle implements TwoDimensionalShape {
    private int|float $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    #[Pure] function getArea(): int|float {
        return pi() * pow($this->radius,2);
    }

    #[Pure] function getPerimeter(): int|float {
        return 2 * pi() * $this->radius;
    }
}
