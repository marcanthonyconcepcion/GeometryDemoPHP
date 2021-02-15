<?php

use JetBrains\PhpStorm\Pure;

require_once __DIR__."/../TwoDimensionalShapes/Circle.php";
require_once __DIR__."/../ThreeDimensionalShapes/Prism.php";


class Cylinder extends Prism
{
    #[Pure] function __construct($height, $radius) {
        parent::__construct(new Circle($radius), $height);
    }
}
