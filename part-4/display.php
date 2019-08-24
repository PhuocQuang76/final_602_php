<?php
//require_once('../database.php');
require_once('Rectangle.php');
require_once ('Square.php');

    $rectangle = new Rectangle(10,20);


    echo 'The area of width: '.$rectangle->getWidth().' and height: '.
        $rectangle->getHeight().' is: '.$rectangle->getArea().'<br/>';


    $square = new Square(20);

    echo 'The area of width: '.$square->getWidth().' and height: '.
        $square->getHeight().' is: '.$square->getArea();





