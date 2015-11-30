
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
include('database.php');
include('pdo.php');


$employee_id = $_GET['e_id'];
$_SESSION['employee_id'] = $em_id;
$_SESSION['user_email'] = $email;
$_SESSION['user_password'] = $password;

$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

$sql = "SELECT time_in FROM employee_time_in WHERE e_id='$employee_id' AND date_value=CURDATE()";
//echo $sql;
$data = $dbconnection->query($sql);



if (isset($_POST['submit']) && ($_POST['role_time'] == 'Time In')) {

    $em_id = $_POST['e_id'];
    $date_value = $_POST['date_value'];
    $time_in = $_POST['time_in'];
    $time_out = $_POST['time_out'];
    $late_coming = $_POST['reason'];
//    $role_time = $_POST['role_time'];
//    $reason = $_POST['reason'];



    $insert = "INSERT INTO `employee_time_in`(`e_id`, `date_value`, `time_in`, `time_out`, `late_coming`) VALUES ('$em_id', CURDATE(), '$time_in', '$time_out', '$late_coming')";
    $preparestatement = $dbconnection->prepare($insert);
    $preparestatement->execute();
    
} else if (isset($_POST['submit']) && ($_POST['role_time'] == 'Time Out')) {
    $em_id = $_POST['e_id'];
    $date_value = $_POST['date_value'];

    $time_out = $_POST['time_in'];
    $reason = $_POST['reason'];
    $TimeIn = $_POST['timein'];
    $WorkHour = $_POST['time_in'] - $TimeIn;

    $update = "UPDATE `employee_time_in` SET `time_out`='$time_out',`early_going`='$reason' WHERE e_id='$em_id' AND date_value=CURDATE()";

    $preparestatement = $dbconnection->prepare($update);
    $preparestatement->execute();


    $insert_query = "INSERT INTO `working_hour`(`e_id`, `date_value`, `total_hour`) VALUES ('$em_id',CURDATE(),$WorkHour)";
    $preparestatement = $dbconnection->prepare($insert_query);
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

                    <?php
                    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                        $xxx = $row['time_in'];
                    }
                    ?>
                    <input type="hidden" name="timein" value="<?php echo $xxx ?>">
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

                        <textarea name="reason" type="text" class="form-control" rows="3" id="text_field" placeholder="If you are late, please explain your problem here.">
                        </textarea>
                        <span id="counter"></span>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" id="disable_button">Submit</button>

                </form>

            </div>



        </div>
        <script>
            $(document).ready(function () {
                $("#complain_box").hide();
                var d = new Date();
                var date = d.getFullYear() + '-' + d.getMonth() + '-' + d.getDate();
                var time = d.getHours() + ':' + d.getMinutes();
                console.log(date);
                console.log(time);
                $("#role_id").change(function () {
                    console.log($("#role_id").val());

                    $("#complain_box").hide();

                    if ($("#role_id").val() == 'Time In')
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
