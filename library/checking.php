<?php
$id=$_POST["ID"];
$password=$_POST["password"];

if ($id!="" && $password!="")
{
	header ("Location: main_page.php");
}

else 
{	
header ("Location: form.php");
}
?>