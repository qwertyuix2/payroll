<?php
include 'connect.php';

echo $_POST['user'];
echo "<br>";
echo $_POST['pass'];

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysql_query("SELECT * FROM `user` WHERE username = '$user' AND password = '$pass' limit 1");
$result = mysql_fetch_array($query);

echo "<br>";
echo $result['username'];
?>