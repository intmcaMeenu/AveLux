<!---Password Change ---->
<?php
session_start();
if (isset($_SESSION['loginid'])) {
    $lid = $_SESSION['loginid'];
    if (isset($_POST['submit'])) {
        $ps = $_POST['password'];
        $con = mysqli_connect("localhost", "root", "", "db");
        $query = "update tbl_login set password='$ps' where loginid='$lid'";
        $re = mysqli_query($con, $query);
        if ($re) {
?>
            <script>
                alert("password changed successfully");
            </script>
        <?php
            header('Location: logout.php');
        } else {
        ?>
            <script>
                alert("password change failed");
            </script>
    <?php
        }
    }
    ?>

    <!DOCTYPE html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <title>Register Form</title>
    </head>
    <style>
        #error1,
        #error3,
        #error4,
        #error5,
        #error6,
        #error2,
        #error7 {
            color: #cc0033;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            line-height: 20px;
            text-shadow: 1px 1px rgba(250, 250, 250, .3);
        }
        body{
            background-color: rgb(95, 56, 56);
        }

        form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}
input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
        .password-container {
            width: 100%;
            position: relative;
        }

        input,
        input[type=password] {
            width: 250px;
            height: 20px;
        }
        #submit{
            height:30%;
        }

        .register .btn {
        text-decoration: none;
        color: white;
        padding: 10px 30px;
        background:rgb(95, 56, 56);
        text-align: center;
        border-radius: 20px;
        transition: 0.3s;
    }
   
        .fa-eye {
            position: absolute;
            top: 29%;
            right: 25%;
            cursor: pointer;
            color: lightgray;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script>
    <script>
        var ver1 = 1;
        var ver5 = 1;
        var ver6 = 1;
        var ver7 = 1;
        $(document).ready(function() {
            $("#error4").hide();
            /* $("#error3").hide();*/
            $("#error5").hide();
            $("#error6").hide();
            /*var conpass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            $("#p3").keyup(function() {
                x = document.getElementById("p3").value;
                if (conpass.test(x) == false) {
                    ver1 = 1;
                    $("#error3").show();
                } else if (conpass.test(x) == true) {
                    ver1 = 0;
                    $("#error3").hide();
                }
            });*/
            var pass =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*/#?&])[A-Za-z\d@$!%*/#?&]{6,}$/;
            $("#p4").keyup(function() {
                x = document.getElementById("p4").value;
                if (pass.test(x) == false) {
                    ver5 = 1;
                    $("#error4").show();
                } else if (pass.test(x) == true) {
                    ver5 = 0;
                    $("#error4").hide();
                }
            });
            $("#p5").keyup(function() {
                pass1 = document.getElementById("p4").value;
                pass2 = document.getElementById("p5").value;
                if (pass1 != pass2) {
                    ver6 = 1;
                    $("#error5").show();
                } else {
                    ver6 = 0;
                    $("#error5").hide();
                }
            });
            $("#submit").click(function() {
                if (ver5 == 0 && ver6 == 0 && ver7 == 0) {
                    $("#error6").hide();
                    return true;
                } else {
                    $("#error6").show();
                    return false;
                }
            });
        });

        function checkpass() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "passwordcheck.php",
                data: 'pass=' + $("#p3").val(),
                type: "POST",
                success: function(data) {
                    $("#password-availability-status").html(data);
                },
                error: function() {}
            });
        }
    </script>

    <body>
       <center> <div class="container">
            <br><br><br><br><br><br><form action="#" method="POST" class="login-email" enctype="multipart/form-data">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Change Password</p>
                <div class="input-group">
                    <div class="password-container">
                        <input type="password" class="op" placeholder=" Current Password" id="p3" name="password" onkeyup="checkpass()" required>
                        <i class="fa fa-fw fa-eye field_icon" id="toggle_pwds" style="margin-left: -30px; cursor: pointer;"></i>
                        <script type="text/javascript">
                            const togglePassword = document.querySelector('#toggle_pwds');
                            const password = document.querySelector('#p3');
                            togglePassword.addEventListener('click', function(e) {
                                // toggle the type attribute
                                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                password.setAttribute('type', type);
                                // toggle the eye slash icon
                                this.classList.toggle('fa-eye-slash');
                            });
                        </script>
                    </div>
                </div>
                <!--<p id="error3">&nbsp; Password should include at-least eight characters,uppercase letter,lowercase
                        letter,number and special character.</p>--->
                <div id="password-availability-status" class="error"></div><br>
                <div class="input-group">
                    <div class="password-container">
                        <input type="password" class="np" placeholder="New Password" id="p4" name="password" required>
                        <i class="fa fa-fw fa-eye field_icon" id="toggle_pwd" style="margin-left: -30px; cursor: pointer;"></i>
                        <script type="text/javascript">
                            const togglePassword1 = document.querySelector('#toggle_pwd');
                            const newpassword = document.querySelector('#p4');
                            togglePassword1.addEventListener('click', function(g) {
                                // toggle the type attribute
                                const type = newpassword.getAttribute('type') === 'password' ? 'text' : 'password';
                                newpassword.setAttribute('type', type);
                                // toggle the eye slash icon
                                this.classList.toggle('fa-eye-slash');
                            });
                        </script>
                    </div>
                </div>
                <p id="error4">&nbsp;Password should include at-least eight characters,uppercase letter,lowercase
                    letter,number and special character.</p>
                <div class="input-group">
                    <div class="password-container">
                        <input type="password" class="c_np" id="p5" placeholder="Confirm Password" name="cpassword" required>
                        <i class="fa fa-fw fa-eye field_icon" id="togglepwd" style="margin-left: -30px; cursor: pointer;"></i>
                        <script type="text/javascript">
                            const togglePassword2 = document.querySelector('#togglepwd');
                            const cppassword = document.querySelector('#p5');
                            togglePassword2.addEventListener('click', function(f) {
                                // toggle the type attribute
                                const type = cppassword.getAttribute('type') === 'password' ? 'text' : 'password';
                                cppassword.setAttribute('type', type);
                                // toggle the eye slash icon
                                this.classList.toggle('fa-eye-slash');
                            });
                        </script>
                    </div>
                </div>
                <br><div class="register">

                <center>
                <p id="error5">&nbsp; Passwords should match.</p><br><input type="submit" id="submit" name="submit" class="btn" value="Submit">
                <p id="error6">&nbsp;Please fill the form correctly.</p><br>
                
                </div>
    
            </form>
        </div></center>
    </body>

    </html>
<?php
} else {
    header('Location: index.html');
}
?>