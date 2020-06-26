<?php
include_once('Shape.php');

class Circle extends Shape {
    public $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }
    
    public function calPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function calArea() {
        return pi() * $this->radius ** 2;
    }

}
