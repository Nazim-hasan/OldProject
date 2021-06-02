<?php include 'admin_header.php';
require_once "CONTROLLER/category_controller.php";?>
<!--addproduct starts -->
	<div class="center">
		<form method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4>
				<input type="text" name="category_name" class="form-control">
				<?php echo $err_category;?>
			</div>
			
			<div class="form-group text-center">

				<input type="submit" name="add_category" class="btn btn-success" value="Add Category" class="form-control">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'admin_footer.php';?>
