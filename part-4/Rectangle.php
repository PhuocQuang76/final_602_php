<?php

class Rectangle {

    //property declarations
    private $width;
    private $height;

    //constructor
    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }

    public function setWidth($width){
        $this->width = $width;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}
?>