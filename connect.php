<?php


$db['server'] = 'localhost';
$db['username'] = 'root';
$db['password'] = '';
$db['database_name'] = "payroll";
 
// $link = mysql_connect($host,$us,$pw) or die ("Could not connect to MySQL");
mysql_connect($db['server'],$db['username'],$db['password']) or die ("Could not connect to MySQL");
mysql_select_db($db['database_name']) or die ("Could not connect to Database");

mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("collation_connection = utf8_general_ci");
mysql_query("collation_database = utf8_general_ci");
mysql_query("collation_server = utf8_general_ci");

function select($sql){

	$query = mysql_query($sql) or die(mysql_error());
	while($result = mysql_fetch_array($query))
	  {
	   $list[] = $result;
	  }

  	mysql_close();
	return $list;
}

?>