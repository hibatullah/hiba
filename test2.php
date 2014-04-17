<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>REGISTER</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/hiba/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <style type="text/css">
            .modal-footer {   border-top: 3px; }
        </style>
    </head>
    
    <body>
    <center>
    


        
      <!--register modal-->
      <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h1 class="text-center">REGISTER</h1>
               </div>

               <div class="modal-body" >

                  <form method="post" action="" class="form col-md-15 center-block"> 

                  <tbody>
<tr>

    <td><label for="fname">First Name:</label></td>
    <td><div class="input-container">
    <input name="fname" id="fname" type="text" />
    </div></td>

</tr>
<tr>

    <td><label for="lname">Last Name:</label></td>
    <td><div class="input-container">
    <input name="lname" id="lname" type="text" />
    </div></td>

</tr>
<tr>

    <td><label for="email">Your Email:</label></td>
    <td><div class="input-container">
    <input name="email" id="email" type="text" />
    </div></td>

</tr>
<tr>

    <td><label for="pass">New Password:</label></td>
    <td><div class="input-container">
    <input name="pass" id="pass" type="password" />
    </div></td>

</tr>
<tr>

    <td><label for="sex-select">I am:</label></td>
    <td>
    <div class="input-container">
    <select name="sex-select" id="sex-select">
    <option value="0">Select Sex:</option>
    <option value="1">Female</option>
    <option value="2">Male</option>
    </select>

    </div>
    </td>
</tr>
<tr>
    <td><label>Birthday:</label></td>
    <td>

    <div class="input-container">

    <select name="month">
    <option value="0">Month:</option>
    <?=generate_options(1,12,'callback_month')?>
    </select>

    <select name="day">
    <option value="0">Day:</option>
    <?=generate_options(1,31)?>
    </select>

    <select name="year">
    <option value="0">Year:</option>
    <?=generate_options(date('Y'),1900)?>
    </select>

    </div>

    </td>

</tr>
<tr>

    <td>&nbsp;</td>
    <td><input type="submit" class="greenButton" value="Sign Up" />
    <img id="loading" src="img/ajax-loader.gif" alt="working.." />
    </td>

</tr>

</tbody>

                     
                     
                 
                </form>
            </div><!-- //modal body -->
            <div class="modal-footer">
        
            </div>
          </div>
        </div>
      </div>
        
      <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script type='text/javascript' src="/hiba/bootstrap/js/bootstrap.min.js"></script>
      <script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
      </script>
      </center>
    </body>
</html>






