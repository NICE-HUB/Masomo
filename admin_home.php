<?php
 include 'connect.php';

 // Query to count rows for the user table
$userCountSql = "SELECT COUNT(*) AS user_count FROM user";
$userCountResult = mysqli_query($data, $userCountSql);
$userRowCount = mysqli_fetch_assoc($userCountResult)['user_count'];

// Query to count rows for the article table
$articleCountSql = "SELECT COUNT(*) AS article_count FROM article";
$articleCountResult = mysqli_query($data, $articleCountSql);
$articleRowCount = mysqli_fetch_assoc($articleCountResult)['article_count'];

// Query to count rows for the course table
$courseCountSql = "SELECT COUNT(*) AS course_count FROM course";
$courseCountResult = mysqli_query($data, $courseCountSql);
$courseRowCount = mysqli_fetch_assoc($courseCountResult)['course_count'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management Admin</title>

    <!-- Combined CSS Styles -->
    <style>
        /* Your CSS styles */
        body {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }

        header {
            position: fixed;
            background: #22242A;
            padding: 20px;
            width: 100%;
            z-index: 1;
        }

        .left_area h3 {
            color: #fff;
            margin: 0px;
            text-transform: uppercase;
            font-size: 22px;
            font-weight: 900;
        }

        .left_area span {
            color: #19B3D3;
        }

        .logout_btn {
            padding: 5px;
            background: #dd3b30;
            text-decoration: none;
            float: right;
            margin-top: -30px;
            margin-right: 40px;
            border-radius: 2px;
            font-size: 15px;
            font-weight: 600;
            color: #fff;
            transition: 0.5s;
        }

        .logout_btn:hover {
            background: #aa251b;
        }

        .sidebar {
            background: #2f323a;
            margin-top: 70px;
            padding-top: 30px;
            position: fixed;
            left: 0;
            width: 250px;
            height: 100%;
            transition: 0.5s;
            transition-property: left;
            overflow-y: auto;
        }

        .sidebar .profile_image {
            width: 100px;
            height: 100px;
            border-radius: 100px;
            margin-bottom: 10px;
        }

        .sidebar h4 {
            color: #ccc;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #fff;
            display: block;
            width: 100%;
            line-height: 60px;
            text-decoration: none;
            padding-left: 40px;
            box-sizing: border-box;
            position: relative;
            transition: 0.3s ease;
        }
        .sidebar a::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background-color: #19B3D3; /* Color of the line */
    position: absolute;
    bottom: 0;
    left: 0;
    transition: width 0.5s ease; /* Transition the width of the line */
  }
  
  .sidebar a:hover::after {
    width: 50%; /* Width of the line when hovered */
  }
  
  .sidebar a:hover {
    color: #19B3D3; /* Change link color on hover */
  }

        
        .sidebar i {
            padding-right: 10px;
        }

        label #sidebar_btn {
            z-index: 1;
            color: #fff;
            position: fixed;
            cursor: pointer;
            left: 300px;
            font-size: 20px;
            margin: 5px 0;
            transition: 0.5s;
            transition-property: color;
        }

        label #sidebar_btn:hover {
            color: #19B3D3;
        }

        #check:checked~.sidebar {
            left: -190px;
        }

        #check:checked~.sidebar a span {
            display: none;
        }

        #check:checked~.sidebar a {
            font-size: 20px;
            margin-left: 170px;
            width: 80px;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .card {
            width: 200px;
            height: 150px;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            display: inline-block;
        }

        .student-card {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
        }

        .course-card {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .teacher-card {
            background: linear-gradient(135deg, #43e97b, #38f9d7);
        }
    </style>
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>

    <input type="checkbox" id="check" hidden>
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Admin Panel</h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
        <center>
            <img src="https://source.unsplash.com/random/200x200?sig=1" class="profile_image" alt="">
            <h4 class="navlink">Admin</h4>
        </center>
        
        
        <a href=""><i class="fas fa-desktop"></i><span class="navlink">Dashboard</span></a>
        <div class="dropdown">
        <a href="#"><i class="fas fa-chalkboard-teacher"></i><span class="navlink">Articles</span></a>
        <div class="dropdown-content">
        <a href="./admin_add_article.php">Add Articles</a>
            <a href="admin_view_article.php">View Articles</a>
        </div>
        </div>
        <div class="dropdown">
        <a href=""><i class="fas fa-user-graduate"></i><span class="navlink">Student</span></a>
        <div class="dropdown-content">
            <a href="admin_view_student.php">View Students</a>
            <a href="#">Enrolled Students</a>
        </div>
        </div>
        <div class="dropdown">
        <a href="#"><i class="fas fa-address-card"></i><span class="navlink">Courses</span></a>
        <div class="dropdown-content">
            <a href="./admin_add_course.php">Add Courses</a>
            <a href="#">View Courses</a>
        </div>
        </div>
        <a href=""><i class="fa-solid fa-dollar-sign"></i><span class="navlink">Fee</span></a>
        <a href=""><i class="fas fa-bullhorn"></i><span class="navlink">Notice</span></a>
    
    </div>
    <!--sidebar end-->
<br><br>
    <!--content start-->
    <div class="content">
        <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('hero-bg.svg')">
        <!-- Cards for Students, Courses, and Teachers -->
        <a href="#"><div class="card student-card" >
            <h2>Total Students</h2>
            <p><?php echo "$userRowCount"?></p>
        </div></a>
        <a href="#"><div class="card course-card">
            <h2>Total Courses</h2>
            <p><?php echo "$courseRowCount"?></p>
        </div></a>
        <a href="#"><div class="card teacher-card">
            <h2>Total Articles</h2>
            <p><?php echo "$articleRowCount"?></p>
        </div></a>
        <a href="#"><div class="card student-card">
            <h2>Enrolled Student</h2>
            <p>Number</p>
        </div></a>
        <a href="#"><div class="card teacher-card">
            <h2>Teachers</h2>
            <p>Number</p>
        </div></a>
        <a href="#"><div class="card course-card">
            <h2>Courses</h2>
            <p>Manage Course Info</p>
        </div></a>
    </div>
    <!--content end-->

</body>

</html>
