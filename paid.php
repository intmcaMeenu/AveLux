<?php
require("connect.php");
?>
<?php
session_start();
$b=$_SESSION["bid"];
$d=$_SESSION["cost"];

if(isset($_GET['pay_id']))
{
  $a=$_GET['pay_id'];
  $query = "insert into tbl_payment(transaction_id,book_id,cost) values('$a','$b','$d')";  
  $result1 = mysqli_query($connect, $query);
}
?>