
<?php 
session_start();
if(isset($_GET["bid"]) && isset($_GET["cost"]))
{
  $id=$_GET["bid"];
  $cost=$_GET["cost"];
  $_SESSION["bid"]=$id;
  $_SESSION["cost"]=$cost;
}
?>
<html>
  <body>
<button id="rzp-button1" class="btn"><i class="fas fa-money-bill"></i>Processed to pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<head>
<style>
  .btn
  {
                outline: none;
                display: block;
                width: 200px;
                margin-top:300px;
                margin-left:650px;
                margin-bottom: 15px;
                box-shadow: 0 0 3px rgb(148, 134, 134);
                border: 1px solid #ccc;
                padding: 10px 15px;
                box-sizing: border-box;
                font-weight: 400;
                transition: 0.3s ease;
                text-align: center;
                height:42px;
                background:#fff;
                color:black;
                font-size:18px;
                 border-radius:20px
  }
  body
  {
    background-color: rgb(95, 56, 56);
  }

  </style>
</head>
<script>
 var options = {
  "key": "rzp_test_c6h8k05FLcSJrQ", // Enter the Key ID generated from the Dashboard
  "amount": "<?php echo $cost*100; ?>",
  "currency": "INR",
  "description": "Ave Lux Parlour",
  "handler": function(response) {
    console.log(response);
    jQuery.ajax({
      type: "GET",
      url:"paid.php",
        data:"pay_id="+response.razorpay_payment_id,
      success: function(result) {
        window.location.href = "indexlog.php";
      }
    })
  }
};
  var rzp1 = new Razorpay(options);
  document.getElementById('rzp-button1').onclick = function (e) {
    
    rzp1.open();
    e.preventDefault();
  }
</script>
</body>
</html>