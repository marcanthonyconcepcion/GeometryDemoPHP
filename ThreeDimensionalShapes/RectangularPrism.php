<?php

use JetBrains\PhpStorm\Pure;

require_once __DIR__."/../TwoDimensionalShapes/Rectangle.php";
require_once __DIR__."/../ThreeDimensionalShapes/Prism.php";


class RectangularPrism extends Prism
{
    #[Pure] function __construct($length, $width, $height) {
        parent::__construct(new Rectangle($length, $width), $height);
    }
}
