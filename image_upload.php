<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting('no');
//include('navbar.php');
include('database.php');
include('pdo.php');

$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);

 if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"/var/www/employee/images/".$file_name);
         echo "Success";
      }
      else{
         print_r($errors);
      }
   }

//if (isset($_POST['upload'])) {
//    
//    if ($_FILES["image_file"]["error"] > 0) {
//        echo "Error: " . $_FILES["file"]["error"] . "<br>";
//    }else
//  {
//  echo "Upload: " . $_FILES["image_file"]["name"] . "<br>";
//  echo "Type: " . $_FILES["image_file"]["type"] . "<br>";
//  echo "Size: " . ($_FILES["image_file"]["size"] / 1024) . " kB<br>";
//  echo "Stored in: " . $_FILES["image_file"]["tmp_name"];
//  
//  $image_dir= '/var/www/employee/images/';
//  move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $image_dir. $_FILES['uploaded_file']['name']);
//  echo 'Uploaded';
//
//  }
//}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>image_upload</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .login_text{
                font-size: 20px;
            }
            .update_form {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="#" method="POST" role="form" class="form-inline update_form" enctype="multipart/form-data">
                    <legend>Image Upload</legend>

                    <div class="form-group">
                        <input type="file" class="form-control" name="image" id="" placeholder="Employee ID">
                        <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                    </div>
                      <ul>
                        <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
                        <li>File size: <?php echo $_FILES['image']['size'];  ?>
                        <li>File type: <?php echo $_FILES['image']['type'] ?>
                     </ul>
                </form>


            </div>
        </div>
    </body>
</html>


