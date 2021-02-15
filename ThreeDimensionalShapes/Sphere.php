<?php

require_once __DIR__."/../GeometricFigures/ThreeDimensionalShape.php";

use JetBrains\PhpStorm\Pure;

class Sphere implements ThreeDimensionalShape {
    private int|float $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    #[Pure] function getVolume(): int|float {
        return 4 * pi() * pow($this->radius,3)/3;
    }

    #[Pure] function getSurfaceArea(): int|float {
        return 4 * pi() * pow($this->radius,2);
    }
}
