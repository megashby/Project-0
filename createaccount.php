<?php
print<<<CREATE
<html>
<head>
<title> CREATE AN ACCOUNT </title>
<body>
<p> This is the page to create an account </p>
<table width = "75%">
<form action = "./createaccount.php">
<tr>
<td> Enter Email </td>
<td> <input type = "text" name = "email" size = "30"/></td>
</tr>
<tr>
<td> Enter Password </td> 
<td> <input type = "text" name = "password" size = "30"/></td>
</tr>
<tr>
<td> <input type = "submit" value = "Submit"/></td>
</tr>
</form>
</table>
</html> 
CREATE;

extract ($_POST);
$email = $_POST["email"];
$pass = $_POST['password'];
// echo $email;
// echo $pass;

$matches = Array();
$emailfound = false;
$fh = fopen("./passwd.txt", 'r');
while (!feof($fh))
{
	$line = fgets($fh);
	$line = trim($line);
	$line = explode(":", $line);
	$matches[$line[0] = $line[1]];

	echo($line[0]);
	echo ";";
	echo ($line[1]);
}
fclose($fh);

foreach ($matches as $key => $value)
{
	if ($name == $key)
	{
		$usernamefound = true;
	}
}

if ($emailfound == true && $matches[$email]!= $pass && isset($_POST['email']) && isset($_POST["password"]))
{
	echo 'email already claimed';
}

elseif($emailfound == false)
{
	$fh = fopen("./passwd.txt", 'a');
	fwrite ($fh, "$email:$pass \n");
	fclose($fh);
	header("Location :./project.html");
	exit();
}

?>
