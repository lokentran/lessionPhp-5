<?php
    class Ancestor {
        public $name;
        protected $age = 12;
        public $id;

        function __construct(){
            // $this->name = $name;
            // $this->age = $age;
            // $this->id = $id;
        }

        function sayHi() {
            echo "Hello $this->name !";
        }

    }


  
?>