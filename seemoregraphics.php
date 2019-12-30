<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://localhost/graphics.css">
    <style type= "text/css">
        table{
            border-collapse: collapse;
            width: 100%;
            color: black;
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
            <div class="item menu4"><a id="linked" href="http://localhost/about.php">About</a></div>
            <div class="item menu5"><a id="linked" href="http://localhost/cart.php">Cart</a> </div>
            <div class="item menu5"><a id="linked" href="http://localhost/logout.php">Log Out</a> </div>
        </div> 
    </div>

    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Course</th>
                <th>Instructor</th>
                <th>Duration</th>
                <th>Price</th>
    

            </tr>
    </div>

    <div class="buy">
        <br>
        <form class="form" action="seemoregraphics.php" method="POST">
        Please Input The ID Number Of The Course To Add In Cart : 
        <input type="text" name="number">
        <button type="submit" onclick="myFunction()" name="sub">Submit</button>
        <script>
            function myFunction() {
            alert("Item Added to Cart Successfully!");
            }
        </script>
        <div class="alert alert-error"><? $_SESSION['message'] ?></div>
        <br>
        <br>
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
                die("Connection Failed:". $conn-> connect_error);
            }
               
            $sql = "SELECT course_id, course_name, instructor_name, duration, fee from graphics";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["course_id"] . "</td><td>". $row["course_name"]. "</td><td>".  $row["instructor_name"] . "</td><td>". $row["duration"]. "</td><td>" . $row["fee"] . "</td></tr>";
                }
                echo "</table>";
            }
            else {
                echo "0 result";
            }

            if(isset($_POST['sub'])){
                $number = $_POST['number'];
                $sql = "INSERT INTO orders (course_name, instructor_name, duration, fee) SELECT course_name, instructor_name, duration, fee FROM graphics WHERE course_id=$number";
                if($conn-> query($sql)==TRUE){
                    $_SESSION['message'] = "Added To Cart"; 
                }
                else{
                    $_SESSION['message'] = "Item Add Failed!";
                }
            }

            $conn-> close();
            ?>