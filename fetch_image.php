<?php

#header('content-type:image/jpeg');
$host = "localhost";
$user = "root";
$pass = " ";
#$port = "3306";
$dbs = 'megashby1';

mysql_connect($host, $user, $pass);

mysql_select_db("megashby1");

$name = $_GET['name'];

$select_image = "select * from image_table";

$var = mysql_query($select_image);

while ($row = mysql_fetch_array($var))
{
	$image_name = $row["imagename"];
	$image_path = $row["imagepath"];
	echo "img src=".$image_path"/"$image_name." width = 100 height = 100";
}

?>