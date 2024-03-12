<?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "masomoproject";

 $data = mysqli_connect($host, $user, $password, $db);

    $id = $_GET['student_id'];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($data, $sql);
    $info =$result->fetch_assoc();

    //working on the update button in order to (update)
    if(isset($_POST['update'])){ //they are the values under name attribute in input element
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //query this enables update to the new data being set
        $query = "UPDATE user SET username = '$name',email = '$email',password = '$password' WHERE id = '$id' " ;
        $result2 = mysqli_query($data,$query);//enables updation of data

        if($result2){//What displays and happens when the update button is clicked
            echo "<script>alert('Update Success!');";
            echo "window.location.href = './admin_view_student.php';</script>";//what this does is to return to the view_student.php after the  update button is clicked
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
    <title>Login Page</title>
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <!-- <img src="logo.png" alt="logo"> -->
            </div>
            <div class="login-card-header">
                <h1>Student Info</h1>
                <div>Please Update here</div>
            </div>
            <form action="#" method="POST" class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">person</span>
                    <input type="text" name="name" id="emailForm" value="<?php echo "{$info['username']}"; ?>"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" name="email"  id="emailForm" value="<?php echo "{$info['email']}"; ?>"
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="text" name="password" id="passwordForm" value="<?php echo "{$info['password']}"; ?>"
                     required>
                </div>
                
                <button type="submit" name="update">Update</button>
            </form>
            
        </div>
        <div class="login-card-social">
            <div><a href="../admin_view_student.php" style="text-decoration: none; color:black;">Other Student Options</a></div>
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