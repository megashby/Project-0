<?php
print<<<CREATE
<html>
<head>
<link rel="stylesheet" href="./createaccount.css">
<title> CREATE AN ACCOUNT </title>
</head>
<body>
<p> Welcome to the CREATE AN ACCOUNT page </p>
<table width = "75%">
<form action = "./createaccount.php" method = "post">
<tr>
<td> Enter Email </td> <td> <input type = "text" name = "email" size = "40"/></td>
</tr>
<tr>
<td> Enter Password </td> <td> <input type = "text" name = "password" size = "40"/></td>
</tr>
<tr>
<td><input class = "submit" type = "submit" value = "Submit"/></td>
</tr>
</form>
</table>
</body> 
</html> 
CREATE;
extract ($_POST);
$email = $_POST["email"];
$pass = $_POST["password"];
// echo $email;
// echo $pass;
// echo 'BLAAAHHH';
$matches = Array();
$emailfound = false;
$fh = fopen("./passwd.txt", "r");
while (!feof($fh))
{
	$line = fgets($fh);
	$line = trim($line);
	$line = explode(":", $line);
	// echo ($line[0]);
	// echo ($line[1]);
	$matches[$line[0]] = $line[1];
	// echo($line[0]);
	// echo ";";
	// echo ($line[1]);
}
fclose($fh);
foreach ($matches as $key => $value)
{
	if ($email == $key)
	{
		$emailfound = true;
	}
}
// echo $emailfound;
if ($emailfound == true && $matches[$email]!= $pass && isset($_POST['email']) && isset($_POST["password"]))
{
	echo 'email already claimed';
}
if($emailfound == false && $_POST['email'] != "" && $_POST['password'] != '')
{
	$fh = fopen("./passwd.txt", 'a');
	fwrite ($fh, "$email:$pass \n");
	fclose($fh);
	header("Location: ./project.html");
	exit();
}
?>