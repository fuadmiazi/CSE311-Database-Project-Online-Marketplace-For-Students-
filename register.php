<?php 

session_start();

// initializing variables
$host = "localhost";
$user = "root";
$password = "";
$dbname = "accounts";
$errors = array(); 

// connect to the database
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];

  if ($password != $confirmpassword) {
    array_push($errors, "The two passwords do not match");
  }
  
    $password = password_hash($password, PASSWORD_DEFAULT);
	  $sql = "INSERT INTO users (name, username, email, password) VALUES('$name', '$username', '$email', '$password')";
          
  	if($conn->query($sql) === TRUE) {
        $_SESSION['message']= "Registration successfull!";
        header('location: index.php/?error=false');
      }
      else {
          $_SESSION['message']="Registration failed!";
          header('location: register.php/?error=true');
      }
  	
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/styleregi.css">
    <style type="text/css">
      .login{
          text-align: center;
          background-color: #00aeff;
          font-size: 1.5em;
          margin-top: 15px;
  }
    
    </style>

<body>
<!--<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="style2/css"/>
<link rel="stylesheet" href="form.css" type="style2/css">-->
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="register.php" method="POST">
      <div class="alert alert-error"><? $_SESSION['message'] ?></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div> -->
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <div class="login"> <a id="linked" href="http://localhost/index.php"> Already have an account? </a> </div>
    </form>
  </div>
</div>
</body>
</html>