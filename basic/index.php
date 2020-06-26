<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('Ancestor.php');
  
    class Child extends Ancestor {

    }
    
    class Child2 extends Child {

    }

    // $c = new Child();
    // $c->name = "Hoang";
    // echo $c->name;

    // echo "<br>";
    // $c->age = 40;
    // echo $c->age;   

    $cc = new Child2();

    echo $cc->age;

    // echo "<br>";
    // $c->id = 1;
    // echo $c->id;   
    ?>
</body>
</html>