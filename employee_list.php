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





if (isset($_POST['search']) && ($_POST['department'] == 'IT')) {

    $view = "SELECT * FROM `add_employee` WHERE department='IT' ";
    $data = $dbconnection->query($view);
} elseif (isset($_POST['search']) && ($_POST['department'] == 'student')) {

    $view = "SELECT * FROM `add_employee` WHERE department='Student' ";
    $data = $dbconnection->query($view);
} elseif (isset($_POST['search']) && ($_POST['department'] == 'mentor')) {

    $view = "SELECT * FROM `add_employee` WHERE department='Mentor' ";
    $data = $dbconnection->query($view);
} elseif (isset($_POST['search']) && ($_POST['department'] == 'all')) {

    $view = "SELECT * FROM `add_employee` ";
    $data = $dbconnection->query($view);
} else {

    $view = "SELECT * FROM add_employee ";
    $data = $dbconnection->query($view);
}
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

                <!--======================== search =====================-->
                <form action="#" method="POST" role="form" class="form-inline select-form">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <select name="department" class="form-control" id="select">
                                    <option value="all">All</option>
                                    <option value="IT">IT</option>
                                    <option value="student">Student</option>
                                    <option value="mentor">Mentor</option>
                                </select>
                                <button type="submit" name="search" class="btn btn-default">Search</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>

            <!--    =================== ALL-DATA-TABLE ======================-->
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">Num</th>
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
while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $x++;
    ?>
                            <tr class="text-center">
                                <td><?php echo $x; ?></td>
                                <!--<td><?php echo $row['id'] ?></td>-->
                                <td><?php echo $row['role_employee'] ?></td>
                                <td><?php echo $row['e_id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['age'] ?></td>
                                <td><?php echo $row['department'] ?></td>
                                <td><?php echo $row['salary'] ?></td>
                <!--                    <td>--><?php //echo $row['image']    ?><!--</td>-->
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td>
                                    <span><a href="single_employee_data.php?e_id=<?php echo $row['e_id'] ?>" style="text-decoration:                                       none;">View</a></span>&nbsp;
                                    <span><a class="text-danger" href="update_employee.php?e_id=<?php echo $row['e_id'] ?>" style="                                        text-decoration: none;">Update</a></span>
                                </td>
                            </tr>
<?php } ?> 

                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
