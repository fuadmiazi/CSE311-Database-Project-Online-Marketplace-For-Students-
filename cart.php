<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://localhost/cart.css">

    <style type= "text/css">
        table{
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
        }
        th{
            background-color: black;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>

    <div class="main-container">
        <div class="flex-container">
            <div class="item menu1"> <a id="linked" href="http://localhost/homesi.php"> Home</a></div>
            <div class="item menu2"> <a id="linked" href="http://localhost/courses.php">Courses</a> </div>
            <div class="item menu3"><a id="linked" href="">Instructors</a> </div>
            <div class="item menu4"><a id="linked" href="">About</a></div>
            <div class="item menu5"><a id="linked" href="">Cart</a> </div>
            <div class="item menu5"><a id="linked" href="http://localhost/logout.php">Log Out</a> </div>
        </div> 
    

    <div class="table">
        <table>
            <tr>
                <th>Course</th>
                <th>Instructor</th>
                <th>Price</th>
            </tr>
            
    </div>
    </div>
    
    
    <!--<div class ="total-amount">
        <h1>Total Amount: <?php echo $totalmoney ?> </h1> 
    </div>
    -->
</body>
</htmL>

<?php

            $host = "localhost";
            $user = "root";
            $password = "";
            $dbname = "courses";

            $conn = mysqli_connect($host, $user, $password, $dbname);
            if($conn-> connect_error){
                die("Connection Failed:". $conn-> connect_error);
            }
               
            $sql = "SELECT course_name, instructor_name, fee from orders";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".  $row["course_name"]. "</td><td>".  $row["instructor_name"] .  "</td><td>" . $row["fee"] . "</td></tr>";
                }
                echo "</table>";
            }
            else {
                echo "0 result";
            }

            
            
           
            $sql ="SELECT SUM(fee) AS Total FROM orders";
            $result = $conn-> query($sql);
            if($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()) {
                    $totalmoney = $row['Total'];
                    echo "Total Amount: ".$totalmoney;
                }
            }
            



            $conn-> close();
?>