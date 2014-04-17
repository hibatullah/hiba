<!DOCTYPE HTML> 
<html>

<body> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = test_input($_POST["gender"]);
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h1>Pendaftaran Masuk</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Website: <input type="text" name="website">
   <br><br>
   Comment: <textarea name="comment" rows="8" cols="45"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="Female">Female
   <input type="radio" name="gender" value="Male">Male
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
<?php
function $data
?>
<?php
echo "<h2>Your Input:</h2>";
echo "Your Name:	$name";
echo "<br>";
echo "Email:	$email";
echo "<br>";
echo "Websites:	$website";
echo "<br>";
echo "You Comment:	$comment";
echo "<br>";
echo "Gender:	$gender";
?>

</body>
</html>