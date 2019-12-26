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
            <div class="item menu2"> <a id="linked" href="">Courses</a> </div>
            <div class="item menu3"><a id="linked" href="">Instructors</a> </div>
            <div class="item menu4"><a id="linked" href="">About</a></div>
            <div class="item menu5"><a id="linked" href="">Cart</a> </div>
            <div class="item menu5"><a id="linked" href="http://localhost/login.php">Log Out</a> </div>
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
                <input type="submit"  name="submit" value="Buy Now" class="buy-button">
                
            </div>

            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name2 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name2 ?></div>
                <div class="course_duration">Duration: <?php echo $duration2 ?></div>
                <div class="course_fee">Fee: <?php echo $fee2 ?></div>
                <input type="submit" value="Buy Now" class="buy-button">
            </div>
            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name3 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name3 ?></div>
                <div class="course_duration">Duration: <?php echo $duration3 ?></div>
                <div class="course_fee">Fee: <?php echo $fee3 ?></div>
                <input type="submit" value="Buy Now" class="buy-button">
            </div>
            <div class="courses">
                <div class="course_name">Course : <?php echo $course_name4 ?></div>
                <div class="course_instructor">Instructor: <?php echo $instructor_name4 ?></div>
                <div class="course_duration">Duration: <?php echo $duration4 ?></div>
                <div class="course_fee">Fee: <?php echo $fee4 ?></div>
                <input type="submit" value="Buy Now" class="buy-button">
            </div>
           
    </div>
    <div class="see_more"><a href="http://localhost/seemore.php">See More >></a></div>

    <div class="category-name-container">
    <div class="categories-name-two"><u><b>Graphics Design: </b></u></div>
        </div>

    <div class="courses_container">
    
            <div class="courses">
                <div class="course_name">Course : Design Typography T-shirts!</div>
                <div class="course_instructor">Instructor:  Jaysen Batchelor</div>
                <div class="course_duration">Duration: 1 month</div>
                <div class="course_fee">Fee: BDT900</div>
                <input type="submit" value="Buy Now"   class="buy-button">
            </div>

            <div class="courses">
                <div class="course_name">Course : Illustrator CC 2020 MasterClass</div>
                <div class="course_instructor">Instructor: Martin Perhiniak</div>
                <div class="course_duration">Duration: 2 months</div>
                <div class="course_fee">Fee: BDT1500</div>
                <input type="submit" value="Buy Now" class="buy-button">
            </div>
            <div class="courses">
                <div class="course_name">Course : Adobe Photoshop CC – Essentials Training </div>
                <div class="course_instructor">Instructor: Daniel Walter Scott</div>
                <div class="course_duration">Duration: 3 months</div>
                <div class="course_fee">Fee: BDT2500</div>
                <input type="submit" value="Buy Now" class="buy-button">
            </div>
            <div class="courses">
                <div class="course_name">Course : Graphic Design Masterclass</div>
                <div class="course_instructor">Instructor: Lindsay Marsh</div>
                <div class="course_duration">Duration: 15 Hours</div>
                <div class="course_fee">Fee: BDT6500</div>
                <input type="submit" value="Buy Now" class="buy-button">
            </div>
</div>

            <div class="see_more"><a href="http://localhost/seemore.php">See More >></a></div>


    	
</body>
</html>