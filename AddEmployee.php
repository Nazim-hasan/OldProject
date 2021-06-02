<?php include 'admin_header.php';
require_once "CONTROLLER/add_employee_controller.php";?>
<!--addproduct starts -->
<head>
		<link rel="stylesheet" href="styles/basicLayout.css">
<script src="JavaScript/employeeController.js"></script>

</head>
<div class="center">
<form action="" onsubmit="return validate()" method="POST">
		<div class="form-group">
			<h4 class="text">Emloyee's Name:</h4>
			<input type="text" name="ename" id="name" class="form-control">
			<span class="err-msg" id="err_name"><?php echo $err_ename;?></span>
		</div>


		<div class="form-group">
			<h4 class="text">Emloyee's Username:</h4>
			<input type="text" name="uname" id="username" onfocusout="checkUsername(this)"  class="form-control">
			 <span class="err-msg" id="err_username"><?php echo $err_uname;?></span>
		</div>


    <div class="form-group">
			<h4 class="text">Employee's PhoneNumber:</h4>
			<input type="text" name="phone" id="phoneno" maxlength="50" class="form-control">
			<span class="err-msg" id="err_phoneno"><?php echo $err_number;?></span>
		</div>


    <div class="form-group">
      <h4 class="text">Employee's Email:</h4>
      <input type="text" name="email" id="email" maxlength="50" class="form-control">
	   <span class="err-msg" id="err_email"><?php echo $err_email;?></span>

    </div>


    <div class="form-group">
      <h4 class="text">Employee's Address:</h4>
      <input type="text" name="eaddress" id="address" maxlength="50" class="form-control">
	  <span class="err-msg" id="err_address"><?php echo $err_eaddress;?></span></td>
    </div>


    <div class="form-group">
			<h4 class="text">Job Position:</h4>
			<select name="jpos" class="form-control">
				<option selected disabled>Choose</option>
				<option>Cashier</option>
				<option>Customer Service Assistant</option>
				<option>Order Picker</option>
				<option>Stock Clerk</option>
			</select>
			<?php echo $err_jpos;?>
		</div>




		<div class="form-group">
			<h4 class="text">Employee's Salary:</h4>
			<input type="text" name="esalary" maxlength="50" class="form-control">
			<?php echo $err_esalary;?>
		</div>



		<div class="form-group text-center">

			<input type="submit" name="add_employee" class="btn btn-success" value="Add Employee" class="form-control">
		</div>
	</form>
</div>
<script>
		function checkUsername(uname){
			var name= uname.value;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange =function(){
				if(this.readyState == 4 && this.status == 200){
					var rs = this.responseText;
						document.getElementById("err_unamee").innerHTML=rs;


				}
			};
			xhttp.open("GET","checkUsernameEmployee.php?uname="+name, true);
			xhttp.send();
		}
</script>
<?php include 'admin_footer.php';?>
