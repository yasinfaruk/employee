<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/8/15
 * Time: 9:39 PM
 */
error_reporting('no');
include('navbar.php');
include('database.php');
include('pdo.php');


$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);



if (isset($_POST['submit'])) {

    $select = $_POST['role_employee'];
    $eid = $_POST['e_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $total_leave = $_POST['total_leave'];
    $image = $_POST['image'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty(trim($select)) && !empty(trim($eid)) && !empty(trim($name)) && !empty(trim($age)) && !empty(trim($department)) && !empty(trim($salary)) && !empty(trim($image)) && !empty(trim($total_leave)) && !empty(trim($email)) && !empty(trim($password))) {

        $insert = "INSERT INTO `add_employee`( `role_employee`, `e_id`, `name`, `age`, `department`, `salary`, `image`, `total_leave`, `email`, `password`) VALUES                            ('$select', '$eid', '$name', '$age', '$department', '$salary', '$image', '$total_leave', '$email', '$password')";
//        echo $insert;
//                die();

        $preparestatement = $dbconnection->prepare($insert);
        $preparestatement->execute();

        echo "<script>alert ('successfully inserted');</script>";
    } else {

        echo "you have to fill up all fields";
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Employee</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="#" method="POST" role="form">
                    <legend>Add Employee</legend>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select" class="control-label">Selects</label>

                                <select class="form-control" id="select" name="role_employee">
                                    <option value="Admin">Admin</option>
                                    <option value="Employee">Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Employee ID</label>
                                <input type="text" class="form-control" name="e_id" id="" placeholder="Employee ID">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" class="form-control" name="age" id="" placeholder="Age">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Department</label>
        <!--                        <input type="text" class="form-control" name="" id="" placeholder="Department">-->
                                <select class="form-control" id="select" name="department">
                                    <option name="it">IT</option>
                                    <option name="student">Student</option>
                                    <option name="mentor">Mentor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Salary</label>
                                <input type="text" class="form-control" name="salary" id="" placeholder="Salary">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image" id="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Leave</label>
                                <input type="text" class="form-control" name="total_leave" id="" placeholder="Total Leave">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" id="" placeholder="Password">
                    </div>


                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
