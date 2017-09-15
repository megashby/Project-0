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

?>
