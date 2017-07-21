<?php
include 'connect.php';


$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysql_query("SELECT * FROM `user` WHERE username = '$user' AND password = '$pass'");
$result = mysql_fetch_array($query);

echo $result['username'];


?>