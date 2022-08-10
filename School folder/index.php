<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
</head>
<body>
    <form class="mt-5" action="" method="post" style="margin: 0 auto; width: 600px;">
    <h1 class="text-center"><i class="fa-solid fa-pen-to-square"></i> REGISTRATION</h1>
    <label for="name" class="form label">Nmae</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
<label for=" year-level" class="form-label">Year Level</label>
<select name="year-level" id="year-level" class="form-control">
    <option value="" selected placeholder="Choose your year level">
    <option value="" hiden>Choose your year level</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>

<label for="total-unit" class="form-label">Total Unit</label>
<input type="number" name="total-units" id="total-units" class="form-control" max="23" placeholder="Maximum of 23">
<input type="radio" name="labortory" value="With Lab" id="with-lab">
<label for="with-lab">With Lab</label>
<input type="radio" name="labortory" value="Without Lab" id="without-lab">
<label for="without-lab">Without Lab</label>
<br>
<input type="submit" name="btn_add_register" value="Submit" class="bg-dark form-control text-white">

<?php
include_once "school.php";
   if(isset($_POST['btn_add_register'])){
        $name = $_POST['name'];
        $year_level = $_POST['year-level'];
        $units = $_POST['total-units'];
        $labortory = $_POST['labortory'];

        $school = new school;
        $school->setValues($year_level, $units, $labortory);
        $total_price = $school->computeTotalPrice();

        echo "Name: <span class='fw-bold'>$name</span><br>";
        echo "Year level: <span class='fw-bold'>$year_level</span> <br>";
        echo "No. of units: <span class='fw-bold'>$units</span> <br>";
        echo "Total Price: <span class='fw-bold'>$total_price</span>";

    }
?>


</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>