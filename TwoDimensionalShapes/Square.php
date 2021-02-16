<?php

use JetBrains\PhpStorm\Pure;

require_once 'Rectangle.php';


class Square extends Rectangle
{
    #[Pure] function __construct($side) {
        parent::__construct($side, $side);
    }
}
