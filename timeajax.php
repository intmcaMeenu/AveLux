<?php
// $conn = mysql_connect("localhost", "root", "");
// mysql_select_db("db", $conn);

// $time = $_POST["time"];

// $query = mysql_query("SELECT * FROM tbl_appoint WHERE time = '$time'");
// $results = mysql_fetch_assoc($query);
// if(mysqli_num_rows($query)>0){
//     echo $num_rows;
// }
// mysql_close($conn);
?>

<?php
    if(isset($_POST['time']) && isset($_POST['date'])) {
        $time = $_POST['time'];
        $date = $_POST['date'];
       
        include 'connect.php';

        $query = mysqli_query($con, "SELECT * FROM tbl_appoint WHERE date = '$date' and time = '$time'");
        $results = mysqli_fetch_assoc($query);
        $num_rows = mysqli_num_rows($query);

        if($num_rows>0){
            echo "Time Slot Not Available";
        }
        else {
            echo "Time Slot Is Available"; 
        }
        
    }
?>