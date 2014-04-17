<?php
$name=$_POST["Name"];
$email=$_POST["email"];
$ic_number=$_POST["ic_number"];
$phone_number=$_POST["phone_number"];
if ($name!="" && $email!="" && $ic_number!="" && $phone_number!="")
{
	header ("Location: main_page.php");
}

else 
{	
header ("Location: register2.php");
}
?>