
<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/8/15
 * Time: 9:39 PM
 */
error_reporting('no');
include('navbar.php');
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

        .employee_part {
            margin-bottom: 30px;
        }

        .employee_info {
            /*border: 1px solid grey;*/
            font-size: 18px;
            padding: 25px 0px 0px 80px;
        }
        .view-week{
            margin-left: 200px;
        }
    </style>
</head>
<body>
<div class="row">

    <div class="col-md-8 col-md-offset-3">
        <h1 class=" text-justify text-danger view-week"><em>View Week</em></h1>

        <form class="navbar-form navbar-left" role="search">
            <div class="row">
                <div class="col-md-4">
                    <span><em>Name : </em></span>&nbsp;
                    <span><em>Employee Id :</em></span>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control datepicker" placeholder="From">
                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <input type="text" class="form-control datepicker" placeholder="To">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-default">Search</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <!--    ============= TABLE =============-->
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead class="text-center">
                <tr>
                    <th class="text-center">SL</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">E-Id</th>
                    <!--                    <th class="text-center">Day</th>-->
                    <th class="text-center">Dept.</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Working hour</th>
                    <!--                    <th class="text-center">Time-Out</th>-->
                    <th class="text-center">Absence</th>
                    <th class="text-center">Leave</th>
                    <th class="text-center">Vacation</th>
                    <!--                    <th class="text-center">V-Used</th>-->
                    <th class="text-center">OT</th>
                    <th class="text-center">Sick</th>
                    <th class="text-center">T-Present</th>
                    <th class="text-center">T-Absent</th>
                    <th class="text-center">T-Leave</th>
                    <th class="text-center">T-Hour</th>
                    <th class="text-center">Salary</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>9.00</td>
                    <td>5.00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>9.00</td>
                    <td>5.00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>9.00</td>
                    <td>5.00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td><a href="#">View</a></td>
                </tr>
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
    $(function() {
        $( ".datepicker" ).datepicker();
    });
</script>
</body>
</html>

