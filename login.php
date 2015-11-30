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



$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
    $select = $_POST['select'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['user_email'] = $email;
    $_SESSION['user_password'] = $password;

    if (!empty(trim($email)) && !empty(trim($password))) {

        $search = "SELECT * FROM add_employee WHERE email='$email' AND password='$password' AND role_employee='$select'";

        $data = $dbconnection->query($search);

        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            $em_id = $row['e_id'];
            echo ("<script>window.location='employee_time_in.php?e_id=$em_id'</script>");
        }
    } else {
        echo "something wrong";
    }
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
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <form action="#" method="POST" role="form">
                    <legend>Login Form</legend>

                    <div class="form-group">
                        <select class="form-control" id="select" name="select">
                            <option value="Admin">Admin</option>
                            <option value="Employee">Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="password" id="" placeholder="Password">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>

