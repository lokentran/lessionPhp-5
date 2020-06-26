<?php
    final  class Ancestor {
        public $name;
        private $age;
        protected $id;

        function sayHi() {
            echo "Hello $this->name !";
        }

    }

    class Child extends Ancestor {
        public $weight;

        function sayHi() {
            echo "Hello $this->name ! How are you?";
        }
    }
    
    $c = new Child();

    $c->name = "Huynh";

    $c->sayHi();

    echo "<br>";





?>