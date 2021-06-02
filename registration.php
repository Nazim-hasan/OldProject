<?php

    require_once "CONTROLLER/registrationController.php";
?>

<html>
    <head>
        <link rel="stylesheet" href="styles/basicLayout.css">
		<script src="JavaScript/RegistrationController.js"></script>

    </head>
    <body>
        <div class=""></div>
        <div class="login-div" align="center">
            <table>
                <tr>
                <td colspan="2" align="center"><img src="images/login_icon.jpg" alt="Logo" width="20%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Registration Form</h1></td>
                </tr>
            </table>
            <form action="" onsubmit="return validate()" method="post">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="Enter Name" class="my-font my-textfield">
                    <span class="err-msg" id="err_name"><?php echo $err_name;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="uname" onfocusout="checkUsername(this)" id="username" value="<?php echo $uname;?>" placeholder="Enter Username" class="my-font my-textfield">
                    <br><br><span id="err_unamee"></span><span class="err-msg" id="err_username"><?php echo $err_uname;?></span></td>

                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="pass" id="password" value="<?php echo $pass;?>" placeholder="Enter Password" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_password"><?php echo $err_pass;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="confirm_pass" id="conpassword" value="<?php echo $confirm_pass;?>" placeholder="Confirm Password" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_conpassword"><?php echo $err_confirm_pass;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="Enter Email" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_email"><?php echo $err_email;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="phone" id="phoneno" value="<?php echo $number;?>" placeholder="Enter Phone Number" class="my-font my-textfield">
                    <br><span class="err-msg" id="err_phoneno"><?php echo $err_number;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="register" id="" value="Register" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            <a href="login.php">Already Registered? Login</a><br>
            <a href="home.php">Go To HOME</a>
            </form>
        </div>

        <script>
            function checkUsername(uname){
              //alert(uname.value);
              var name= uname.value;
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange =function(){
                if(this.readyState == 4 && this.status == 200){
                  var rs = this.responseText;

                    //document.getElementById("err_unamee").value = "Johnny Bravo";
                  /*  if(rs.localeCompare("true"))
                    {
                        document.getElementById("err_unamee").innerHTML="";
                        //console.log(rs);
                        //get('err_uname').innerHTML="";*/
                    document.getElementById("err_unamee").innerHTML=rs;


                }
              };
              xhttp.open("GET","checkusername.php?uname="+name, true);
              xhttp.send();
            }
        </script>

    </body>

    <div class="footer"></div>
</html>
