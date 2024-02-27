<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "masomoproject";

$data = mysqli_connect($host, $user, $password, $db);

//if($data === false){
  //  die("connection error");
//} check to see the connceton

    if(isset($_POST['sign_up'])){
        $username = $_POST['name'];
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];
        $usertype = "student"; //this means any form upload the usertype will be "student"

        //To check if the username being added already exists in the database
        $check="SELECT * FROM user WHERE username ='$username'";
        $check_user = mysqli_query($data,$check); //$data comes from the info being added to the database (checks)
        
        $row_count = mysqli_num_rows($check_user);//counting if there is multiple user(checking)same username 
        if($row_count ==1){//this means if there is on equal data exists
            echo "<script type = 'text/javascript'>
            alert('Username Already Exists.Try Another One');
            </script>";
        }else{


        $sql = "INSERT INTO user(username, email, password, usertype)
        VALUES ('$username', '$user_email', '$user_password',  '$usertype')"; //every variable should be written sequentially  from the user(which is the table name)

        $result = mysqli_query($data,$sql);

        if($result){
            echo "<script>alert('Data Upload Success');";
            echo "window.location.href = 'login.php';</script>";
        }else{
            echo "upload failed";
        }
    }
    }

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Merriweather:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
    <script src="signup.js"></script>
</head>
<body>
    <section class="container">
        <div class="section_cover">
            <img src="signup.jpg" alt="">
            <!-- <img src="https://i.ibb.co/qptSznH/balloons.webp" alt=""> -->
        </div>
        <div class="section_main">
            <h2>Sign Up</h2>
            <form action="#" method="POST">
                <div class="form_control">
                    <label for="">Username</label>
                    <input type="text" id="#" name="name" placeholder="Enter your Username" required>
                </div>
                <div class="form_control">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" required>
                </div>
                <div class="form_control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button class="login_btn" type="submit" name="sign_up">Sign up</button>
                <span class="or">Or</span>
                <button class="linkedin_btn">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff" stroke-width="0.00024000000000000003">
                        <path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z" fill="#fff"></path>
                        <path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" fill="#fff"></path>
                        <path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" fill="#fff"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#fff"></path>
                    </svg>
                    Continue with LinkedIn
                </button>
            </form>
            <div class="other_links">
                <a href="javascript:void(0)">Can't log in?</a>
                <span>&bull;</span>
                <a href="javascript:void(0)">Sign up for an account</a>
            </div>
        </div>
    </section>
</body>

</html>