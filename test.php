<!DOCTYPE html>
<html>
  <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>REGISTER</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       

        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <style type="text/css">
            .modal-footer {   border-top: 3px; }
        </style>
    </head>

<body>
<center>
<div class="form-title">Register</div>


<form id="regForm" action="Register.php" method="post">
<table>
<tbody>
<tr>

    <td><label for="name">Name: </label></td>
    <td><div class="input-container">
    <input name="name" id="name" type="text" />
    </div></td>

</tr>
<tr>

    <td><label for="ic_number">IC Number: </label></td>
    <td><div class="input-container">
    <input name="ic_number" id="ic_number" type="text" />
    </div></td>

</tr>
<tr>

    <td><label for="email">Your Email:</label></td>
    <td><div class="input-container">
    <input name="email" id="email" type="text" />
    </div></td>

</tr>
<tr>

    <td><label for="phone_number">Phone Number:</label></td>
    <td><div class="input-container">
    <input name="phone_number" id="phone_number" type="text" />
    </div></td>

</tr>
<tr>

    <td><label for="gender">Gender:</label></td>

   
    <td><input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male</td>


    
    </td>
</tr>



</tbody>
</table>

</form>

<div id="error">
&nbsp;
</div>

</div>
</center>
</body>
</html>
