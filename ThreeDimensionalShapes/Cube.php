<?php

use JetBrains\PhpStorm\Pure;

require_once __DIR__."/../ThreeDimensionalShapes/RectangularPrism.php";


class Cube extends RectangularPrism
{
    #[Pure] function __construct($side) {
        parent::__construct($side, $side, $side);
    }
}
