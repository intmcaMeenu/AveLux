

<html>
<head>
<title>Ave Lux</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<style>

.full
{
height:115%;
background-image: linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0.55)),url('backhome.jpg');
background-size:cover;
font-family:sans-serif;
margin-top:-20px;
margin-left:-10px;
margin-right:-20px;
width:200vh;
}
.signform
{
width:500px;
height:95%;
background:rgb(89, 60, 60);
color:#fff;
margin-top:48vh;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:45px 28px;
}
h2
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
font-weight:medium;
}
input
{
width:100%;
margin-bottom:20px;
}
#nm,#ph,#Username,#password1,#password2
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
font-weight:bold;
}
a
{
text-decoration:none;
color:black;
}
#submit
{
height:42px;
width:90px;
background:#fff;
font-size:20px;
border-radius:20px;
color:black;
}
#lg
{
text-decoration:none;
font-size:14px;
color:darkgrey;
}
#q
{
    color:white;
}
</style>
    <script>
	var v1=0;
	var v2=0;
	var v3=0;
	var v4=0;
	var v5=0;
	var v6=0;
 

        $(document).ready(function () 
		{
            $("#error1").hide();
            $("#error2").hide();
            $("#error3").hide();
			$("#error4").hide();
			$("#error5").hide();
			$("#error6").hide();
            $("#error7").hide();
            $("#error8").hide();
			$("#exist").hide();

			var name = /^[a-zA-Z\s]*$/;
            $("#nm").keyup(function () {
                x = document.getElementById("nm").value;
                if (name.test(x) == false) {
                     v1 = 1
                    $("#error1").show();
                }
                else if (name.test(x) == true) {
                   v1 = 0;
                    $("#error1").hide();
                }
            });
			
            var mobile = /^[6-9][0-9]{9}$/;
            $("#ph").keyup(function () {
                x = document.getElementById("ph").value;
                if (mobile.test(x) == false) {
                    v2 = 1
                    $("#error2").show();
                }
                else if (mobile.test(x) == true) {
                   v2 = 0
                    $("#error2").hide();
                }
            });

            var uname = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;
$("#username").keyup(function () {
    x = document.getElementById("username").value;
    if (uname.test(x) == false) {
         v3 = 1
        $("#error3").show();
    }
    else if (uname.test(x) == true) {
       v3 = 0;
        $("#error3").hide();
    }
});

      
					
            x = document.getElementById("password1").value;
            y = document.getElementById("password2").value;

			   psw1= /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;
               $("#password1").keyup(function () {
                x1 = document.getElementById("password1").value;
                if (psw1.test(x1) == false) {
                     v4 = 1
                    $("#error4").show();
                }
                else if (psw1.test(x1) == true) {
                   v4 = 0;
                    $("#error4").hide();
                }
            });

			psw2= /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;
			$("#password2").keyup(function () {
                y1  = document.getElementById("password2").value;
                if ((document.getElementById("password1").value != document.getElementById("password2").value)&&(psw2.test(y1) == false) ) 
				{
                     v5 = 1
                    $("#error5").show();
                }
                else if (document.getElementById("password1").value == document.getElementById("password2").value)
					{
                   v5 = 0;
                    $("#error5").hide();
                }
            });
		
			
            $("#submit").click(function () {
                if (v1==0 && v2==0 && v3==0 && v4==0 && v5==0)
                    $("#error6").hide();
                else
				{
                   alert('Please Fill The Form Correctly');
					return false;
					}
            });
        });
    </script>

<script>
	$(document).ready(function(){ 
$('#username').keyup(function(){
 
var username = $(this).val();
if(username ==""){
$('#availability').html('');
}else{
$.ajax({
url:'ajaxfile.php',
method:"POST",
data:{username:username},
success:function(data)
{
if(data != '0')
{
$('#availability').html('<span class="text-danger" style="font-family:cursive; font-size:12px; color:red;">Username Already exist</span>');
$('#s').attr("disabled", true);
}
else
{
$('#availability').html('<span class="text-success" style="font-family:cursive; font-size:12px; color:green;" >Username Available</span>');
$('#s').attr("disabled", false);
}
}
})
}
});
 
}); 
</script>
</head>
<body>
<div class="full">
    <br><br>
<div class="signform">
<h2>𝑺𝒊𝒈𝒏 𝒖𝒑</h2>
<form action="#" method="POST" id="form" enctype="multipart/form-data">

<input type="text" name="name" id="nm" placeholder="Enter your name" required>
<p id="error1"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid Name </p><br><br>

<input type="text" name="phone" id="ph" placeholder="Enter your contact number" required><br>
<p id="error2"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid Phone Number</p><br><br>

<input type="text" name="username" id="username" placeholder="Enter your username" required><br>
<p id="error3"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid Username</p><br>
<p id="availability"></p>

<input type="password" name="password" id="password1"  placeholder="Enter your password"required ><br>
<p id="error4"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid password</p><br><br>


<input type="password" name="cpassword" id="password2" placeholder="Enter confirm password" required><br>
<p id="error5"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;password doesn't match </p>
<center> 
 <button id="submit" name="sub" id="error6" type="submit">submit</button> <center>
 <br><p id="q">Already have account?<a href="userlogin.php" id="lg"> Login here</a><br></p>
 <br><a href="index.php" id="lg">Cancel</a>
</div>
</div>
</form>
<?php
if(isset($_POST["sub"]))
{
   $na=$_POST["name"];
   $ph=$_POST["phone"];
   $un=$_POST["username"];
   $ps=$_POST["password"];
   $con=mysqli_connect("localhost","root","","db");
   $query="insert into tbl_user(name,phone)values('$na','$ph')";
   $result=mysqli_query($con,$query);
   if($result)
   {
   $custid=mysqli_insert_id($con);
    $q="insert into tbl_login(custid,username,password)values('$custid','$un','$ps')";
	 $res=mysqli_query($con,$q);
  ?>
  <script>
  window.location.href="userlogin.php";
  </script>
  <?php
  }
  
}
?>
</body>
</html>
	