<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "accounts";

$connection = new mysqli($host, $user, $password, $db);

if(isset($_POST['username'])){
    
    $uname = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "select * from users where username='$uname'";
    
    $result = $connection->query($sql);
    
    if ($result->num_rows == 1) {
		
		$row = $result->fetch_assoc();

		if (password_verify($password, $row["password"])) {
			header("Location: ./homesi.php");
		} else {
			header("Location: ./login.php?wrong=wrong password");
		}

        exit();
	}
	
    else{
		//echo " You Have Entered Incorrect Username";
		header("Location: ./login.php?wrong=wrong username");
        exit();
    }
        
}

?>


<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/stylelogin.css">
<body>

	<?php

		$msg = "";

		if (isset($_GET["wrong"])) {
			$msg = $_GET["wrong"];
		}

	?>

	<div class="container">
	<img src="http://localhost/login.JPG"/>
		<h1> <?php echo "$msg"  ?> </h1>
		<form method="POST" action="/index.php">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" value="LOGIN" class="btn-login"/>
			<div class="regi"> <a id="linked" href="http://localhost/register.php"> Don't have an account? </a> </div>
		</form>
	</div>
</body>
</html>