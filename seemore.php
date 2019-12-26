

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://localhost/styleseemore.css">
    <style type= "text/css">
        table{
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: #d96459;
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
            <div class="item menu5"><a id="linked" href="http://localhost/login.php">Log Out</a> </div>
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
        <form class="form" action="seemore.php" method="POST">
        Please Input The ID Number Of The Course To Add In Cart : 
        <input type="text" name="number" value="Ex: 1">
        <button type="submit" name="sub">Submit</button>
        <div class="alert alert-error"><? $_SESSION['message'] ?></div>
        <br>
        <br>
        </form>
    </div>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "courses");
            $conn2 = mysqli_connect("localhost", "root", "", "cart");
            if($conn-> connect_error){
                die("Connection Failed:". $conn-> connect_error);
            }
            if($conn2-> connect_error){
                die("Connection Failed:". $conn2-> connect_error);
            }

            if(isset($_POST['sub'])) {
                $number = $_POST['number'];
                $sql = "SELECT course_id, course_name, instructor_name, duration, fee from programming WHERE course_id=$number";
            $result = $conn-> query($sql);

            if($result == true){
                while ($row = $result-> fetch_assoc()) {
                    $course_name = $row['course_name'];
                    $instructor_name = $row['instructor_name'];
                    $duration = $row['duration'];
                    $fee = $row['fee'];

                    
                }
                $sql2 = "INSERT INTO orders(course_name, instructor_name, duration, fee) VALUES('$course_name', '$instructor_name', '$duration, '$fee'";
                    if($conn2->query($sql2) === TRUE) {
                        $_SESSION['message']= "Registration successfull!";
                        header('location: cart.php/?error=false');
                      }
                      else {
                          $_SESSION['message']="Registration failed!";
                          header('location: seemore.php/?error=true');
                      }
                
            }
            
            }

            

            $sql = "SELECT course_id, course_name, instructor_name, duration, fee from programming";
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

            $conn-> close();
            ?>

        </body>
        </html>