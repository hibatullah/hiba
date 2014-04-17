<!DOCTYPE html>
<html>
<head>

<link href="/hiba/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h1 class=" text-center">Login</h1> 
 </div>
 <div class="modal-body">
<form action="checking.php" method="post">

<table class="table" style="width: 50%;" align="center" > 
<tr>
	<td>Login Id</td><td><input type="text" placeholder="ID" name="ID" id="ID"></td>
</tr>

<tr>
	<td>Password</td><td><input type="password" name="password" id="password" placeholder="password"></td>
</tr>
</table>

<center>
<input type="submit" value="login" name="login" id="login" class="btn btn-primary"><br>
<font size="3"><span class="pull-right" ><a href="register2.php">Register</a></span></font>

</center>
</form>
</div>

</div>
</div>
</div>
</body>
</html>