<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <style>
         .head
{
    width:103%;
    display:flex;
    
    background:rgb(95, 56, 56);
    opacity:2;
    margin:30px;
    margin-left:-10px;
  height:4em;
  margin-top:-8px;

}
.head li
{
list-style-type: none;
display: inline-block;
margin-left:80px;
font-size: 20px;
text-transform: uppercase;
cursor: pointer;
}
.head li:hover
{
color:rgb(9, 3, 3)
}
#rs
{
    text-align:center;
    text-decoration:none;
    color:#ffff;
}

h1
{
    font-size:38px;
}
        </style>
</head>
<body>
 <div class="head">
    <ul>

     <li> <a id="rs" href="indexlog.php">Home</a></li>
      <li><a id="rs" href="service.php">Services</a></li>
	  <li> <a id="rs" href="about.php">About Us</a></li>
      <li> <a id="rs" href="contact.php">Contact</a></li>
</ul>
    </div>

</body>
</html>