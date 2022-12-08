<?php include('partials/menu.php');?> 

   <div class="main-content">
    <div class="wrapper"> <br><br>
        <h1>Add Category </h1> <br><br>


        <?php 
        if (isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset( $_SESSION['add']);
        }if (isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset( $_SESSION['upload']);
        }
        ?>

        <br> <br>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td><input type="text" name="title" placeholder="Category Title"></td>
                </tr>

                <tr>
                    <td>Select Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                    <input type="radio" name="featured" value="Yes">Yes
                    <input type="radio" name="featured" value="No">No
                    
                    </td>

                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                    <input type="radio" name="active" value="Yes">Yes
                    <input type="radio" name="active" value="No">No
                    
                    </td>

                   </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
                
            </table>

        </form>
    </div>

   </div>


   <?php include('partials/footer.php');?> 


   <?php
   if(isset($_POST['submit']))
   {
    // Button clicked
   //echo "Button Clicked";


//    1. get the data ffrom the form 
    $title = $_POST['title'];
    
    if(isset($_POST['featured']))
    {
        $featured=$_POST['featured'];
    }
    else
    {
        $featured="No";
    }
    if(isset($_POST['active']))
    {
        $active=$_POST['active'];
    }
    else
    {
        $active="No";
    }
   
    //check img selected or not

 //   print_r($_FILES[]);
   // die();
   if(isset($_FILES['image']['name']))
   {
    $image_name=$_FILES['image']['name'];

    //upload img if img is selected
    if($image_name!="")
    {

    
        //renameing img
        $ext=end(explode('.',$image_name));
        //rename img
        $image_name="Food_Category_".$image_name.rand(000,999).'.'.$ext;

        $source_path=$_FILES['image']['tmp_name'];
        $destination_path="../images/category/".$image_name;

        //upload img
        $upload= move_uploaded_file($source_path,$destination_path);
        //check img uploaded or not
        if($upload==false)
        {
            $_SESSION['upload']="<div class='error'>  Fail to Upload Image.</div>";
            header('location:'.SITEURL.'admin/add-category.php');
            die();
        }
    }
    

   }
   else
   {
    $image_name="";
   }

//    2. SQL Query to save the data into databaase 
    $sql = "INSERT INTO tbl_category SET
      
    title ='$title',
    image_name='$image_name',
    featured ='$featured',
    active ='$active'
    ";
    // echo $sql;

    //3. Execute Query and Save Data in Database
       
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
    
    //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
        // //Data Inserted
        // echo "Data Inserted";

        // CREATE SESSION VARIABLE TO DISPLAY  MESSAGE 
        $_SESSION['add']="<div class='success'>Category  added  successfully </div>";
        // redirect page 
        header("location:".SITEURL.'admin/manage-category.php');
        }

        else
        {
           //Failed to Insert Data
        // echo "Failed to Insert Data";
        $_SESSION['add']="<div class='error'>Category   not added  successfully </div>";
        // redirect page 
        header("location:".SITEURL.'admin/add-category.php');
        }
    }
    ?>