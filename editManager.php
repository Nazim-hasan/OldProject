<?php include 'admin_header.php';
require_once "CONTROLLER/addManagerController.php";
$id=$_GET["id"];
$manager = getmanager($id);

?>
<!--editproduct starts -->
<div class="center">
<table>
	<td>
		<img class="item-image" src="images/login_icon.jpg"></img>
	</td>
	<td>
    <form method="post" class="form-horizontal form-material">
  		<div class="form-group">
  			<h4 class="text">Manager's Name:</h4>
  			<input type="text" name="ename" value="<?php echo $manager ["name"];?>" class="form-control" >
  			<?php echo $err_ename;?>
  		</div>


      <div class="form-group">
  			<h4 class="text">PhoneNumber:</h4>
  			<input type="text" name="number" value="<?php echo $manager ["phone"];?>" maxlength="50" class="form-control">
  			<?php echo $err_number;?>
  		</div>


      <div class="form-group">
        <h4 class="text">Email:</h4>
        <input type="text" name="email" value="<?php echo $manager ["email"];?>" maxlength="50" class="form-control">
        <?php echo $err_email;?>
      </div>


      <div class="form-group">
        <h4 class="text">Address:</h4>
        <input type="text" name="address" value="<?php echo $manager ["address"];?>" maxlength="50" class="form-control">
        <?php echo $err_eaddress;?>
      </div>


      <div class="form-group">
  			<h4 class="text">Job Position:</h4>
  			<select name="jpos" value="<?php echo $manager ["jobposition"];?>" class="form-control">
  				<option selected disabled>Choose</option>
  				<option>Cashier</option>
  				<option>Customer Service Assistant</option>
  				<option>Order Picker</option>
  				<option>Stock Clerk</option>
  			</select>
  			<?php echo $err_jpos;?>
  		</div>


  		<div class="form-group">
  			<h4 class="text">Salary:</h4>
  			<input type="text" name="salary" value="<?php echo $manager ["basicsalary"];?>" maxlength="50" class="form-control">
  			<?php echo $err_esalary;?>
  		</div>




  		<div class="form-group text-center">
				<input type="hidden" name="id" value="<?php echo $manager ["id"];?>" >
  			<input type="submit" name="editManager" class="btn btn-success" value="Update Manager Information" class="form-control">
  		</div>
  	</form>
	</td>
</table>
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>
