<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting('no');
session_start();
$_SESSION[$em_id] = $em_id;

include('database.php');
include('pdo.php');

$dbconnection = $connection_object->connection('localhost', $dbusername, $dbpassword, $dbname);


if (isset($_POST['submit'])) {
   
    $id = $_POST['id'];
    $_SESSION['id'] = $id;
//    echo $eid;
//        exit();
    
    $select = $_POST['role_employee'];
    $eid = $_POST['e_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $image = $_POST['image'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $update = "UPDATE `add_employee` SET `id`='$id', `role_employee`='$select',`e_id`='$eid',`name`='$name',`age`='$age',`department`='$department',`salary`='$salary',`image`='$image',`email`='$email',`password`='$password' WHERE id='$id'";
   
//    print_r($update);
    $preparestatement = $dbconnection->prepare($update);
    $preparestatement->execute();

    echo ("<script>location.href='employee_list.php'</script>");
}

