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
include('pdo.php');
include('database.php');

$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

//$_SESSION['employee_id'] = $em_id;
//$_SESSION['user_email'] = $email;
//$_SESSION['user_password'] = $password;

$em_id = $_GET['e_id'];
$today = date("Y-m-d");

$days_ago = date('Y-m-d', strtotime('-5 days', strtotime($today)));
//echo $days_ago."<br>";
//echo $today;
//$view = "SELECT * FROM add_employee, employee_time_in WHERE add_employee.e_id='$em_id' AND employee_time_in.e_id='$em_id'";

$view = "SELECT * FROM add_employee, employee_time_in WHERE (date_value BETWEEN $today AND $days_ago)OR (add_employee.e_id='$em_id' AND employee_time_in.e_id='$em_id')";
$data = $dbconnection->query($view);
$row = $data->fetch(PDO::FETCH_ASSOC);
?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <style>
            .employee-image {
                border: 8px solid whitesmoke;
                border-radius: 5px;
                box-shadow: 0px 0px 5px 1px grey;
                /*margin-bottom: 30px;*/
                width: 150px;
                height: 150px;
            }
            .employee_part{
                margin-bottom: 30px;
            }
            .employee_info {
                /*border: 1px solid grey;*/
                font-size: 18px;
                padding: 15px 0px 0px 80px;
            }
            .week-form{
                margin-bottom: 20px;
                margin-top: 0px;
            }
            .info-table {
                margin-left: 45px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <!--    ============== view weeek =================-->
            <div class="col-md-12 text-center">
                <form action="" class="form-inline week-form" method="POST" role="form">

                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control datepicker" name="" id="" placeholder="From">
                        <input type="text" class="form-control datepicker" name="" id="" placeholder="To">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!--============== end week ===============-->
            <div class="col-md-9 col-md-offset-1 employee_part">
                <div class="col-md-4">
                    <div class="employee_info">                
                        <span><em class="text-primary">Name : </em><small><?php echo $row['name'] ?></small></span><br>
                        <span><em class="text-primary">E-ID : </em><small><?php echo $row['e_id'] ?></small></span><br>
                        <span><em class="text-primary">Department : </em><small><?php echo $row['department'] ?></small></span><br>
                        <span><em class="text-primary">Role : </em><small><?php echo $row['role_employee'] ?></small></span><br>
                        <span><em class="text-primary">Salary : </em><small><?php echo $row['salary'] ?></small></span><br>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="employee_info">
                        <span><em class="text-primary">Total-Present : </em>
                            <small>
                                <?php
                                echo "---";
                                ?>
                            </small>
                        </span><br>
                        <span><em class="text-primary">Total-Absent : </em>
                            <small>
                                <?php
                                echo "---";
                                ?>
                            </small>
                        </span><br>
                        <span><em class="text-primary">Total-Leave : </em>
                            <small>
                                <?php
                                echo "---";
                                ?>
                            </small>
                        </span><br>
                        <span><em class="text-primary">Total-Hour : </em>
                            <small>
                                <?php
                                echo "---";
                                ?>
                            </small>
                        </span><br>
                        <span><em class="text-primary">Total-Overtime : </em>
                            <small>
<?php
echo "---";
?>
                            </small>
                        </span><br>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="https://goo.gl/KDsthX" class="employee-image pull-right" alt="yasinfaruk">
                </div>

            </div>

            <!--    ============= TABLE =============-->
            <div class="col-md-11 info-table">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th class="text-center">SL</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Time-In</th>
                                <th class="text-center">Time-Out</th>
                                <th class="text-center">Explain</th>
                                <th class="text-center">Leave</th>
                                <th class="text-center">Vacation</th>
                                <!--<th class="text-center">Overtime</th>-->
                                <!--<th class="text-center">T-Present</th>-->
                                <!--<th class="text-center">T-Absent</th>-->
                                <!--<th class="text-center">T-Leave</th>-->
                                <!--<th class="text-center">T-Hour</th>-->
                                <th class="text-center">Salary</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                                ++$i;
                                ?>
                                <tr class="text-center">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['date_value'] ?></td>
                                    <td><?php echo $row['time_in'] ?></td>
                                    <td><?php echo $row['time_out'] ?></td>
                                    <td><?php echo $row['reason'] ?></td>

                                    <td>
                                        <?php
                                        echo "--";
                                        ?>
                                    </td><td>
                                        <?php
                                        echo "--";
                                        ?>
                                    </td><td>
                                        <?php
                                        echo "--";
                                        ?>
                                    </td>



                                    <td><a href="">view</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--=================== jquery ==================-->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script>
            $(function () {
                $(".datepicker").datepicker();
            });
        </script>
    </body>
</html>
