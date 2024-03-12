<?php 
session_start();

include 'connect.php';

if(isset($_GET['article_id'])) {
    $article_id = $_GET['article_id'];

    $sql = "DELETE FROM article WHERE id = '$article_id'";
    $result = mysqli_query($data, $sql);

    if($result) {
        $_SESSION['message'] = 'Article deletion successful';
        header("location:admin_view_article.php");
    } else {
        $_SESSION['message'] = 'Failed to delete article';
        header("location:admin_view_article.php");
    }
} else {
    $_SESSION['message'] = 'Invalid request';
    header("location:admin_view_article.php");
}
?>
