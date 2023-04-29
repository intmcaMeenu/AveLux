<?php
require("connect.php");
?>
<html>
<head>
<title>Ave Lux</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<style>
body
{
margin:0;
padding:0;
background-image: linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0.55)),url('backhome.jpg');
background-size:cover;
font-family:sans-serif;
}
.fm
{
width:320px;
height:420px;
background:rgb(89, 60, 60);
color:#fff;
top:50%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:70px 30px;
}
h1
{
margin-top:-25px;
padding:0 0 20px;
text-align:center;
font-size:22px;
}
p
{
margin:0;
padding:0;
font-weight:bold;
}
input
{
width:100%;
margin-bottom:20px;
}
#Username,#Password
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:15px;
font-weight:bold;
}
#s
{
height:42px;
background:#fff;
font-size:18px;
border-radius:20px;
}
a
{
text-decoration:none;
font-size:12px;
color:darkgrey;
}
.hidden {
	display: none;
}
</style>
<!--<script>
			$(document).ready(function() {
				$("#login").validate({
					rules:{
						username:{
						     required:true,
							 pattern: /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/
							 },
					    password:{
						     required:true,
						     pattern:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,10}$/
							 },
					},
					messages:{
					    username:"<b style='font-family:cursive; font-size:12px; color:red;'>Enter Valid username</b>",
						 password:"<b style='font-family:cursive; font-size:12px; color:red;'>Enter Valid password</b>",
						}
				});
			});
		</script>
		-->
</head>
<body>
<div class="fm">
<h1>𝑳𝒐𝒈𝒊𝒏 𝑯𝒆𝒓𝒆</h1>
<form action="#" method="POST" id="login">

     <input id="username" type="text" name="username" placeholder="Enter Username">

     <input id="password" type="password" name="password" placeholder="Enter Password">
 <input id="s" type="submit" value="Login" name="sub"/><br>
<a href="userregister.php">Don't have an account?</a><br><br>
<!--<a href="forgot_password.php">Fogot Password?</a><br><br>-->
<a href="index.php">Cancel</a><br><br>
<span class="hidden" style="font-family:cursive; font-size:13px; color:red;">"Username and password does not match"</span>
</div>
</form>
<?php
if(isset($_POST["sub"]))
{
	
   $un=$_POST["username"];
   $ps=$_POST["password"];
  
   session_start();
   $query="select * from tbl_login where username='$un' and password='$ps'";
   $query1="select * from tbl_admin where username='$un' and password='$ps'";
   $query2="select * from tbl_employee where email='$un' and password='$ps'";
   $re1=mysqli_query($con,$query1);
   $row=mysqli_fetch_array($re1);
   $count1=mysqli_num_rows($re1);
   $re=mysqli_query($con,$query);
   $row1=mysqli_fetch_array($re);
   $count=mysqli_num_rows($re);
   $re2=mysqli_query($con,$query2);
   $row2=mysqli_fetch_array($re2);
   $count2=mysqli_num_rows($re2);
   if($count>0 )
   {
	      if($row1['status']==0)
		  {
			$id=$row1['custid'];
		  $_SESSION['loginid']=$id;
		  header('location:indexlog.php');
		  }
   }
			
		  
   
   else if($count1>0)
   {
	      
	$id=$row['adminid'];
	$_SESSION['aid']=$id;
	$_SESSION['logout']="yes";
	header('location:/admin/main.php');

   }

   else if($count2>0)
   {
	      
	$id=$row2['empid'];
	$_SESSION['aid']=$id;
	$_SESSION['logout']="yes";
	header('location:/admin/mainemployee.php');

   }
   else
   { 
	?>
	   <script>
		document.querySelector('.hidden').classList.remove('hidden')
	   </script>
	<?php   
   }
   mysqli_close($con);
}
?>
</body>
</html>
