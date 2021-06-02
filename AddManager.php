<?php include 'admin_header.php';
require_once "CONTROLLER/addManagerController.php";?>
<!--addproduct starts -->
<html>
    <head>
        <link rel="stylesheet" href="styles/basicLayout.css">

    </head>
    <body>
<div class="center">
	<form action="" method="POST">
		<div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="text" name="name" id="name" class="form-control">
			<br><?php echo $err_ename;?>
		</div>


    <div class="form-group">
			<h4 class="text"> Username:</h4>
			<input type="text" name="uname" onfocusout="checkUsername(this)" id="username" class="form-control">
			<br><br><?php echo $err_uname;?></span></td>
		</div>


		<div class="form-group">
      <h4 class="text">Address:</h4>
      <input type="text" name="eaddress" id="maddress" maxlength="50" class="form-control">
      	<br><?php echo $err_eaddress;?>
    </div>


    <div class="form-group">
			<h4 class="text">PhoneNumber:</h4>
			<input type="text" name="phone" id="phone" maxlength="50" class="form-control">
				<br><?php echo $err_number;?>
		</div>


    <div class="form-group">
      <h4 class="text">Email:</h4>
      <input type="text" name="email" id="email" maxlength="50" class="form-control">
      	<br><?php echo $err_email;?>
    </div>





    <div class="form-group">
			<h4 class="text">Work section:</h4>
			<select name="jpos" id="jpos" class="form-control">
				<option selected disabled>Choose</option>
				<option>Sales Manager</option>
				<option>Customs Manager</option>
				<option>Order Manager</option>
				<option>Stock Manager</option>
			</select>
				<br><?php echo $err_jpos;?>
		</div>


		<div class="form-group">
			<h4 class="text">Basic Salary:</h4>
			<input type="text" name="esalary" id="esalary" maxlength="50" class="form-control">
				<br><?php echo $err_esalary;?>
		</div>



		<div class="form-group text-center">

			<input type="submit" name="add_manager"  id="" class="btn btn-success" value="Add Manager" class="form-control">
		</div>
	</form>
</div>
</body>
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
			xhttp.open("GET","checkusernameManager.php?uname="+name, true);
			xhttp.send();
		}
</script>
<div class="footer"></div>

</html>
<?php include 'admin_footer.php';?>
