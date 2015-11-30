<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/7/15
 * Time: 12:42 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        #navigation{
            background: white;
            color: white;
        }
        #navigation > ul{
            margin-left: 25%;
            position: relative;
        }
        #navigation > ul > li{
            border-left: 1px solid #eeeeee;
            display: block;
            
        }
        #navigation > ul > li:first-child{
            border-left: none;
        }
        #navigation > ul > li > a{
            color: orangered;
            transition: 0.3s;
            -webkit-transition: 0.3s;
            font-size: 15px;
        }
        #navigation > ul > li::after {
            -webkit-justify-content: '';
            left: 0;
            background: orangered;
            height: 20px;
            width: 100%;
            position: absolute;
        }
    </style>
</head>
<body>
    <div class="row">
        <nav class="navbar navbar-default" role="navigation" id="navigation">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        		</button>
        	</div>
        
        	<!-- Collect the nav links, forms, and other content for toggling -->
        	<div class="collapse navbar-collapse navbar-ex1-collapse" id="navigation">
        		<ul class="nav navbar-nav">
        			<li><a href="#">Home</a></li>
                                <li><a href="add_employee.php">Add Employee</a></li>
                                <li><a href="employee_list.php">Employee List</a></li>
                                <li><a href="leave_management.php">Leave Manage</a></li>
                                <li><a href="accounts.php">Accounts</a></li>
                                <li><a href="logout.php">Logout</a></li>
        		</ul>

        	</div><!-- /.navbar-collapse -->
        </nav>
    </div>
</body>
</html>