<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting('no');
session_start();

include('navbar.php');
include('pdo.php');
include('database.php');

$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);


$_SESSION['user_email'] = $email;
$_SESSION['user_password'] = $password;

if (isset($_POST['search'])) {
    $em_id = $_POST['em_id'];
    

    $search = "SELECT * FROM `add_employee` WHERE `e_id`='$em_id'";
    $data = $dbconnection->query($search);
    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        $total_leave = $row['total_leave'];
        $id = $row['id'];
    }
    
}

if(isset($_POST['update'])){
    
    $remaining_leave = $_POST['remaining_leave'];
    $id = $_POST['id'];
    
    $update = "UPDATE `add_employee` SET `total_leave`='$remaining_leave' WHERE id='$id'";
    $preparestatement = $dbconnection->prepare($update);
    $preparestatement->execute();
    
    echo '<script>alert("Updated Successfull.");</script>';
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .login_text{
                font-size: 20px;
            }
            .update_form {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <form action="#" method="POST" role="form" class="form-inline">
                    <legend>Leave Management</legend>

                    <div class="form-group">
                        <input type="text" class="form-control" name="em_id" id="" placeholder="Employee ID">
                        <button type="submit" name="search" class="btn btn-primary">Search</button>
                    </div>
                    <div class="form-group update_form">
                        <label class="control-label text-danger" for="focusedInput">Remaining leave</label>
                        <input class="form-control" name="id" id="focusedInput" type="hidden" value="<?php echo $id;?>">
                        <input class="form-control" name="remaining_leave" id="focusedInput" type="text" value="<?php echo $total_leave;?>">
                        <button type="submit" name="update" class="btn btn-danger">Update</button>
                    </div>
                </form>


            </div>
        </div>
    </body>
</html>
