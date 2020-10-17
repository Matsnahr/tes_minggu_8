<?php

require  "vendor/autoload.php";
use App\Circle;
use App\Square;
use App\Triangle;


echo (new Square())->getArea();
echo PHP_EOL;
echo (new Triangle())->getArea();
echo PHP_EOL;
echo (new Circle())->getArea();
echo PHP_EOL;