<?php

include('../config/constants.php');
$id = $_GET['id'];

$sql = " DELETE FROM tbl_admin WHERE id=$id";

$res = mysqli_query($conn,$sql);


if($res==true){
//  create session 
$_SESSION['delete']="<div class='success'>Admin deleted  successfully</div>";
// redirect page 
header("location:".SITEURL.'admin/manage-admin.php');
}
else{
    $_SESSION['delete']="failed to delete";
    // redirect page 
    header("location:".SITEURL.'admin/manage-admin.php');
}
?>