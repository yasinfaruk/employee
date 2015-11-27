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
    <style>
        .employee-image{
            width: 130px;
            height: 130px;
            border: 5px solid whitesmoke;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .left-side{
            padding: 20px;
            background: darkgray;
            /*margin-left: 5px;*/
            color: black;
            position: absolute;

        }
    </style>
</head>
<body>
<div class="row">
   <div class="col-md-12">
       <div class="col-md-2 left-side">
           <div class="ro">
               <div class="col-md-10">
                   <img src="https://goo.gl/KDsthX" class="employee-image" alt="yasinfaruk">
               </div>
               <div class=" col-md-10 employee_info">
                   <span><em>Name : </em></span><br>
                   <span><em>E-ID : </em></span><br>
                   <span><em>Department : </em></span><br>
                   <span><em>Designation : </em></span><br>
                   <span><em>Date : </em></span>
               </div>
           </div>
       </div>
       <div class="col-md-10"></div>
   </div>
</div>
</body>
</html>
