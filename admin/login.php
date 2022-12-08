<?php include('../config/constants.php');?>
<html>
<head>
<title>Login - Food Order System</title>
<link rel="stylesheet" href="./css/admin.css">
<style>
    body{
    padding: 0;
    margin: 0;
    background: url(../images/bg.jpg) no-repeat;
    background-size: cover;
    }
  
    form p{
        font-size: 15px;
        padding: 1px;
        text-align: center;
    }
    form input{
        outline: 0;
        border-radius: 10px;
        background: #F2F2F2;
        width: 100%;
        height:5%;
        border: 0;
        margin:0 0 15px;
        box-sizing:border-box;
        font-size:14px;

    }

    form input:hover{
        background-color: #D3F8F9;
        transition: all 1s ease 0s;
    }
    form input:focus {
        background-color: #D3F8F9;
        transition: all 1s ease Øs;
        }

        form button{
        text-transform: uppercase;
        outline: 0;
        border-radius: 10px;
        background: #1ADBE5;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        cursor: pointer;
        }


        form button:hover, .form button:active, .form button:focus {
    background-color: #06C5CF;
    transition: all 1s ease 0s;
    }
    
    form .message{
        margin: 15px 0 0;
        color: #B3B3B3;
        font-size: 12px;
        }
    form .message a{
        color: #06C5CF;
        text-decoration: none;
        }

</style>
</head>
<body>
<div class="login">
    <p><h1 class = "text-center" >Login</h1>
</p>
<br><br>

<?php
if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);

        }

        if(isset( $_SESSION["no-login-message"])){
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>
        <br><br>
<!-- Login Form Starts HEre -->
<form action="" method="POST"  >
Username: <br>
<input type="text"   name="username" placeholder="Enter Username"><br><br>
Password: <br> 
<input type="password"  name="password" placeholder="Enter Password"><br><br>
<input type="submit" name="submit" value="Login" class="btn-primary">
<br><br>
</form>
<!-- Login Form Ends HEre -->
<br>

</div>
</body>
</html>


<?php
//CHeck whether the Submit Button is Clicked or Not
if(isset($_POST['submit']))
{ 
    //Process for Login
    //1. Get the Data from Login form
    $username = $_POST['username'];
    $password = md5($_POST['password']);
     
    //2. SQL to check whether the user with username and password exists or not

    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ";

    
 //3. Execute the Query
       $res = mysqli_query($conn,$sql);


    // 4. Count rows to check whether the user exists or not

    $count = mysqli_num_rows($res);
    if ($count==1)
    {
        //User Available and Login Success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username;
        //REdirect to Home Page/Dashboard
        header('location: '.SITEURL.'admin/');
    }
    else
    {
        //User not Available and Login FAil
        $_SESSION['login'] = "<div class='error'>username or password didnot match .</div>";
        //REdirect to Home Page/Dashboard

        header('location:'.SITEURL.'admin/login.php');
}

}


?>