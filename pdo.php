<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 11/5/15
 * Time: 4:41 PM
 */
class connect{
    var $host;
    var $user;
    var $pass;
    var $db;
    public $connect;
    public function connection($dbhost, $dbusername, $dbpassword, $dbname){
        $this->host = $dbhost;
        $this->user = $dbusername;
        $this->pass = $dbpassword;
        $this->db = $dbname;
        $connect = new PDO("mysql:host=$this->host; dbname=$this->db", $this->user, $this->pass, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->setAttribute(PDO::ATTR_PERSISTENT, true);
        return $connect;
    }
}
$connection_object = new connect();