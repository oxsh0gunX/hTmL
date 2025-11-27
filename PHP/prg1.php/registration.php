<!doctype html>
<html>
<head>
<title>form validation</title>
<script>
function validateform()
{
var password=document.forms["regform"] ["password"].value;
if(password.length<6)
{
alert("password must be atleast 6 character");
return false;
}}
</script>
</head>
<body>
<h1>REGISTRATION FORM</h1>
<form name="regform" method="POST" onsubmit="return validateform()">
<label>Name:</label>
<input type="text" name="name"><br><br>
<label>Email:</label>
<input type="email" name="email"><br><br>
<label>Mobile:</label>
<input type="text" name="mobile"><br><br>
<label>Username:</label>
<input type="text" name="username"><br><br>
<label>Password:</label>
<input type="password" name="password"><br><br>
<input type="submit" name="submit" value="register">
</form>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$username=$_POST['username'];
$password=$_POST['password'];

echo "<h3>Registration Successful</h3>";
echo "name:$name<br>";
echo "email:$email<br>";
echo "mobile:$mobile<br>";
echo "username:$username<br>";
echo "password:$password<br>";
}
?>
</body>
</html>
