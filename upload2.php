<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
//$f_name=strrchr($_FILES["filUpload"]["tmp_name"],".");
//echo $_POST["name"];

$f_name = $_FILES["filUpload"]["name"];

print_r($_FILES["filUpload"]);

$f_type = strrchr($_FILES["filUpload"]["name"],".");

$date = date('YmdHis');

if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$date.$f_type))
{
	echo "Copy/Upload Complete";

}

?>
</body>
</html>