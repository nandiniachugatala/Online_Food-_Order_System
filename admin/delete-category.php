<?php

include('../config/constants.php');

//check whether  img name set /not
if(isset($_GET['id']) && isset($_GET['image_name']))
{
    echo "val getted";
    $id=$_GET['id'];
    $image_name=$_GET['image_name'];

    if($image_name!= "")
    {
        $path="../images/category/".$image_name;
        //echo $path;

        $remove=unlink($path);
        //if fail to rem img add error msg
        if($remove==false)
        {
            //set session msg and redirect and stop
            $_SESSION['remove']="<div class='error'> Fail TO Remove Category. </div>";
            header("location:".SITEURL.'admin/manage-category.php');

            die();
        }
        
    }
    //sql query to delete database 
    $sql="DELETE FROM tbl_category WHERE id=$id";
    $res=mysqli_query($conn,$sql);

    //check data del/not

    if($res==true)
    {
        $_SESSION['delete']="<div class='success'> Category Deleted Successfully.</div>";
        header("location:".SITEURL.'admin/manage-category.php');


    }
    else
    {
        $_SESSION['delete']="<div class='error'>  Fail to  Delete Category.</div>";
        header("location:".SITEURL.'admin/manage-category.php');


    }



}
else{
    header("location:".SITEURL.'admin/manage-category.php');

}
?>