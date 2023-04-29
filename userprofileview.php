<?php
    session_start();
?>
<?php
require("connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>viewprofile</title>
        <link rel="icon" href="bblogo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="headstyle.css">
        <style>
            .col-div-4-1{
                width: 70%;
                float:center;
            
            }
            body
            {
             background-image: linear-gradient(rgba(0,0,0,0.12),rgba(0,0,0.12)),url('backhome.jpg');
             background-size: cover;
             width:98%;
             height:98vh;
             transition:all .5s;
             }
            .box{
                width: 100%;
                height: 400px;
                background-color: white;
                margin-left:140px;
                margin-top:8px;
                padding: 10px;
                box-shadow: 2px 5px 10px #ddd;
                position: relative;
                border-radius: 15px;
            
        
               
            }
            table{
                width: 100%;
                margin-top: 20px;
                margin-left:130px;
            }
            #d{
                font-size: 20px;
                letter-spacing: 2px;
                line-height: 32px;
                margin-left: 200px; 
            }
            #dd
            {
                outline: none;
                display: block;
                width: 230px;
                margin-left: 70px;
                margin-bottom: 15px;
                box-shadow: 0 0 3px rgb(148, 134, 134);
                border: 1px solid #ccc;
                border-radius: 15px;
                padding: 10px 15px;
                box-sizing: border-box;
                font-weight: 400;
                transition: 0.3s ease;
            }
            a{
                text-decoration: none;
            }
            button{
                outline: none;
                display: block;
                width: 200px;
                margin-top: 15px;
                margin-left:285px;
                margin-bottom: 15px;
                box-shadow: 0 0 3px rgb(148, 134, 134);
                border: 1px solid #ccc;
                padding: 10px 15px;
                box-sizing: border-box;
                font-weight: 400;
                transition: 0.3s ease;
                text-align: center;
                height:42px;
                background:rgb(95, 56, 56);
                font-size:18px;
                 border-radius:20px
            }
        </style>
    </head>
    <body>
        <section>
            <div class="right-div">
                <div id="main"><br>
                <div class="head">
                    
                    <div class="clearfix"></div><br><br>
                    <div class="col-div-4-1">
                        <div class="box">
                        <?php
                            $id=$_SESSION['loginid'];
                           
                            $query="select * from tbl_user where custid = '$id';";
                            $result=mysqli_query($con,$query);
                            if($result)
                            {
                                $query="select * from tbl_login where loginid = '$id';";
                                $result1=mysqli_query($con,$query);
                                if($result1)
                                {
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        while($row1=mysqli_fetch_array($result1))
                                        {
                                        ?>
                                            <table>
                                                <tr>
                                                    <td id="d">Name</td>
                                                    <td id="dd"><?php echo $row['Name'];?></td>
                                                </tr>
                                                <tr>
                                                    <td id="d">Username</td>
                                                    <td id="dd"><?php echo $row1['username'];?></td>
                                                </tr>
                                                <tr>
                                                    <td id="d">Mobile Number</td>
                                                    <td id="dd"><?php echo $row['Phone'];?></td>
                                                </tr>
                                            </table>
                                        <?php
                                        }   
                                    }   
                                }
                            }
                        ?>
                        <button name="sub"><a href="userprofileupdate.php" style="color:#ffff;">Update</a></button>
                        <button name="cancel"><a href="indexlog.php" style="color:#ffff;">Back</a></button>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div><br><br>
                    
                </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
    </body>
</html>