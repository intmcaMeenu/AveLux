<?php
// include 'con.php';
// include 'header.php';

$con = mysqli_connect("localhost", "root", "", "db");
use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  function send_password_mail($email, $token)
  {
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");
    $mail = new PHPMailer(true);
    try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
      $mail->isSMTP();                                           //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                      //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
      $mail->Username   = 'meenuantony1109@gmail.com';                 //SMTP username
      $mail->Password   = 'yyqtffbqupqlhldm';                    //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption
      $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      $mail->setFrom('meenuantony1109@gmail.com', 'AVE LUX');
      $mail->addAddress($email);    
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Password Reset Link';
      $mail->Body    = "Your Password Reset Link
                        <a href='http://localhost/project_s6/change_password.php?email=$email&token=$token'>Click Here</a>";
      $mail->send();
      return true;
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      return false;
  }
  }

if(isset($_POST['check_mail']))
{
    $email=$_POST['email'];
    $token=md5(rand());
    $check_email="SELECT username from tbl_login where username='$email'";
    $check_email_run=mysqli_query($con, $check_email);
    if(mysqli_num_rows($check_email_run)>0)
    {
        $row=mysqli_fetch_assoc($check_email_run);
        $update_token="UPDATE tbl_login SET verify_token='$token' where username='$email'";
        $update_token_run=mysqli_query($con,$update_token);
        if($update_token_run)
        {
            send_password_mail($email, $token);
            echo "<script> alert('Link is sent to mail'); </script>";
        }
        else{
            echo "<script> alert('Wrong'); </script>";
        }
    }
    else{
        echo "<script> alert('No email found'); </script>";
        //header('location:forgot_password.php');
    }
}
?>
<center>
<div class="col-xl-5 ml-5 mt-5 ">
    <div class="card border-2" style="  background-color:rgb(255, 229, 229)">
        <h2 class="mt-4">Reset Password</h2>
        <form action="forgot_password.php" method="POST">
            <div class="user-box mt-3">
                <label>Enter Email address</label>
                <input type="email" name="email" required>
                
            </div>
            <button type="submit" name="check_mail" class="submit">Send</button>
        </form>
    </div>
</div>
</center>
