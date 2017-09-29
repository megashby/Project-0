<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// // echo "jfsdjfjlkds";

// mysql_connect($host, $user, $pass);

// mysql_select_db('demo');

$db_host = 'megashby-instance1.cssjukptt0pw.us-east-2.rds.amazonaws.com:3306';

$dsn = "mysql:host=megashby-instance1.cssjukptt0pw.us-east-2.rds.amazonaws.com;post=3306;dbname=demo";
$username= 'megashby';
$password = 'mypassword';
$name = 'demo';

// mysql_connect("$db_host", "$username", "$password", TRUE) or die(mysql_error());
$link = mysqli_connect('megashby-instance1.cssjukptt0pw.us-east-2.rds.amazonaws.com', 'megashby', 'mypassword', 'demo', 3306);
if (empty($link)){
	die("mysqli connect failed".mysqli_connect_error());
}
else{
	echo "JELLO";
}

$imagename = $_FILES["myimage"]["name"];

// #Get the content of the image and then add slashes to it
$imagetmp = addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

// #insert the image name and image content in image_table
$insert_image = "INSERT INTO image_table VALUES('$imagetmp', '$imagename');";
// echo $imagename;
// echo $imagetmp;
// 
mysqli_query($link, $insert_image);
mysqli_query($link, "COMMIT");

// echo "HELLOOOO!!!!!!!";

header("Location: logoutpage.php");



?>