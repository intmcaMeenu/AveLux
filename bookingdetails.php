<?php
require("connect.php");
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Details</title>
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
          
            body
            {
             background-image: linear-gradient(rgba(0,0,0,0.12),rgba(0,0,0.12)),url('backhome.jpg');
             background-size: cover;
             width:98%;
             height:98vh;
             transition:all .5s;
             }
            .box{
                width:80%;
                height:500px;
                background-color: white;
                margin-left:150px;
                margin-top:120px;
                padding:40px;
                box-shadow: 2px 5px 10px #ddd;
                position: relative;
                border-radius: 15px;
            
        
               
            }
            table{
                width:80%;
                margin-top:25px;
                margin-left:10px;
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
                margin-left:430px;
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
            <div class="box">
               
             
                        
                        <style>
  
    .table-responsive {
        margin: 30px 0;
    }
.table-wrapper {
min-width: 1000px;
        background: #fff;
        padding: 20px;        
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
.search-box input:focus {
border-color: #3FBAE4;
}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
background: #f5f5f5;
}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        display: inline-block;
        margin: 0 5px;
    }
    
   
     
     #error_na
     {
      font-size:12px; 
      color:red;
     }

     .pending{
  border: 1px solid blue;
  border-radius:10px;
  background-color: blue;
  color:white;
  font-weight: bold;
  width:80px;
  height:30px;
  padding:5px;
}
.approve{
  border: 1px solid green;
  border-radius:10px;
  background-color: green;
  color:white;
  font-weight: bold;
  width:80px;
  height:30px;
  padding:5px;
}

.cancel{
  border: 1px solid red;
  border-radius:10px;
  background-color: red;
  color: white;
  font-weight: bold;
  width:80px;
  height:30px;
  padding:5px;
}
#download{
    size:10px;
    margin-left:30px;

}
</style>
                        
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});
</script>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mytable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
</head>
<body>
  <div id="pdfcontent" class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Booking <b>Details</b></h2></div>
                       <br>        
                     <i class="fa fa-download" id="download" aria-hidden="true"></i>
                        <div class="col-sm-4">
         
                       <!-- <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" id="search" placeholder="Search&hellip;">
                            </div>-->
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered" id="mytable">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Phone</th>
                           <th>Service </th>
                            <th>Date </th>
                            <th>Time</th>
                            <th>Payment</th>
                            <th>Status</th>
                            
                         
                        </tr>
                    </thead>

                    <?php


         $loginid = $_SESSION['loginid'];
    
         $query="select * from tbl_appoint where customer_id='$loginid';";
         $re=mysqli_query($con,$query);
         
       $i=1;
       while($row=mysqli_fetch_array($re))
       {  
         
          echo "<tr>";
          echo "<td>".$i++."</td>";
          echo "<td>",$row['name'],"</td>";
          echo "<td>",$row['phone'],"</td>";
          echo "<td>",$row['service'],"</td>";
          echo "<td>",$row['date'],"</td>";
          echo "<td>",$row['time'],"</td>";
          echo " <td class='success'> Success</td>";
    
  
          echo "<td>";
          if($row['status']==0){
            echo " <a class='pending'> Pending  </a>";
       }
       elseif ($row['status']==1){
         echo  " <a class='approve'> Approved </a>";
       }

       elseif ($row['status']==2){
        echo  "<a class='cancel'>  Cancelled </a>";
      }
      ?>
      </div>
      <?php
     
       /*
       echo "<td><a  class='edit' target='_self' href='editcategory.php?id=",$row['categoryid'],"'>Edit</a></td>";
         echo "</tr>";
       }
       */
    }
    ?>
  </table>
</div>
</div>
             
                       <button name="cancel"><a href="indexlog.php" style="color:#ffff;">Back</a></button>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div><br><br>
                    
                </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("download").addEventListener("click", () => {
      const pdfcontent = document.getElementById("pdfcontent");
      
      // add Boot Bazzar text in center at the top
      const bootBazzar = document.createElement("h1");
    //   bootBazzar.textContent = "Booking Details";
      bootBazzar.style.textAlign = "center";
      pdfcontent.insertBefore(bootBazzar, pdfcontent.firstChild);



      var opt = {
        margin: 1,
        filename: 'Payed_users.pdf',
        image: { type: 'jpeg', quality: 0.99 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'a3', orientation: 'p' }
      };
      const images = pdfcontent.querySelectorAll('img');
      Promise.all(Array.from(images).map((img) => {
        if (img.complete) return Promise.resolve();
        return new Promise((resolve) => {
          img.addEventListener('load', resolve);
          img.addEventListener('error', resolve);
        });
      })).then(() => {
        html2pdf().from(pdfcontent).set(opt).save();
      });
    });
  });
</script>
    </body>
</html>