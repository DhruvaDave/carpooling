<?php
error_reporting(0);
session_start();
unset($_SESSION['id']);
session_destroy();
header('location:http://localhost/project1/forms1/home.php');

?>