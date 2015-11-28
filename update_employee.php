<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/8/15
 * Time: 9:39 PM
 */
error_reporting('no');
session_start();
include('navbar.php');
include('database.php');
include('pdo.php');

$em_id = $_GET['e_id'];
$_SESSION[$em_id] = $em_id;


$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);



if(isset($em_id)){

    $view = "SELECT * FROM add_employee WHERE e_id='$em_id'";
    $data = $dbconnection->query($view);
    $row = $data->fetch(PDO::FETCH_ASSOC);
//    echo $row['id'];
//        die();

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
        <form action="updated_employee_data.php" method="POST" role="form">
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
                        <input type="text" class="form-control" name="e_id" id="" value="<?php echo $row['e_id'];?>">
                        <input type="hidden" class="form-control" name="id" id="" value="<?php echo $row['id'];?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="" value="<?php echo $row['name'];?>">
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" class="form-control" name="age" id="" value="<?php echo $row['age'];?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Department</label>
                        <!--                        <input type="text" class="form-control" name="" id="" value="Department">-->
                        <select class="form-control" id="select" name="department">
                            <option name="it">IT</option>
                            <option name="student">Student</option>
                            <option name="mentor">Mentor</option>
                            <option name="manager">Manager</option>
                            <option name="hr">HR</option>
                            <!--                            <option>Clark</option>-->
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Salary</label>
                        <input type="text" class="form-control" name="salary" id="" value="<?php echo $row['salary'];?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" id="" value="<?php echo $row['image'];?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" value="<?php echo $row['email'];?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" id="" value="<?php echo $row['password'];?>">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
