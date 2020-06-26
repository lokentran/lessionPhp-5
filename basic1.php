<?php
    class Ancestor {
        public $name;
        private $age;
        protected $id;

        function sayHi() {
            echo "Hello $this->name !";
        }

    }

    class Child extends Ancestor {
        public $weight;
        function readWeight() {
            return "You has $this->weight kg.";
        }
    }
    
    $c = new Child();

    $c->weight = 60;

    echo $c->weight;
    echo "<br>";
    echo $c->readWeight();


?>