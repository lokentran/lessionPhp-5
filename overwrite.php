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


        function sayHi() {
            echo "Hello $this->name ! How are you?";
        }
    }
    
    $c = new Child();

    $c->name = 'Hong';

    $c->sayHi();

    echo "<br>";





?>