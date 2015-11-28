<?php

error_reporting('no');
session_start();

include('navbar.php');
include('pdo.php');
include('database.php');

$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

$_SESSION['employee_id'] = $em_id;
$_SESSION['user_email'] = $email;
$_SESSION['user_password'] = $password;

$view = "SELECT * FROM add_employee ";
$data = $dbconnection->query($view);
//while($row=$data->fetch(PDO::FETCH_ASSOC))
//{
//    print_r($row);
//}
//echo $data;
//if(isset($_POST['submit'])){
//
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .select-form{
            margin-bottom: 15px;
            margin-left: 100px;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-7 col-md-offset-2">
        <form action="" method="POST" role="form" class="form-inline select-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-6">

                    <div class="form-group">
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="Search">-->
<!--                        </div>-->
<!--                        <button type="submit" class="btn btn-default">Submit</button>-->
                        <select class="form-control" id="select">
                            <option value="">IT</option>
                            <option value="">Student</option>
                            <option>Mentor</option>
                            <option>Manager</option>
                            <option>HR</option>
                            <option>Clark</option>
                        </select>
                        <button type="submit" name="submit" class="btn btn-default">Search</button>
                    </div>
                </div>
            </div>


        </form>
    </div>

<!--    ============= TABLE =============-->
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered table-hover">
        	<thead class="text-center">
        		<tr>
                            <th class="text-center">Num</th>
                            <!--<th class="text-center">SL</th>-->
                            <th class="text-center">Role</th>
                            <th class="text-center">E-Id</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Age</th>
                            <th class="text-center">Dept.</th>
                            <th class="text-center">Salary</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Action</th>
        		</tr>
        	</thead>
        	<tbody>

            <?php
            $x = 0;
            while ($row = $data->fetch(PDO::FETCH_ASSOC)){
              $x++;
            ?>
                    <tr class="text-center">
                        <td><?php echo $x;?></td>
                        <!--<td><?php echo $row['id']?></td>-->
                        <td><?php echo $row['role_employee']?></td>
                        <td><?php echo $row['e_id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['department']?></td>
                        <td><?php echo $row['salary']?></td>
        <!--                    <td>--><?php //echo $row['image']?><!--</td>-->
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td>
                            <span><a href="single_employee_data.php?e_id=<?php echo $row['e_id']?>" style="text-decoration: none;">View</a></span>&nbsp;
                            <span><a class="text-danger" href="update_employee.php?e_id=<?php echo $row['e_id']?>" style="text-decoration: none;">Update</a></span>
                        </td>
                    </tr>
            <?php } ?>
        	</tbody>
        </table>
    </div>
</div>
</body>
</html>
