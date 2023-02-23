<?php
 session_start();
 if(isset($_SESSION['loginid']))
 {
	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ave Lux</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
 </label> 
<div class="sidebar">
        <b><header>Hello,
            <?php
            $loginid= $_SESSION['loginid'];
			$con=mysqli_connect("localhost","root","","db");
			$query="select * from tbl_user where custid='$loginid';";
			$re=mysqli_query($con,$query);
			$row=mysqli_fetch_array($re);
            echo  $row['Name'];
            ?>
        </b>
        </header>
        <ul>
        <p><b>Dashboard</p><br>
        <p class="fas duotone fa-eye">&nbsp;&nbsp;View Profile</a></p>
        <p class="fas sharp fa-solid fa-pen">&nbsp;&nbsp;Update Profile</p><br>
        <p class="fas solid fa-download">&nbsp;&nbsp;Membership</p><br>
        <p class="fas fa-sign-out-alt">Log Out</p><br>
         
       </ul>
    </div>
    <div class="main">
        <div class="heading">
            <ul><h1 style="margin-left:180px; margin-top:-20px;">
                <button>Home</button>
                <li>Services</li>
                <li>About us</li>
            </ul>
        </div>
        <div class="body-section">
        <h1>AVE LUX PARLOUR</h1>
        <p style="font-family:Edwardian Script ITC; font-size:15px;">Beauty begins the moment you decide to be yourself </p>
        <span>
             <button >BOOK</button>
             <button  class="contact">CONTACT</button>
       </span>

        </div>
    </div>
   

</body>
</html>
<?php
 }
 else
 {
	 header("Location:userlogin.php");
 }
 ?>