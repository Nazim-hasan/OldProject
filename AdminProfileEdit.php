<?php include 'admin_header.php';
require_once "CONTROLLER/editAdminController.php";
$id=$_SESSION["id"];
$user= getUser($id);
?>
<!--editproduct starts -->
<html>
    <head>
        <link rel="stylesheet" href="styles/basicLayout.css">
		<script src="JavaScript/AdminEditProfile.js"></script>

    </head>
    <body>
<div class="center">
<table>
	<td>
		<img class="item-image" src="images/login_icon.jpg"></img>
	</td>
	<td>
			<form action="" onsubmit="return validate()" method="POST"  class="form-horizontal form-material">
  		<div class="form-group">
  			<h4 class="text">Name:</h4>
         <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
  			<input type="text" name="name" id="name" class="form-control">
				<span class="err-msg" id="err_name"></span>
  			<?php echo $err_name;?>
  		</div>



      <div class="form-group">
  			<h4 class="text">UserName:</h4>
         <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
  			<input type="text" name="uname" id="username" class="form-control">
				<span class="err-msg" id="err_username"></span>
  			<?php echo $err_uname;?>
  		</div>





      <div class="form-group">
  			<h4 class="text">Enter New Password:</h4>
         <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
  			<input type="text" name="pass" id="password" class="form-control">
				<span class="err-msg" id="err_password"></span>
  			<?php echo $err_pass;?>
  		</div>


			<div class="form-group">
  			<h4 class="text">Confirm Password:</h4>
         <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
  			<input type="text" name="confirm_pass" id="conpassword" class="form-control">
				<span class="err-msg" id="err_conpassword"></span>
				<?php echo $err_confirm_pass;?>
  		</div>



      <div class="form-group">
        <h4 class="text">Email:</h4>
         <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
        <input type="text" name="email" id="email" maxlength="50" class="form-control">
				<span class="err-msg" id="err_email"></span>
				<?php echo $err_email;?>
      </div>



      <div class="form-group">
        <h4 class="text">PhoneNumber:</h4>
         <input type="hidden" name="id" id="id" value="<?php echo $user["id"];?>"  class="form-control">
        <input type="text" name="phone" id="phoneno" maxlength="50" class="form-control">
				<span class="err-msg" id="err_phoneno"></span>
				<?php echo $err_number;?>
      </div>




  			<input type="submit" name="edit_admin" id="" class="btn btn-success" value="Update Profile" class="form-control">
  		</div>
  	</form>
	</td>
</table>
</div>
</body>
</html>
<!--editproduct ends -->
<?php include 'admin_footer.php';?>
