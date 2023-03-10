<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>user_updateprofile</title>
        <link rel="icon" href="bblogo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="headstyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
        <style>
            .col-div-4-1{
                width: 70%;
                float:center;
            
            }
            body
            {
             background-image: linear-gradient(rgba(0,0,0,0.12),rgba(0,0,0.12)),url('backhome.jpg');
             background-size: cover;
             width:98%;
             height:98vh;
             transition:all .5s;
             }
            .box{
                width: 100%;
                height: 430px;
                background-color: white;
                margin-left:140px;
                margin-top:8px;
                padding: 10px;
                box-shadow: 2px 5px 10px #ddd;
                position: relative;
                border-radius: 15px;
            
        
               
            }
            table{
                width: 100%;
                margin-top: 80px;
                margin-left:80px;
            }
            #d{
                font-size: 20px;
                letter-spacing: 2px;
                line-height: 36px;
                margin-left: 210px; 
            }
            .dd
            {
                outline: none;
                display: block;
                width: 230px;
                margin-left: 70px;
                margin-bottom: 15px;
                box-shadow: 0 0 3px rgb(148, 134, 134);
                border: 1px solid #ccc;
                border-radius: 15px;
                padding: 10px 15px;
                box-sizing: border-box;
                font-weight: 400;
                transition: 0.3s ease;
            }
            a{
                text-decoration: none;
            }
            button{
                outline: none;
                display: block;
                width: 200px;
                margin-top: 15px;
                margin-left:215px;
                margin-bottom: 15px;
                box-shadow: 0 0 3px rgb(148, 134, 134);
                border: 1px solid #ccc;
                padding: 10px 15px;
                box-sizing: border-box;
                font-weight: 400;
                transition: 0.3s ease;
                text-align: center;
                height:42px;
                background:rgb(95, 56, 56);
                font-size:18px;
                 border-radius:20px
            }
            #form
            {
                margin-top:-115px;
                margin-right:100px;
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
            $("#error6").hide();
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
        <section>
            <div class="right-div">
                <div id="main"><br>
                <div class="head">
                    
                    <div class="clearfix"></div><br><br>
                    <div class="col-div-4-1">
                        <div class="box">
                        <?php
                            $id=$_SESSION['loginid'];
                            $con=mysqli_connect("localhost","root","","db");
                            $query="select * from tbl_user where custid = '$id';";
                            $result=mysqli_query($con,$query);
                            if($result)
                            {
                                $query="select * from tbl_login where loginid = '$id';";
                                $result1=mysqli_query($con,$query);
                                if($result1)
                                {
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        while($row1=mysqli_fetch_array($result1))
                                        {
                                        ?>
                            <form action="#" method="POST" id="form">
                                            <table>
                                                <tr>
                                                    <td id="d">Name</td>
                                                    <td ><input type="text" class="dd" name="name" id="nm" value="<?php echo $row['Name'];?>">
                                                    <p id="error1"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid Name </p></td><br><br>
                                                </tr>
                                    
                                                <tr>
                                                  <br>  <td id="d">Mobile Number</td>
                                                    <td ><input type="text" class="dd" name="phone" id="ph"  value="<?php echo $row['Phone'];?>">
                                                    <p id="error2"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid Phone Number</p></td><br><br>

                                                </tr>
                                            </table>
                                        <?php
                                        }   
                                    }   
                                }
                            }
                        ?>
                        <button name="sub" id="submit" id="error6" style="color:#ffff;">Submit</button>
                        <button name="cancel"><a href="indexlog.php" style="color:#ffff;">Back</a></button>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div><br><br>
                    
                </div>
                </div>
            </div>

            <div class="clearfix"></div>
         </form>
            <?php
	if(isset($_POST["sub"]))
	{
		$na=$_POST["name"];
        $ph=$_POST["phone"];
		$con=mysqli_connect("localhost","root","","db");

		$que="update tbl_user set Name='$na',Phone='$ph' where custid='$id'";
		$result=mysqli_query($con,$query);
		$re=mysqli_query($con,$que);
			 if($re)
			 {
				 ?>
				   <script>
					  window.location.href="userprofileview.php";
					</script> <?php
			 }
            

		}
		mysqli_close($con);
?>
        </section>
    </body>
</html>