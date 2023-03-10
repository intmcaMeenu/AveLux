<html>
<head>
<title>New Wave</title>
<style>
*
{
	margin:0;
	padding:0;
	outline:0;
}

.full
{
position:absolute;
top:0;
left:0;
right:0;
bottom:0;
z-index:1;
opacity:.7;
background-image: linear-gradient(rgba(0,0,0,0.20),rgba(0,0,0.20)),url('https://cdn.pixabay.com/photo/2017/03/30/18/17/girl-2189247__340.jpg');
background-size: cover;
}
img{
  width: 500px;
}
table
{
	position:absolute;
	z-index:5;
	left:30%;
	top:50%;
	transform:translate(-50%,-50%);
	width:35%;
	height:400px;
  margin-left:100px;
	background:#fafafa;
	border-collapse:collapse;
	border-spacing:0;
	box-shadow: -10px 10px 10px 10px rgba(0, 0, 0, 0.2);
}

th
{
	font-size:20px;
      font-weight: bold;
     padding-right:50px;	
	 padding-bottom:0px;
   padding-top:5px;
   line-height:20px
	   
}
td
{
	font-size:15px;
      font-weight: bold;	
      line-height:20px
}

a
{
color:black;
text-decoration:none;
}
.b1
{   
    position:relative;
    left:200px;
}
.b2
{   
    position:relative;
    left:-95px;
}
</style>
</head>
<body>
<div class="full">
<?php

   session_start();
			$loginid = $_SESSION['loginid'];
			$con=mysqli_connect("localhost","root","","db");
			$query="select * from tbl_user where custid='$loginid';";
			$q="select * from tbl_login where loginid='$loginid';";
			$re=mysqli_query($con,$query);
			$result=mysqli_query($con,$q);
			$row=mysqli_fetch_array($re);
			$row1=mysqli_fetch_array($result);
			
			
           
 ?>
 <div class="tab">
   <table>
   <tr>
   <th>  Name </th>
 <td>  <?php  echo  $row['Name'];?></td>
 
   </tr>
   <tr>
  <th>Phone </th>
   <td><?php  echo  $row['Phone'];?></td>
   </tr>
   <tr>
   <th>Username</th>
   <td><?php  echo  $row1['username'];?></td>
   </tr>
   <tr>
   <td><button class="b1"><a href="homelog.php">Cancel</a></button></td>
   <td><button class="b2"><a href="update.php">Edit</a></button></td>
  </tr>
	</div>
</div>
</body>
</html>