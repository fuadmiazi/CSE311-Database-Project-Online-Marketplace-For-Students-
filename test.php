<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("accounts", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into users(name, username, email, password) values ('$name', '$username', '$email', '$password')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>


<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="test.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Register Your Informations.</h2>
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Username:</label>
<input class="input" name="username" type="text" value="">
<label>Email:</label>
<input class="input" name="email" type="text" value="">
<label>Password:</label>
<input class="input" name="password" type="text" value="">
<label>Confirm Password:</label>
<input class="input" name="confirmpassword" type="text" value="">
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</body>
</html>
