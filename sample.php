<?php
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ave Lux</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
        #home1
        {
            background-color:rgb(95, 56, 56);
        }
        </style>
</head>
<body>
    <div class="full">
        <input type="checkbox" id="check">
        
       
        <div class="main">
            <div class="heading">
                <ul><h1 style="margin-left:170px; margin-top:-20px;">
                <br><a href="index.php"> <button id="home1" class="headlink">Home</button></a>
                <a href="#service" > <li class="headlink">Services</li></a>
                <a href="#about ">   <li class="headlink" >About us</li></a>
                </ul>
            </div>
            <div class="body-section">
                <h1>AVE LUX PARLOUR</h1>
                <p style="font-family:Edwardian Script ITC; font-size:15px;">Beauty begins the moment you decide to be yourself </p>
                <span>
                <a href="userlogin.php">  <button>LOGIN</button>
                    <a href="userregister.php"> <button  class="contact">REGISTER</button></a>
            </span>

            </div>
        </div>
 </div>

<DIV class="about" id="about">
    <br><br><h2>About Us</h2>
    <style>
            .about{
                padding-top:25px;  
                padding-bottom:65px;  
            }
            #about{
                padding-top:25px;  
                scroll-behavior: smooth;
                transition:0.2s ease-in-out;

            }
            .box{
                width:25%;
               float:left;
               height:250px;
               align:center;
               border-radius:5%;
               margin-left:50px;
               margin-top:-100px;

            }
           
            .k{
                width:40%;
                padding:5px;
                margin-top:-400px;
                float:left;
              
                margin-left:10px;
                
            }
            .full{
                background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0.25)),url('backhome.jpg');
                height:800px;
                background-size: cover;
                margin-top:-30px;
                margin-right:-35px;
            }
            h2
            {
                margin-left:712px;
                color:rgb(95, 56, 56);
            }
            #t
            {
                position: relative;
                margin-left:400px;
                font-family: "Times New Roman", Times, serif;
            }
            #t1
            {
                position: relative;
                margin-left:580px;
                font-family: "Times New Roman", Times, serif;
            }
            img
            {
                margin-left:8px;
            
            }
            .content
            {
                float:right;
                margin-top:-400px;
                margin-right:30px;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: rgb(33, 37, 41);
            }
            </style>
    <div>
    <img src="https://preview.colorlib.com/theme/makeupartist/img/about/about-pic.png.webp">
    </div>
    <div class="content">
        <p style="color:#000;">“Our customers are vital to us, so we constantly train our specialists to guarantee that all
            medicines <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are of the most astounding standard and that every customer gets
                the best consideration”</p>
        <p style="color:#000;">"Our customer’s wellbeing and security is our best need with the utilization of creative 
            pipeless<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; spa seats and sanitized instruments. 
            Brilliant customer benefit is out mission."</p>
        <p style="color:#000;">The specialities in the parlour are,apart from regular bleachings and
    Facials,many types of hairstyles,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridal and cine make-up and diffrent types of Facials 
    and Fashion
    hair colourings</p>
    </div>
 </DIV> 
 <div>
       
</div>
<style>
    .service{
                padding-top:110px;  
                padding-bottom:65px;  
            }
            #service{
                margin-top:140px;
                padding-top:400px;  
                scroll-behavior: smooth;
                transition:0.2s ease-in-out;
            }
            .hea{
                margin-top:100px;
            }
          .ser
        {
            margin-left:640px;
            margin-top:-500px;
            color:rgb(95, 56, 56);
        }
        hr {
        position: relative;
        top: 2px;
        border: none;
        height:3px;
        background:yellow;
        margin-bottom: 50px;
        width:100px;
    }
    body{
    background-color:white;
    font-family: sans-serif;
}
h4{
    text-align: center;
    color: #fff;
    font-weight: bold;
    width: 100%;
    font-size: 24px;
}
p{
    text-align: center;
    color: rgb(192, 182, 182);
    
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.card{
    position: relative;
    margin-top:50px;
    
}
.first-card{
    width:400px;
    height:450px;
    background-color:rgb(95, 56, 56);
    position: relative;
    text-align:center;
    margin-left:200px;
  
}
.first-card img{
    width:100%;
   
}


.card:hover .back-card{
    transform: rotate(5deg);
    
}
.card:hover .thid-card{
    transform: rotate(-5deg);
}
button{
    background-color: #fff;
   
    padding:10px 5px;
    color: #000;
    text-align: center;
    transition: all 0.4s;
    font-size: 16px;
  
}

.card:hover button{
    background-color: #fff;
    color: #000;
font-weight: bold;
    }
    #img1
    {
        margin-left:-2px;
        display: flex;
        flex-wrap: wrap;
       justify-content: space-between;
    }
.box{
    margin-bottom:335px;
}
    </style>
<DIV class="service" id="service">
     <div class="hea"><br><br>
     <div style="margin-top:-90px">
          <br><br><h1 class="ser">Our Services</h1>
          <hr>
    </div>
      </div>
  <div style="margin-top:-350px">
    
            <?php
             $con=mysqli_connect("localhost","root","","db");
             $query="select * from tbl_category";
             $result=mysqli_query($con,$query);
             $re=mysqli_num_rows($result)>0;
             
             if($re)
             {
                while($row1=mysqli_fetch_array($result))
                {
                  
                    ?>
                     <div class="box">
                     <div class="container">
        <div class="card">
            <div class="first-card">
                     
                          
                               <img id="img1"src="\admin\uploads\<?php echo $row1['category_image'];?>" height=300px width=300px alt="Service image">
                             <font color="brown"size="5"> <center> <h4 class="card-title"><?php echo $row1['category_name']; ?></h4></center></font>
                         
                             <button  onclick="window.location.href = 'index.php';">View More</button>
            </div>
            <div class="back-card"></div>
            <div class="thid-card"></div>
            
           
        </div>
       
    </div>  
                                   
                              
                        
                   </div>
                 
                   <?php
                    
                }

             }
            ?>
            </div>
            </div>
        </div> 
   </div>
</DIV>
</body>
</html>



