
<?php
    session_start();
    session_destroy();
    header("Location:index.php"); // Or wherever you want to redirect
  
 ?>