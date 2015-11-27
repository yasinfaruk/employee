<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/9/15
 * Time: 7:33 AM
 */
error_reporting('no');
include('navbar.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Confirmation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="" method="POST" role="form">
            <legend>Welcome Message</legend>

            <!--            <div class="form-group">-->
            <!--                <select class="form-control" id="select">-->
            <!--                    <option>Time In</option>-->
            <!--                    <option>Time Out</option>-->
            <!--                </select>-->
            <!--            </div>-->
            <!---->
            <!--            <div class="form-group">-->
            <!--                <label for="textArea" class=" control-label">Explain Box</label>-->
            <!--                <textarea class="form-control" rows="3" id="textArea"-->
            <!--                          placeholder="If you are late, please explain your problem here."></textarea>-->
            <!--            </div>-->

            <div>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&#10060</button>
                    <p><strong>Hi, (Employee Name)</strong> thank you for comming office. Your enter time is : (time)</p>
                </div>
                <p class="text-primary">Please press the logout to exit from the system. <br> Hava a good day .</p>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
