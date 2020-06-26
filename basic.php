<?php
    class Ancestor {
        public $name;
        private $age;
        public $id;

        // function __construct($name,$age, $id){
        //     $this->name = $name;
        //     $this->age = $age;
        //     $this->id = $id;
        // }

        function sayHi() {
            echo "Hello $this->name !";
        }

    }

    class Child extends Ancestor {

    }
    
    $c = new Child();
    $c->name = "Hoang";
    echo $c->name;

    echo "<br>";
    $c->age = 40;
    echo $c->age;   

    // echo "<br>";
    // $c->id = 1;
    // echo $c->id;   
  
?>