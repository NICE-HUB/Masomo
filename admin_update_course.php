<?php
 session_start();
 include 'connect.php';

    //query to get info from database to render in the form input section of the clicked teacher(NB id needed)
    if($_GET['course_id']){
    $id = $_GET['course_id'];
    $sql = "SELECT * FROM course WHERE id = '$id'";
    $result2 = mysqli_query($data, $sql);
    $info = $result2->fetch_assoc();
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $weeks = $_POST['weeks'];
        $level = $_POST['level'];
        $cash = $_POST['cost'];
        $file = $_FILES['image']['name'];
        $dst = "./image/".$file;
        $dst_db = "image/".$file;

        move_uploaded_file($_FILES['image']['tmp_name'],$dst);
        //sql query
        //this shows the image stored in the folder
        if($file){
            $sql = "UPDATE course SET name = '$name', description = '$desc', weeks = '$weeks', level = '$level', cost = '$cash', image = '$dst_db' WHERE id = '$id'";
        }
        else{
            $sql = "UPDATE course SET name = '$name', description = '$desc', weeks = '$weeks', level = '$level', cost = '$cash', WHERE id = '$id'";
        }
        $result2 = mysqli_query($data,$sql);

        if($result2){
            header('location: admin_view_course.php');
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
    <title>Admin_Update_course</title>
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <!-- <img src="logo.png" alt="logo"> -->
            </div>
            <div class="login-card-header">
                <h1>Course form</h1>
                <div>Please Update here</div>
            </div>
            <form action="#" method="POST" class="login-card-form"  enctype="multipart/form-data">
            <input type="text" name="id" value="<?php echo"{$info['id']}" ?>" hidden>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">person</span>
                    <input type="text" name="name" id="emailForm" value="<?php echo"{$info['name']}" ?>"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <textarea name="description" id="" cols="20" rows="3" placeholder="Course Description" 
                    autofocus required><?php echo"{$info['description']}" ?></textarea>
                </div>
                <div class="form-item">
                <!-- <span class="material-symbols-outlined">calendar_month</span> -->
                    <input type="text" name="weeks" id="emailForm" value="<?php echo"{$info['weeks']}" ?>"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <input type="text" name="level" id="emailForm" value="<?php echo"{$info['level']}" ?>"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">money</span>
                    <input type="text" name="cost" id="emailForm" value="<?php echo"{$info['cost']}" ?>"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <img src="<?php echo"{$info['image']}" ?>"width="100px" height="100px" alt="">
                </div>
                
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <input type="file" name="image" id="" 
                    required>
                </div>
                
                <button type="submit" name="update">Update</button>
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
