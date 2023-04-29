<?php
require("connect.php");
?>
<?php 
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair</title>
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
            margin-top:-550px;
            color:rgb(95, 56, 56);
        }
        hr {
        position: relative;
        top: 2px;
        margin-left:680px;
        border: none;
        height:3px;
        background:yellow;
        margin-bottom: 50px;
        width:100px;
    }
    body {
  background: #F2F2F2;
  
}


#price {
  margin-left:40px;
  
  margin-bottom:-20px;

  
}

.plan {
  display: inline-block;
  margin: 10px 1%;
  font-family: 'Lato', Arial, sans-serif;
  width:450px;
  padding-bottom:100px;
  float:left;
}

.plan-inner {
  background: #fff;
  margin: 0 auto;
  min-width: 280px;
  max-width: 100%;
  position:relative;
  margin-top:-10px;
  

}

.entry-title {
  
  height:230px;
  position: relative;
  text-align: center;
  color: #fff;
  margin-bottom:90px;
  
}

.entry-title>h3 {
  background: rgb(95, 56, 56);
  font-size: 20px;
  padding: 5px 0;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0;
}

.entry-title .price {
  position: absolute;
  bottom: -85px;
  background: rgb(95, 56, 56);;
  height: 95px;
  width: 95px;
  margin: 0 auto;
  left: 0;
  right: 0;
  overflow: hidden;
  border-radius:70px;
  border: 5px solid #fff;
  line-height: 80px;
  font-size: 28px;
  font-weight: 700;
}

.price span {
  position: absolute;
  font-size: 9px;
  bottom: -50px;
  left: 30px;
  font-weight: 400;
}

.entry-content {
  color: #323232;
  
}

.btn {
  padding: 3em 0;
  text-align: center;
}

.btn a {
  background: rgb(95, 56, 56);
  padding: 10px 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 700;
  text-decoration: none
}

.basic .entry-title {
  background: #75DDD9;
}

.basic .entry-title > h3 {
  background: #44CBC6;
}

.basic .price {
  background: #44CBC6;
}

.standard .entry-title {
  background: #4484c1;
}

.standard .entry-title > h3 {
  background: #3772aa;
}

.standard .price {
  background: #3772aa;
 
}

.ultimite .entry-title > h3 {
  background: #DD4B5E;
}

.ultimite .entry-title {
  background: #F75C70;
}

.ultimite .price {
  background: #DD4B5E;
}

    </style>
</head>
<body>
<DIV class="service" id="service">

     <div class="hea"><br><br>
     <div style="margin-top:-90px">
          <br><br><h1 class="ser">Our Services</h1>
          <hr>
    </div>
      </div> 
      <div style="margin-top:-450px;">
      <?php
             $query="select * from tbl_subcategory where categoryid='$id'";
             $result=mysqli_query($con,$query);
             $re=mysqli_num_rows($result)>0;
             
             if($re)
             {
                $count=0;
                while($row1=mysqli_fetch_array($result))
                {
                    $count=$count+1;
                    if($count==3)
                    {
                        ?>
                    <div style="margin-top:-360px;margin-bottom:100px">
                        <div class="plan">
                        <div class="plan-inner">
                          <div class="entry-title">
                          
                            <h3> <?php echo $row1['sub_name']; ?></h3>
                            <img id="img1"src="\admin\uploads\<?php echo $row1['sub_image'];?>" height=250px width=450px alt="Service image">                
                             <div class="price">₹<?php echo $row1['sub_cost']; ?>
                            </div>
                          </div>
                          <div class="entry-content">
                       
                            <p><?php echo $row1['sub_desc']; ?></p>
                          </div>
                          <br>
                          <div class="btn">
                          <a href="booking.php">Book Now</a>
                          </div>
                          
                        </div>
                      
                                    </div>
                                    <br><br><br>  <br><br><br>  <br><br><br> 
                                    </div>    
                      
                      
                    
                    <?php
                                        
                                    }
                                    else
{
                    
                  
                    ?>
                    
     
 
  <div class="plan">
    <div class="plan-inner">
      <div class="entry-title">
      
        <h3> <?php echo $row1['sub_name']; ?></h3>
        <img id="img1"src="\admin\uploads\<?php echo $row1['sub_image'];?>" height=250px width=450px alt="Service image">                
        <div class="price">₹<?php echo $row1['sub_cost']; ?>
        </div>
      </div>
      <div class="entry-content">
   
        <p><?php echo $row1['sub_desc']; ?></p>
      </div>
      <div class="btn">
      <a href="booking.php">Book Now</a>
      </div>
    </div>
  
                </div>
  
                </div>     
  
  

<?php
                    
                }

             }
            }
            ?>
            
            </div>
           
</body>
</html>