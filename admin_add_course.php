<?php
 session_start();

 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "masomoproject";

 $data = mysqli_connect($host, $user, $password, $db);
 if(isset($_POST['add_course'])){
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $weeks = $_POST['weeks'];
    $level = $_POST['level'];
    $cash = $_POST['cost'];
    $file = $_FILES['image']['name'];
    $dst = "./image/".$file;
    $dst_db = "image/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst);//the first section $_FILES['image']['name'] is the file name then second part $dst is the file destination
        
    //query
    $sql = "INSERT INTO course (name,description,weeks,level,cost,image)
            VALUE('$name','$desc','$weeks','$level','$cash','$dst_db')";
    $result2 = mysqli_query($data,$sql);

    if($result2){
        header('location: ./admin_view_course.php');
    }else{
        echo "Error: " . mysqli_error($data);
    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_style.css"/>
    <link rel="stylesheet" href="admin_reset.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Admin_add_course</title>
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <!-- <img src="logo.png" alt="logo"> -->
            </div>
            <div class="login-card-header">
                <h1>Course Info</h1>
                <div>Please Update here</div>
            </div>
            <form action="#" method="POST" class="login-card-form"  enctype="multipart/form-data">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">person</span>
                    <input type="text" name="name" id="emailForm" placeholder="Course name"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <textarea name="description" id="" cols="20" rows="3" placeholder="Course Description" 
                    autofocus required></textarea>
                </div>
                <div class="form-item">
                <!-- <span class="material-symbols-outlined">calendar_month</span> -->
                    <input type="text" name="weeks" id="emailForm" placeholder="Number Weeks"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <input type="text" name="level" id="emailForm" placeholder="Course Level"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">money</span>
                    <input type="text" name="cost" id="emailForm" placeholder="Cash Amount"
                    autofocus required>
                </div>
            
                
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <input type="file" name="image" id="" 
                    required>
                </div>
                
                <button type="submit" name="add_course">Add</button>
            </form>
            
        </div>
        <div class="login-card-social">
            <div><a href="./admin_view_course.php" style="text-decoration: none; color:black;">Other Articles Options</a></div>
            <div class="login-card-social-btns">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</body>

</html>