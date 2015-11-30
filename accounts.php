<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/9/15
 * Time: 5:41 AM
 */
error_reporting('no');
include('navbar.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Accounts</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            #search_field{
                   padding: 28px 5px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-2 col-md-offset-3">
                    <h1 class=" text-justify text-danger"><em>Accounts</em></h1>
                </div>
                
                <div class="col-md-4" id="search_field">
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

            </div>

            <div class="col-md-8 col-md-offset-2">
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">E-ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Dept.</th>
                            <th class="text-center">Desig.</th>
                            <th class="text-center">Salary</th>
                            <th class="text-center">Overtime</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>yasinfaruk</td>
                            <td>#1234</td>
                            <td>Training</td>
                            <td>Student</td>
                            <td>$100</td>
                            <td>12</td>
                            <td>$120</td>
                        </tr>
                        <tr class="text-center">
                            <td>1</td>
                            <td>yasinfaruk</td>
                            <td>#1234</td>
                            <td>Training</td>
                            <td>Student</td>
                            <td>$100</td>
                            <td>12</td>
                            <td>$120</td>
                        </tr>
                        <tr class="text-center">
                            <td>1</td>
                            <td>yasinfaruk</td>
                            <td>#1234</td>
                            <td>Training</td>
                            <td>Student</td>
                            <td>$100</td>
                            <td>12</td>
                            <td>$120</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
