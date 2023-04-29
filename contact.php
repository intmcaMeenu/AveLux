<?php
require("connect.php");
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="stylecontact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">1414 Customs Road,</div>
          <div class="text-two">Kozhikode,67300 India</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">avelux@gmail.com</div>
          <div class="text-two">meenu@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div><br>
        <p>All through your involvement with the Ave Lux parlor, we put your necessities first by 
            giving the consideration and care that you merit.</p>
      <form action="#" method="POST">
        <br>

        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
         <br> <input type="text" name="msg" placeholder="Enter message" required>
        </div>
        <div class="input-box message-box">
          
        </div>
        <div class="button">
          <input type="submit" name="sub" value="Send Now" >
        </div>
      </form>
      <?php
       session_start();
          if(isset($_POST["sub"]))
            {
        $na=$_POST["name"];
        $msg=$_POST["msg"];
        
        $loginid = $_SESSION['loginid'];
        $query="select * from tbl_login where loginid='$loginid';";
             $re=mysqli_query($con,$query);
            $row=mysqli_fetch_array($re);
	      $id=$row['custid'];
          $q="insert into tbl_msg(custid,name,msg)values('$id','$na','$msg')";
          $res=mysqli_query($con,$q);
          if($res)
          {
          ?>
          <script>
              window.location.href="indexlog.php";
  </script>
  <?php
  }
}
  ?>
    </div>
    </div>
  </div>
</body>
</html>
