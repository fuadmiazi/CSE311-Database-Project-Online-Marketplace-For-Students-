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
            <div class="item menu2"> <a id="linked" href="">Courses</a> </div>
            <div class="item menu3"><a id="linked" href="">Instructors</a> </div>
            <div class="item menu4"><a id="linked" href="">About</a></div>
            <div class="item menu5"><a id="linked" href="http://localhost/cart.php">Cart</a> </div>
            <div class="item menu5"><a id="linked" href="http://localhost/login.php">Log Out</a> </div>
        </div> 
    </div>
<div class="question">
<h1>Are You Sure You Want To Log Out?</h1>
<button class="yes" type="submit">Yes</button> 
<button class="no" type="submit">No</button> 
</div>

</body>    

</html>