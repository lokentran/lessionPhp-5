<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include_once('Shape.php');
include_once('Circle.php');


$arc1 = new Circle('Hinh tron','10');

echo  $arc1->name;

echo "<br>";

echo "$arc1->name co chu vi la: " . $arc1->calPerimeter();

echo "<br>";

echo "$arc1->name co dien tich la: " . $arc1->calArea();



?>

</body>
</html>