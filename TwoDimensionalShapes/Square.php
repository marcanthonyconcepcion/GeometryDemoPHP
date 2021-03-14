<?php

require_once 'Rectangle.php';


class Square extends Rectangle
{
    function __construct(int|float $side) {
        parent::__construct($side, $side);
    }
}
