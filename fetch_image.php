<?php

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

#header('content-type:image/jpeg');
// $host = "localhost";
// $user = "root";
// $pass = " ";
// #$port = "3306";
// $dbs = 'megashby1';

// mysql_connect($host, $user, $pass);

// mysql_select_db("demo");

$name = $_GET['name'];

$select_image = "select * from image_table";

$var = mysqli_query($link, $select_image);
// print "<table border = '1'width = '75%'><tr><th> pic </th><th> name </th></tr>";

while ($row = $var ->fetch_row())
{
	$image_name = $row["imagename"];
	$image_path = $row["imagepath"];
	print "img src=".$image_path"/"$image_name." width = 100 height = 100";
}

?>