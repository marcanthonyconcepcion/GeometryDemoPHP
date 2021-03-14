<?php


interface ThreeDimensionalShape
{
    function getVolume();
    function getSurfaceArea();
}

interface TwoDimensionalShape
{
    function getArea();
    function getPerimeter();
}
