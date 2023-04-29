<?php
require("connect.php");
?>
<?php
if(isset($_POST["username"]))
{
$username = mysqli_real_escape_string($connect, $_POST["username"]);
$query = "SELECT * FROM tbl_login WHERE username = '".$username."'";
$result = mysqli_query($connect, $query);
echo mysqli_num_rows($result);
}
?>
