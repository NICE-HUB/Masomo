<?php 
session_start();

include 'connect.php';

if(isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];

    $sql = "DELETE FROM course WHERE id = '$course_id'";
    $result2 = mysqli_query($data, $sql);

    if($result) {
        $_SESSION['message'] = 'Course deletion successful';
        header("location:admin_view_course.php");
    } else {
        $_SESSION['message'] = 'Failed to delete article';
        header("location:admin_view_course.php");
    }
} else {
    $_SESSION['message'] = 'Invalid request';
    header("location:admin_view_course.php");
}
?>
