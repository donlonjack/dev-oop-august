<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Income Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="container">
    <h2 class="text-center">Employee Activity</h2>
    </div>  
        <form action="#" method="post">
                    <div class="mb-4">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
                    </div>
                    
                    <div class="mb-4 row" >
                        <label for="civil_status" class="col-6">Civil Status</label>
                        <select name="civil_status" class="form-select" id="" required>
                            <option value="" hidden>select your Civil Status</option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="position" class="col-6">Position</label>
                        <select name="position" class="form-select" id="" required>
                            <option value="" hidden>select your Position</option>
                            <option value="1">Staff 1</option>
                            <option value="2">Staff 2</option>
                            <option value="3">Staff 3</option>
                            <option value="4">Staff 4</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="emplyment_Status" class="col-6">Employment Status</label>
                        <select name="emplyment_Status" class="form-select" id="" required>
                            <option value="" hidden>Select your Employment Status</option>
                            <option value="1">Status 1</option>
                            <option value="2">Status 2</option>
                            <option value="3">Status 3</option>
                            <option value="4">Status 4</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="name">Number of hours worked</label>
                        <input type="number" name="number" id="" class="form-control" required>
                    </div>
                    <br>
                    <input type="submit" name="btn_submit" value="Submit" class="bg-primary form-control text-white">
        </form>


<?php
include_once "Employee.php";
   if(isset($_POST['btn_submit'])){
        $civil_status = $_POST['civil_status'];
        $position = $_POST['position'];
        $emplyment_status = $_POST['emplyment_Status'];
        $number_of_hours_worked = $_POST['number_of_hours_worked'];

        $employee = new employee;
        $school->setValues($Civil_Status, $position, $emplyment_status );
        $total_price = $school->computeTotalPrice();

        echo "Name: <span class='fw-bold'>$civil_status</span><br>";
        echo "Year level: <span class='fw-bold'>$civil_status</span> <br>";
        echo "No. of units: <span class='fw-bold'>$emplyment_status</span> <br>";
        echo "Total Price: <span class='fw-bold'>$number_of_hours_worked</span>";

    }

?>


</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

<?php
include "Employee.php";

if(isset($_POST['btn_submit'])){

    $employee = new Employee($_POST['civil_status'], $_POST['position'], $_POST['employment_status'], $_POST['number_of_hours_worked'])
}
?>