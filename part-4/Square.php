<?php

class Square extends Rectangle {
    public function __construct($side) {
        parent::__construct($side, $side);
    }

}