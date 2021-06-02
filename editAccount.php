<?php 
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: login.php");
    }
    include_once "header(user).php";
    require_once "CONTROLLER/registrationController.php";
?>
<div class="main-content">
    <form action="" method="POST">
        <table align="center">
            <tr>
                <td colspan="2"><input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter Name" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_name;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Enter Username" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_uname;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Enter Password" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_pass;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="confirm_pass" value="<?php echo $confirm_pass;?>" placeholder="Confirm Password" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_confirm_pass;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="email" value="<?php echo $email;?>" placeholder="Enter Email" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_email;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="phone" value="<?php echo $number;?>" placeholder="Enter Phone Number" class="my-font my-textfield">
                <br><span class="err-msg"><?php echo $err_number;?></span></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="updateDetails" id="" value="UPDATE" class="btn-mine"></td>
                <td></td>
            </tr>
        </table>
    </form>
</div>
<?php include_once "footer.php";?>