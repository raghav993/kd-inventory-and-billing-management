<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "php_inventory1";
$bash_url = "http://localhost/php-inventory-management-system/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>