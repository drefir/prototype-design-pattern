<?php

    $circle = new Circle();
    $rectangle = new Rectangle();

    $circlePro1 = clone $circle;
    $circlePro1->setType("SimpleCircle");
    echo "Circle is". $circlePro1->getType(). "with ".$circlePro1->getColor()." color";
    // Circle is SimpleCircle with red color

    $rectanglePro1 = clone $rectangle;
    $rectanglePro1->setColor("gray");
    echo "Rectangle is". $rectanglePro1->getType(). "with ".$rectanglePro1->getColor()." color";
    // Rectangle is crossed with gray color
