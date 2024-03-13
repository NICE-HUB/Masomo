<?php
session_start();
session_destroy();

header("location:./FORMS/login.php");

?>