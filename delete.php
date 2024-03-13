<?php 
session_start();

  include 'connect.php';

  if($_GET['student_id']){
    $user_id = $_GET['student_id'];

    $sql = "DELETE FROM user WHERE id = '$user_id'";
    $result = mysqli_query($data, $sql);

    if($result){
        $_SESSION['message'] = 'Delete Student is Successful';
        header("location:admin_view_student.php");
    }else {
      $_SESSION['message'] = 'Failed to delete article';
      header("location:admin_view_student.php");
  }
}
  ?>