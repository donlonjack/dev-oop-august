<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
</head>
<body>
    <!-- Form -->
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="address" placeholder="Address"><br>
        <input type="number" name="age" placeholder="Age"><br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>

<?php 
include_once "person.php";

if(isset($_POST['btn_submit'])){
    $person = new Person; 

    $person->setName($_POST['name']);
    $person->setAddress($_POST['address']);
    $person->setAge($_POST['age']);  

    echo "NAME: " . $person->getName() . "<br>";
    echo "ADDRESS: " . $person->getAddress() . "<br>";
    echo "AGE: " . $person->getAge();

}
?>