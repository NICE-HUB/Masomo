<?php

session_start();
  include 'connect.php';

  $sql = "SELECT * FROM article ";
  $result = mysqli_query($data, $sql);//accessing data in the database


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
    <link rel="stylesheet" href="home/style.css">

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
        <a href=""><i class="fas fa-chalkboard-teacher"></i><span class="navlink">Articles</span></a>
        <div class="dropdown-content">
            <a href="./admin_add_article.php">Add Articles</a>
            <a href="#">View Articles</a>
        </div>
        </div>
        <div class="dropdown">
        <a href="admin_student.html"><i class="fas fa-user-graduate"></i><span class="navlink">Student</span></a>
        <div class="dropdown-content">
            <a href="./admin_view_student.php">View Students</a>
            <a href="#">Enrolled Students</a>
        </div>
        </div>
        <div class="dropdown">
        <a href=""><i class="fas fa-address-card"></i><span class="navlink">Courses</span></a>
        <div class="dropdown-content">
            <a href="./admin_add_course.php">Add Courses</a>
            <a href="./admin_view_course.php">View Courses</a>
        </div>
        </div>
        <a href=""><i class="fa-solid fa-dollar-sign"></i><span class="navlink">Fee</span></a>
        <a href=""><i class="fas fa-bullhorn"></i><span class="navlink">Notice</span></a>
    
    </div>
    <!--sidebar end-->
<br><br>
    <!--content start-->
    <main style="margin-left: 300px; margin-top: 40px; width: 75vw;" class="table" id="customers_table">
        <section class="table__header">
            <h1>Articles View Table</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img class="imgsearch" src="home/images/search.png" alt="">
            </div>
            <div class="export__file" style="padding-right: 30px;">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Username <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Article <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Description<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Update <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Delete <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while ($info = $result ->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo "{$info['id']}"; ?></td>
                        <td> <img src="<?php echo "{$info['image']}"; ?>"alt=""><?php echo "{$info['image']}"; ?> </td>
                        <td><?php echo "{$info['name']}"; ?></td>
                        <td><?php echo "{$info['description']}"; ?></td>
                        <td>
                            <p class="status delivered"><?php
                echo "<a class='status delivered' style='text-decoration: none;' href='./admin_update_article.php?article_id={$info['id']}'> Update</a>";?></p>
                        </td>
                        <td><p class="status cancelled"><?php
                echo "<a class='status cancelled' style='text-decoration: none;' onClick=\"javascript:return confirm('Are You Sure to Delete this'); \" href='delete_article.php?article_id={$info['id']}'>Delete</a>"?></p></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <!--content end-->

</body>

</html>
