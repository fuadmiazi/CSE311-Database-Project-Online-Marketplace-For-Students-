<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "courses";

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Database Connection Failed!". $conn->connect_error);
}

$sql = "SELECT course_name, instructor_name, duration, fee FROM programming WHERE course_id=1";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name = $row['course_name'];
        $instructor_name = $row['instructor_name'];
        $duration = $row['duration'];
        $fee = $row['fee'];
    }
}

$sql = "SELECT course_name, instructor_name, duration, fee FROM programming WHERE course_id=2";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name2 = $row['course_name'];
        $instructor_name2 = $row['instructor_name'];
        $duration2 = $row['duration'];
        $fee2 = $row['fee'];
    }
}

$sql = "SELECT course_name, instructor_name, duration, fee FROM programming WHERE course_id=3";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name3 = $row['course_name'];
        $instructor_name3 = $row['instructor_name'];
        $duration3 = $row['duration'];
        $fee3 = $row['fee'];
    }
}

$sql = "SELECT course_name, instructor_name, duration, fee FROM programming WHERE course_id=4";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name4 = $row['course_name'];
        $instructor_name4 = $row['instructor_name'];
        $duration4 = $row['duration'];
        $fee4 = $row['fee'];
    }
}


$sql = "SELECT course_name, instructor_name, duration, fee FROM graphics WHERE course_id=1";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name5 = $row['course_name'];
        $instructor_name5 = $row['instructor_name'];
        $duration5 = $row['duration'];
        $fee5 = $row['fee'];
    }
}


$sql = "SELECT course_name, instructor_name, duration, fee FROM graphics WHERE course_id=2";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name6 = $row['course_name'];
        $instructor_name6 = $row['instructor_name'];
        $duration6 = $row['duration'];
        $fee6 = $row['fee'];
    }
}


$sql = "SELECT course_name, instructor_name, duration, fee FROM graphics WHERE course_id=3";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name7 = $row['course_name'];
        $instructor_name7 = $row['instructor_name'];
        $duration7 = $row['duration'];
        $fee7 = $row['fee'];
    }
}


$sql = "SELECT course_name, instructor_name, duration, fee FROM graphics WHERE course_id=4";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        $course_name8 = $row['course_name'];
        $instructor_name8 = $row['instructor_name'];
        $duration8 = $row['duration'];
        $fee8 = $row['fee'];
    }
}



?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylecourse.css">
</head>
<body>

    <div class="main-container">
        <div class="flex-container">
            <div class="item menu1"> <a id="linked" href="http://localhost/homesi.php"> Home</a></div>
            <div class="item menu2"> <a id="linked" href="http://localhost/courses.php">Courses</a> </div>
            <div class="item menu3"><a id="linked" href="http://localhost/instructors.php">Instructors</a> </div>
            <div class="item menu4"><a id="linked" href="http://localhost/about.php">About</a></div>
            <div class="item menu5"><a id="linked" href="http://localhost/cart.php">Cart</a> </div>
            <div class="item menu5"><a id="linked" href="http://localhost/logout.php">Log Out</a> </div>
        </div> 

        <div class="headline">Categories : </div>
        

    </div>

        <div class="category-name-container">
    <div class="categories-name"><u><b>Programming: </b></u></div>
        </div>
        
        <div class="courses_container">
        
            <div class="courses" action="courses.php" method="POST">

                <div class="course_name">Course: <?php echo $course_name ?> </div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name ?></div>
                <div class="course_duration">Duration: <?php echo $duration ?></div>
                <div class="course_fee">Fee: <?php echo $fee ?></div>
                
            </div>

            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name2 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name2 ?></div>
                <div class="course_duration">Duration: <?php echo $duration2 ?></div>
                <div class="course_fee">Fee: <?php echo $fee2 ?></div>
            </div>
            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name3 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name3 ?></div>
                <div class="course_duration">Duration: <?php echo $duration3 ?></div>
                <div class="course_fee">Fee: <?php echo $fee3 ?></div>
                
            </div>
            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name4 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name4 ?></div>
                <div class="course_duration">Duration: <?php echo $duration4 ?></div>
                <div class="course_fee">Fee: <?php echo $fee4 ?></div>
                
            </div>
           
    </div>
    <div class="see_more"><a href="http://localhost/seemore.php">See More >></a></div>

    <div class="category-name-container">
    <div class="categories-name-two"><u><b>Graphics Design: </b></u></div>
        </div>

    <div class="courses_container">
    
            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name5 ?></div>
                <div class="course_instructor">Instructor:  <?php echo $instructor_name5 ?></div>
                <div class="course_duration">Duration: <?php echo $duration5 ?></div>
                <div class="course_fee">Fee: <?php echo $fee5 ?></div>
                
            </div>

            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name6 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name6 ?></div>
                <div class="course_duration">Duration: <?php echo $duration6 ?></div>
                <div class="course_fee">Fee: <?php echo $fee6 ?></div>
                
            </div>
            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name7 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name7 ?></div>
                <div class="course_duration">Duration: <?php echo $duration7 ?></div>
                <div class="course_fee">Fee: <?php echo $fee7 ?></div>
                
            </div>
            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name8 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name8 ?></div>
                <div class="course_duration">Duration: <?php echo $duration8 ?></div>
                <div class="course_fee">Fee: <?php echo $fee8 ?></div>
                
            </div>
</div>

            <div class="see_more"><a href="http://localhost/seemoregraphics.php">See More >></a></div>


    	
</body>
</html>