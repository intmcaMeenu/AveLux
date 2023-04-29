<?php
require("connect.php");
?>
<?php
    include("dashboard1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <script>
		     $(document).ready(function() {
			    $("#cat-name").keyup(function(){
                    var na = $("#cat-name").val();
                      $.ajax({
                      method:"POST",
                      url: "catval.php",
                      data: { cat: na },
                      dataType: 'text',
                      success: function(html){
                        $('#error_na').html(html);
                     }
                    });
                })
            });
		  </script>
        <script>  
		     $(document).ready(function() {
               
                $("#file").on("change",function(){
                    check_pic();
                })
                var name_error=false;

                var pic_error = false;
             
                function check_pic()
                {
                    var pattern =  /([a-zA-Z0-9\s_\\.\-:])+(.png|.jpg|.gif)$/;
                    var pic = $("#file").val();
                    if (pattern.test(pic)==true && pic !="") {
                      $("#error_pic").hide();
                      $("#file").css("border","1px solid green");
                    } else {
                      $("#error_pic").html("Images with .jpg,.jpeg ,.png extension are allowed.").show();
                      $("#file").css("border","1px solid red");
                     pic_error = true;
                    }
                }
        $("#form").submit(function() {
            des_error = false;
            pic_error = false;
            check_des();
            check_pic();

            if ( des_error === false  && pic_error==false) {
                $("#form_err").hide();
                return true;
            } else {
                $("#form_err").html("Please fill the form correctly.").show()
               return false;
            }
         });
       
			  });
		   </script>

    <style>
a{
    
  text-decoration:none;
  color:black;
}
        /*category fomr*/
.overlay {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background: rgba(0, 0, 0, 0.8);
	transition: opacity 500ms;
	visibility: hidden;
	opacity: 0;
}
.overlay:target {
	visibility: visible;
	opacity: 1;
}
.button1 {
	margin: 30px auto;
    padding:10px;
	background: white;
	border-radius: 5px;
	width: 50%;
	position: relative;
	transition: all 5s ease-in-out;
}
.button1 .closebtn1 {
	position: absolute;
	top: 10px;
	right: 60px;
	transition: all 200ms;
	font-size: 30px;
	font-weight: bold;
	text-decoration: none;
	color: #333;
  background:transparent;
  border:none;
  outline:none;
}
.button1 .closebtn1 a{
  text-decoration:none;
  color:black;
}
.button1 .closebtn1 a:hover {
	color: #06D85F;
}

.button1 .closebtn2:hover {
	color: #06D85F;
}
.content1{
  margin-left:30px;
  margin-top:20px;
  border:none;
  outline:none;
  min-height:500px;
  background: white;
}
.wrap1 {
	border-radius: 5px;
	background-color: #e7e7e7;
	padding: 050px ;
	background: white;
}
.form1 label {
	text-transform: uppercase;
	font-weight: 500;
	letter-spacing: 3px;
    line-height:50px;
}
.form1 #cat-name{
  height:30px;
  margin-left:20px;
  padding-left:20px;
  border-radius:10px;
  outline:none;
}
.form1 textarea{
    outline:none;
    border-radius:20px;
    padding:10px;
}
.form1 #cat-add{
  
    background-color:green;
    color:white;
  height:40px;
  width:80px;
  border-radius:10px;
  margin-left:50px;
  margin-top:40px;
}
.form1 .closebtn2 {
  background-color:#ea1538;
  height:40px;
  border-radius:10px;
  margin-left:150px;
  margin-top:40px;
}
.form1 .closebtn2  a{
    padding:20px;
    color:white;
}
.form1 .closebtn2:hover{
    
   font-size:16px;
}
.form1 #cat-add  a{
    padding:20px;
}
.form1 #cat-add:hover{
   font-size:16px;
}
#add-cat{
     background-color:#D16C6C;
     border:none;
     outline:none;
     padding:10px;
     border-radius:40px;
}
#add-cat a{
     text-decoration:none;
     color:white;
     text-transform:uppercase;
     display: block;
     transition: 0.3s;
}
#add-cat:hover {
  background-color:#808080;
  width:190px;
  padding:10px;
}

.table1{
  margin-top:20px;
}
.table1 td{
  border-top:none;
  border-left:none;
}  

.error{
            color:red;
            font-family:Comic Sans MS;
            font-weight:bold;
            font-size:12px;
        }

.table1{
  margin-top:20px;
  margin-left:100px;
  width:80%;
}
.table1 td{
  border-collapse:collapse;
  text-align:center;
  border-left:none;
  border-right:1px solid black;
  border-top:1px solid black;
  border-bottom:1px solid black;
  padding:5px;
}  
.view{
    margin-left:10px;
    margin-top:10px;
}

/*.active{
  text-decoration:none;
  color:white;
  background-color:green;
  width:40px;
  height:30px;
  padding:5px;
}
.deactive{
  text-decoration:none;
  color:white;
  background-color:red;
  width:40px;
  height:30px;
  padding:5px;
}
*/
.edit{
  text-decoration:none;
  color:white;
  background-color:green;
  width:40px;
  height:30px;
  padding:5px;
}
 </style>
</head>
<body>
<div class="content" id="content">
<div class="category" id="category">
  <button type="submit" id="add-cat"><a href="#add_cat">Add new category</a></button><br>
  <div class="view">

  <table class="table1" border="1">
     <tr>
        <td>Category</td>
        <td>Image</td>
        <!--<td>Status</td>-->
        <td colspan="2">Actions</td>
     </tr>
     <?php
       
       $query="select * from tbl_category";
       $re=mysqli_query($con,$query);
       while($row=mysqli_fetch_array($re))
       {  
         
          echo "<tr>";
          echo "<td>",$row['category_name'],"</td>";
          echo "<td><img src='uploads/".$row['category_image']."' height=70px width=70px></td>";
            /*echo "<td>";
        
          if($row['status']==0){
            echo "<a class='active' href='catstatus.php?id=",$row['categoryid'],"'>Active</a>";
       }
       else{
         echo "<a class='deactive' href='catstatus.php?id=",$row['categoryid'],"'>Deactive</a>";
       }
       echo "</td>";
       */
       echo "<td><a  class='edit' target='_self' href='editcat.php?id=",$row['cat_id'],"'>Edit</a></td>";
         echo "</tr>";
       }
     ?>
  </table>

</div>
</div>

 <div class="overlay" id="add_cat">
  <div class="button1">
    
  <button class="closebtn1"><a href="category.php">&times;</a></button>

  <div class="content1">
    <div class="wrap1">
  <form method="post" enctype="multipart/form-data" class="form1" id="form">
      <label>Category Name:</label><input type="text" name="cname" id="cat-name" placeholder="Enter category name"/><br>
      <span id="error_na" class="error"></span><br>
      <label>Image:</label><input type="file" name="file" id="file"/><br><span id="error_pic"  class="error"></span><br>
      
     <button class="closebtn2"><a href="category.php">close</a></button>
     <input   type="submit" id="cat-add" name="sub" value="Add"><br>
      <span id="form_err" class="error"></span>
    </form>
  </div>
  </div>
  </div>
  <?php
if(isset($_POST['sub']))
{
  $na=$_POST['cname'];
  $pic=$_FILES['file']['name'];
  
    $query="insert into tbl_category(category_name,category_image) values('$na','$pic')";
    $re=mysqli_query($con,$query);
    
    if($re)
    {
      $targetdir="uploads/";
      $filepath=$targetdir.$pic;
      move_uploaded_file($_FILES['file']['tmp_name'],$filepath);
      echo"<script>window.location.href='category.php';</script>";
    } 
}
?>
  </div>
 
</div>
</div>
</body>
</html>