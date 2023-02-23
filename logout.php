
<?php
    session_start();
    session_destroy();
    header("Location:userlogin.php"); // Or wherever you want to redirect
  
 ?>