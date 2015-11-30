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

$em_id = $_GET['e_id'];
$_SESSION['employee_id'] = $em_id;
$_SESSION['user_email'] = $email;
$_SESSION['user_password'] = $password;


//$today = date("Y-m-d");
//$days_ago = date('Y-m-d', strtotime('-5 days', strtotime($today)));


$view = "SELECT * FROM add_employee, employee_time_in, working_hour WHERE add_employee.e_id='$em_id' AND employee_time_in.e_id='$em_id' AND working_hour.e_id='$em_id'";

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
                       
                <div class="col-md-7 col-md-offset-2 employee_part">
                    <div class="col-md-6">
                        <div class="employee_info">                
                            <span><em class="text-primary">Name : </em><small><?php echo $row['name'] ?></small></span><br>
                            <span><em class="text-primary">E-ID : </em><small><?php echo $row['e_id'] ?></small></span><br>
                            <span><em class="text-primary">Department : </em><small><?php echo $row['department'] ?></small></span><br>
                            <span><em class="text-primary">Total Leave : </em><small><?php echo 30; ?></small></span><br>
                            <span><em class="text-primary">Remaining Leave: </em><small><?php echo $row['total_leave']; ?></small></span><br>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                                    <th class="text-center">Hour</th>
                                    <th class="text-center">Overtime</th>
                                    <th class="text-center">Less-time</th>
                                    <th class="text-center">Late-Coming</th>
                                    <th class="text-center">Early-Going</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                                                            
                            <!--===================== php-code-start ==========================-->
                            <tbody>
                            <?php
                                 $i = 0;
                                 while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                                     ++$i;
                                     
                                     $total_leave = $row['total_leave'];
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
                                    </td>
                                    <td>
                                        <?php
                                        echo "--";
                                        ?>
                                    </td>
                                    <td><a href="">view</a></td>
                                </tr>
                                
                                <!--======================= end-php-code ======================-->
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
