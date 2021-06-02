<?php require_once "CONTROLLER/loginController.php";?>
<html>
    <head>
        <link rel="stylesheet" href="styles/basicLayout.css">
    </head>
    <body>
        <div class="login-div" align="center">
            <table>
                <tr>
                    <td colspan="2" align="center"><img src="images/login_icon.jpg" alt="Logo" width="20%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Login Form</h1></td>
                </tr>
            </table>
            <form action="" method="POST">
                <table align="center">
                    <tr>
                        <td colspan="2"><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username" class="my-font my-textfield">
                        <br><span class="err-msg"><?php echo $err_uname;?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password" class="my-font my-textfield">
                        <br><span class="err-msg"><?php echo $err_pass;?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="login" value="Login" class="btn-mine"></td>
                        <td></td>
                    </tr>
                </table>
                <a href="">Forgot Password</a><br>
                <a href="registration.php">Not Registered? Register</a><br>
                <a href="homepage(common).php">Go To HOME</a>
            </form>
        </div>
    </body>
    <div class="footer"></div>
</html>

        