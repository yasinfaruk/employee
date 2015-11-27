<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/8/15
 * Time: 9:39 PM
 */
error_reporting('no');
session_start();

$_SESSION['employee_id'] = $em_id;
$_SESSION['user_email'] = $email;
$_SESSION['user_password'] = $password;

include('navbar.php');
include('database.php');
include('pdo.php');

$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])  && ($_POST['role_time']=='Time In')) {

    $em_id = $_POST['e_id'];
    $date_value = $_POST['date_value'];
    $time_in = $_POST['time_in'];
    $time_out = $_POST['time_out'];
    $role_time = $_POST['role_time'];
    $reason = $_POST['reason'];


    $insert = "INSERT INTO `employee_time_in`(`e_id`, `date_value`, `time_in`, `time_out`, `role_time`, `reason`) VALUES ('$em_id', '$date_value', '$time_in', '$time_out', '$role_time', '$reason')";
    $preparestatement = $dbconnection->prepare($insert);
    $preparestatement->execute();
}
else if(isset($_POST['submit'])  && ($_POST['role_time']=='Time Out'))
{
    echo"ok";
   // exit;
    $em_id = $_POST['e_id'];
    $date_value = $_POST['date_value'];

    $role_time = $_POST['time_in'];
    $reason = $_POST['reason'];


   // $update = "UPDATE SET out_time=$time_value WHERE emid= $em_id and date=$date_value// `employee_time_in`(`e_id`, `date_value`, `time_value`, `role_time`, `reason`) VALUES ('$em_id', '$date_value', '$time_value', '$role_time', '$reason')";
    //This one will be update query

    $update = "UPDATE `employee_time_in` SET `time_out`='$role_time',`reason`='$reason' WHERE e_id='$em_id' AND date_value='$date_value'";
    echo $update;
   // exit;
    $preparestatement = $dbconnection->prepare($update);
    $preparestatement->execute();
    
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .login_text {
                font-size: 20px;
            }
        </style>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <form action="" method="POST" role="form" class="">
                    <legend>Employee Status</legend>

                    <div class="row">
                        <input type="hidden" name="e_id" value="<?php echo $_GET['e_id'] ?>">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date" class="">Date</label>
                                <div>
                                    <input name="date_value" class="form-control" id="date_value" type="text" value="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date" class="">Time</label>
                                <div>
                                    <input name="time_in" class="form-control" id="time_value" type="text" value="" readonly>
<!--                                    <input name="time_out" class="form-control" id="time_value" type="hidden" value="" readonly>-->
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <select class="form-control" id="role_id" name="role_time">
                             <option>--Select--</option>
                            <option value="Time In">Time In</option>
                            <option value="Time Out">Time Out</option>
                        </select>
                    </div>

                    <div class="form-group" id="complain_box">
                        <label for="textArea" class=" control-label" >Explain Box</label>

                        <textarea name="reason" type="text" class="form-control" rows="3" id="text_field" placeholder="If you are late, please explain your problem here."></textarea>
                        <span id="counter"></span>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" id="disable_button">Submit</button>
            </div>



        </form>
    </div>
    <script>
        $(document).ready(function () {
            $("#complain_box").hide();
            var d = new Date();
            var date = d.getFullYear() + '-' + d.getMonth() + '-' + d.getDate();
            var time = d.getHours() + ':' + d.getMinutes();
//            var value = d.getFullYear() + '-' + d.getMonth() + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes();
            console.log(date);
            console.log(time);
            $("#role_id").change(function(){
                console.log($("#role_id").val());

                $("#complain_box").hide();

               if($("#role_id").val()=='Time In')
               {
                    if (d.getHours() >= 9 && d.getMinutes() > 0)
                   {
                   $("#complain_box").show();

                   //            ============== button disabled ===============
                   $('#disable_button').prop('disabled', true);

                   $('#text_field').on("propertychange input textInput", function () {
                       var charLimit = 100;
                       var remaining = charLimit - $(this).val().length;

                       if (remaining === charLimit) {
                           $('#disable_button').prop('disabled', true);
                       } else if (remaining < 0) {
                           $('#counter').addClass("Over-char-limit").text(remaining);
                           $('#disable_button').prop('disabled', true);
                       } else {
                           $('#disable_button').removeAttr('disabled');
                           $('#counter').removeClass("Over-char-limit").text(remaining);
                       }
                   });

                   }

               }

               else
               {
                    if (d.getHours() <= 17 && d.getMinutes() > 0)
                   {
                   $("#complain_box").show();

                   //            ============== button disabled ===============
                   $('#disable_button').prop('disabled', true);

                   $('#text_field').on("propertychange input textInput", function () {
                       var charLimit = 100;
                       var remaining = charLimit - $(this).val().length;

                       if (remaining === charLimit) {
                           $('#disable_button').prop('disabled', true);
                       } else if (remaining < 0) {
                           $('#counter').addClass("Over-char-limit").text(remaining);
                           $('#disable_button').prop('disabled', true);
                       } else {
                           $('#disable_button').removeAttr('disabled');
                           $('#counter').removeClass("Over-char-limit").text(remaining);
                       }
                   })

                   }

               }

            });
            


            $("#date_value").val(date);
            $("#time_value").val(time);



        });

        
    </script>
</body>
</html>
