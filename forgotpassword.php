
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
height:400px;
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
#password,#cpassword
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

</head>
<body>
<div class="fm">
<h1>Create Password</h1>
<form action="#" method="POST" >

     <input id="password" type="password" name="password" placeholder="Enter Password">

     <input id="cpassword" type="password" name="cpassword" placeholder="Enter Confirm Password">
 <input id="s" type="submit" value="Reset" name="sub"/><br>
<a href="index.php">Cancel</a><br><br>
</div>
</form>
<?php
 session_start();
if(isset($_POST["sub"]))
{

   $ps=$_POST["password"];
   $con=mysqli_connect("localhost","root","","db");
   $query="update tbl_login where username='$un' and password='$ps'";
   $re=mysqli_query($con,$query);
   $row=mysqli_fetch_array($re);

   
  
   }
   mysqli_close($con);
   ?>
</body>
</html>
