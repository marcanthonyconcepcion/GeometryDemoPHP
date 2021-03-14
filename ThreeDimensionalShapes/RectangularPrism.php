<?php

require_once __DIR__."/../TwoDimensionalShapes/Rectangle.php";
require_once "Prism.php";


class RectangularPrism extends Prism
{
    function __construct($length, $width, $height) {
        parent::__construct(new Rectangle($length, $width), $height);
    }
}
