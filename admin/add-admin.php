<?php include('partials/menu.php');?> 

   <div class="main-content">
    <div class="wrapper"> <br><br>
        <h1>Add Admin</h1> <br><br>


        <?php 
        if (isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset( $_SESSION['add']);
        }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>

                <tr>
                    <td>UserName:</td>
                    <td><input type="text" name="username" placeholder="Enter Your UserName"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" placeholder="Enter Your Password"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add_Admin" class="btn-secondary">
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
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
   
   
//    2. SQL Query to save the data into databaase 
    $sql = "INSERT INTO tbl_admin SET
      
    full_name ='$full_name',
    username ='$username',
    password ='$password'
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
        $_SESSION['add']="Admin added  successfully";
        // redirect page 
        header("location:".SITEURL.'admin/manage-admin.php');
        }

        else
        {
           //Failed to Insert Data
        // echo "Failed to Insert Data";
        $_SESSION['add']="Failed to add admin";
        // redirect page 
        header("location:".SITEURL.'admin/add-admin.php');
        }
    }
    ?>