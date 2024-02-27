<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "masomoproject";

$data =mysqli_connect($host, $user, $password, $db);

//checking connection to database
if($data === false){
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $name = $_POST['name']; //value in the (name ) section under input
    $pass = $_POST['password'];

    $sql="SELECT * FROM user where username = '".$name."' AND
    password = '".$pass."' ";

    $result = mysqli_query($data,$sql);
    $row = mysqli_fetch_array($result);

    if($row["usertype"] == "student")
    {
        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "student";
        header("location:../GUEST/user.php");
    }

    elseif($row["usertype"] == "admin")
    {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = "admin";
        header("location:../GUEST/user.php"); 
    }
    else{
        //if this when the info doesnt match
        $message = "<span style='color: #FF6868;'>Username or password do not match</span>";
        //store data in the session
        $_SESSION['loginMessage'] = $message;
        //where the message will show
        header("location: login.php");
    }
    
}

?>