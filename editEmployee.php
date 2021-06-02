<?php include 'admin_header.php';
require_once "CONTROLLER/add_employee_controller.php";

$id=$_GET["id"];
$employee = getEmployee($id);
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
  			<h4 class="text">Emloyee's Name:</h4>
  			<input type="text" name="ename" value="<?php echo $employee ["name"];?>" class="form-control">
  			<?php echo $err_ename;?>
  		</div>


			<div class="form-group">
  			<h4 class="text">Emloyee's Username:</h4>
  			<input type="text" name="uname" value="<?php echo $employee ["username"];?>" class="form-control">
  			<?php echo $err_uname;?>
  		</div>

      <div class="form-group">
  			<h4 class="text">Employee's PhoneNumber:</h4>
  			<input type="text" name="number" value="<?php echo $employee ["phonenum"];?>" maxlength="50" class="form-control">
  			<?php echo $err_number;?>
  		</div>


      <div class="form-group">
        <h4 class="text">Employee's Email:</h4>
        <input type="text" name="email" value="<?php echo $employee ["email"];?>" maxlength="50" class="form-control">
        <?php echo $err_email;?>
      </div>


      <div class="form-group">
        <h4 class="text">Employee's Address:</h4>
        <input type="text" name="address" value="<?php echo $employee ["eadd"];?>" maxlength="50" class="form-control">
        <?php echo $err_eaddress;?>
      </div>




      <div class="form-group">
  			<h4 class="text">Job Position:</h4>
  			<select name="jpos"  class="form-control">
  				<option value="<?php echo $employee ["position"];?>">Choose</option>
  				<option>Cashier</option>
  				<option>Customer Service Assistant</option>
  				<option>Order Picker</option>
  				<option>Stock Clerk</option>
  			</select>
  			<?php echo $err_jpos;?>
  		</div>


  		<div class="form-group">
  			<h4 class="text">Employee's Salary:</h4>
  			<input type="text" name="salary" value="<?php echo $employee ["basic_salary"];?>" maxlength="50" class="form-control">
  			<?php echo $err_esalary;?>
  		</div>



  		<div class="form-group text-center">

					<input type="hidden" name="id" value="<?php echo $employee ["id"];?>" >
  			<input type="submit" name="editEmployee" class="btn btn-success" value="Update Employee Information" class="form-control">
  		</div>
  	</form>
	</td>
</table>
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>
