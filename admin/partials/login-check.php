<?php
//Authorization - Access Control
//CHeck whether the user is logged in or not
if(!isset($_SESSION['user'])) //IF user session is not set
{
    $_SESSION["no-login-message"]="<div class = 'error'>please login to access admin panel.</div>";
    header('location:'.SITEURL.'admin/login.php');
}
?>