<?php
require("connect.php");
?>
<?php


  if(isset($_POST['password_reset']))
  {
    $email=$_GET['email'];
    $npass=$_POST['new_password'];
    $cnewpass=$_POST['cnew_password'];
    $token=$_GET['token'];
    if(!empty($token))
    {
        if(!empty($token) && !empty($npass) && !empty($cnewpass))
        {
            $check_token="SELECT verify_token from tbl_login where verify_token='$token'";
            $check_token_run=mysqli_query($con, $check_token);
            if(mysqli_num_rows($check_token_run)>0)
            {
                if($npass=$cnewpass)
                {
                    $updatepassword="UPDATE tbl_login SET password='$npass' where verify_token='$token'";
                    $updatepassword_run=mysqli_query($con, $updatepassword);
                    if($updatepassword_run)
                    {
                        echo "<script> alert('Password Updated'); </script>";
                        //header('location:login.php');
                    }
                }
                else{
                    echo "<script> alert('Password not match'); </script>";
                    //header('location:change_password.php');
                }
            }
        }
        else
        {
            echo "<script> alert('invalid'); </script>";
            //header('location:change_password.php');
        }
    }
    else
    {
        echo "<script> alert('No token'); </script>";
        //header('location:change_password.php');
    }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="assets/images/logo1.png" />
    <link rel="stylesheet" href="assets/css/css1/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css1/fontawsom-all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css" />
    <script src="assets/js/validate.js"></script>
    <style>
      .error-message
      {
        color:red;
        font-size:15px;

      }
    </style>
</head>

<body class="h-100">
  <!-- ################# Header Starts Here#######################--->
  
<!--##################### Header Ends Here #####################-->
<center>
<div class="col-xl-5 ml-5 mt-5  ">
    <div class="card border-2" style="  background-color:rgb(255, 229, 229) ">
    
        <h2 class="mt-2">Change Password</h2>
        <form action="" method="POST">
            <div class="user-box mt-3">
            <label>New Password</label>
                <input type="password" name="new_password" id="password" onkeyup="validatePassword()" required="">
                
            </div>
            <div class="user-box mt-3">
            <label>Confirm New Password</label>
                <input type="password" name="cnew_password" id="cpassword" onkeyup="validateForm()" required="">
                
            </div>
          
            <button type=submit name="password_reset" id="signup_btn">Update Paasword</button>
        </form>
        <p class="no-c mt-2">Already have an Account? <a href="login.php" style="color:#2030F4;font-weight:bold;">Login</a></p>
    </div>
      
</div>
    </center>
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/script.js"></script>
<script src="assets/js/validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
