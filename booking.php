<?php
require("connect.php");
?>
<?php
  session_start();
 

if(isset($_POST['sub']))
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $service=$_POST['service'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $loginid = $_SESSION['loginid'];
  $query="select * from tbl_login where loginid='$loginid';";
  $re=mysqli_query($con,$query);
  $row=mysqli_fetch_array($re);
  $id=$row['custid'];
  $que="select * from tbl_category";
  $re1=mysqli_query($con,$que);
  $row1=mysqli_fetch_array($re1);
  $id1=$row1['categoryid'];
  
  $qry="select * from tbl_subcategory where sub_name='$service';";
  $rs=mysqli_query($con,$qry);
  $row2=mysqli_fetch_array($rs);
  $cost=$row2["sub_cost"];

  $query="insert into tbl_appoint(customer_id,category_id,name,phone,service,date,time) values('$id','$id1','$name','$phone','$service','$date','$time')";
  $res=mysqli_query($con,$query);
  if($res)
  {
    $q="select * from tbl_appoint where customer_id='$id' order by appoint_id desc limit 1";
    $r=mysqli_query($con,$q);
    if ($r){
      $row3=mysqli_fetch_array($r);
      $appoint_id=$row3['appoint_id'];
      header('Location:pay.php?bid='.$appoint_id.'&cost='.$cost);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Book</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
    <div class="formbold-main-wrapper">
  <style>
      hr {
        position: relative;
        top: 2px;
        margin-left:650px;
        border: none;
        height:3px;
        background:yellow;
        margin-bottom: 50px;
        width:100px;
    }
    </style>
    <script>
	var v1=0;
	var v2=0;
	var v3=0;
	var v4=0;
	var v5=0;
	var v6=0;
    var v7=0;
 

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
            $("#name").keyup(function () {
                x = document.getElementById("name").value;
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
            $("#phone").keyup(function () {
                x = document.getElementById("phone").value;
                if (mobile.test(x) == false) {
                    v2 = 1
                    $("#error2").show();
                }
                else if (mobile.test(x) == true) {
                   v2 = 0
                    $("#error2").hide();
                }
            });

            
			
            $("#submit").click(function () {
                if (v1==0 && v2==0 && v3==0 && v4==0 && v5==0 && v6==0 && v7==0)
                    $("#error8").hide();
                else
				{
                   alert('Please Fill The Form Correctly');
					return false;
					}
            });
        });
    </script>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#inputdate').attr('min', maxDate);
});
</script>
<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// $(document).ready(function() {
//   $("#time").change(function() {
//     $("#availability").html("Checking availability...");

//     var time = $("#time").val();

//     $.ajax({
//       type: "POST",
//       url: "timeajax.php",
//       data: {time: time},
//       success: function(data) {
//         if (data == 0) {
//           $("#availability").html("Time slot is not available!");
//         } else {
//           $("#availability").html("Time slot is available.");
//         }
//       },
//       error: function() {
//         $("#availability").html("Error checking availability.");
//       }
//     });
//   });
// });

function checkavailability() {
    var time = document.getElementById('time').value;
    var date = document.getElementById('inputdate').value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var available = document.getElementById('availability').innerHTML = this.responseText;
        
        if(available == "Time Slot Not Available"){
          document.getElementById('submit').disabled = true;
        }
        else{
          document.getElementById('submit').disabled = false;
        }
      }
    };
    xhr.open("POST", "timeajax.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("time=" + time + "&date=" + date );

  }
</script>

  <div>
<h3 style="margin-left:600px;color:brown;">MAKE AN APPOINTMENT</h3>
<br>
<hr>

</div><br><br>
  <div class="formbold-form-wrapper" style="margin-right:100px;" >
  <?php
                            $id=$_SESSION['loginid'];
                           
                            $query="select * from tbl_user where custid = '$id';";
                            $result=mysqli_query($con,$query);
                            if($result)
                            {
                                    while($row=mysqli_fetch_array($result))
                                    {
                                      ?>
                                       
    <form action="#" method="POST">
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label" style='font-family:cursive; '> Name </label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder=" Name"
          class="formbold-form-input"
          value="<?php echo $row['Name'];?>"
        />
        <p id="error1"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid Name </p><br><br>
      </div>
      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label"> Phone Number </label>
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder="Enter your phone number"
          class="formbold-form-input"
          value="<?php echo $row['Phone'];?>"
        />
        <p id="error2"><b style='font-family:cursive; font-size:12px; color:red;'> &nbsp;&nbsp;Enter Valid phone number</p><br><br>
      </div>
      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label">Choose Service </label>
        <select name="service" id="select" class="select">
        <option>choose service</option>
    <?php
	           
	           $query="select * from tbl_subcategory";
	           $result=mysqli_query($con,$query);
             $count=mysqli_num_rows($result);
             if($count>0)
             {
	           while($row=mysqli_fetch_array($result))
	          {
		        echo"<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
            }  
           }
	         ?>
    </select>
      </div>
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Date </label>
            <input
              type="date"
              name="date"
              id="inputdate"
              class="formbold-form-input"
              required
            />
           
          </div>
        </div>
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="time" class="formbold-form-label"> Time </label>
            <select name="time" id="time" class="select"  onchange="event.preventDefault(); checkavailability();">
        <option>choose time</option>
        <option value = "10.00 am" >10.00 am </option>
        <option value = "11.00 am">11.00 am </option>
        <option value = "12.00 am">12.00 pm </option>
        <option value = "2.00 am" >2.00 pm </option>
        <option value = "3.00 am" >3.00 pm </option>
        <option value = "4.00 am" >4.00 pm </option>
          </select>
          
          <p id="availability"></p>
          </div>
        </div>
      </div>

      

      <div>
        <button id="submit" name="sub" class="formbold-btn">Book Appointment</button>
        <?php
                                        }   
                                    }   
                            
                        ?>
      </div>
    </form>
  </div>
</div>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", Arial, Helvetica, sans-serif;
  }
  .formbold-mb-5 {
    margin-bottom: 20px;
  }
  .formbold-pt-3 {
    padding-top: 12px;
  }
  .formbold-main-wrapper {
  
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin-left:480px;
    max-width: 550px;
    width: 100%;
    background: white;
  }
  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }
  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input,select {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus,select {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: rgb(95, 56, 56);
    color: white;
    width: 100%;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }
  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }
  .flex {
    display: flex;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .w-full {
    width: 100%;
  }
  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }
</style>

</body>
</html>