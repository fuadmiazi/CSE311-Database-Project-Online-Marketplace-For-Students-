<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="graphics.css">
    <style type=text/css>
        h1{
            padding-top:200px;
            text-align:center;
        }
        .yes{
            background-color: red;
            border: none;
            color: white;
            padding: 15px 25px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            margin-left: 625px;
        }
        .no{
            background-color: green;
            border: none;
            color: white;
            padding: 15px 25px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            margin-left: 100px;
        }
        </style>
    
</head>
<body>
<div class="main-container">
        <div class="flex-container">
            <div class="item menu1"> <a id="linked" href="http://localhost/homesi.php"> Home</a></div>
            <div class="item menu2"> <a id="linked" href="http://localhost/courses.php">Courses</a> </div>
            <div class="item menu3"><a id="linked" href="">Instructors</a> </div>
            <div class="item menu4"><a id="linked" href="">About</a></div>
            <div class="item menu5"><a id="linked" href="http://localhost/cart.php">Cart</a> </div>
        </div> 
    </div>
<div class="question">
<h1>Are You Sure You Want To Log Out?</h1>
<!--<button class="yes" name="yess" action="logout.php" method="POST" type="submit">Yes</button> 
<button class="no" name="noo" action="logout.php" method="POST" type="submit">No</button>
    -->
    <form class="form" action="logout.php" method="POST">
        <button class="yes" type="submit" name="yes">Yes</button>
        <button class="no" type="submit" name="no">No</button>
    </form> 
</div>

</body>    

</html>

<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "courses";

    $conn = mysqli_connect($host, $user, $password, $dbname);
    if($conn-> connect_error){
    die("Connection failed!". $conn-> connect_error);
    }
    
    if(isset($_POST['yes'])){
    $sql="DELETE FROM orders";
    $result = $conn-> query($sql);
        if($result == TRUE){
            header('location: index.php/?error=false');
        }
        else{
            header('location: logout.php/?error=true');
        }
    }
    
    if(isset($_POST['no'])){
        header('location: homesi.php');
    }



?>