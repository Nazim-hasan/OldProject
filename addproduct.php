<?php
	include 'admin_header.php';
	require_once "CONTROLLER/ProductController.php";
	require_once "CONTROLLER/category_controller.php";
	$categories = getAllCategories();
?>
<!--addproduct starts -->
<div class="center">
	<form method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="text" name="pname" class="form-control">
			<?php echo $err_pname;?>
		</div>
		<div class="form-group">
			<h4 class="text">Category:</h4>
			<select name="pcategory_id" class="form-control">
				<option selected disabled>Choose</option>
				<?php
					foreach($categories as $category)
					{
						echo "<option value='".$category["id"]."'>".$category["name"]."</option>";
					}
				?>
			</select>
			<?php echo $err_pcategory_id;?>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4>
			<input type="text" name="pprice" class="form-control">
			<?php echo $err_pprice;?>
		</div>
		<div class="form-group">
			<h4 class="text">Quantity:</h4>
			<input type="text" name="pquantity" maxlength="50" class="form-control">
			<?php echo $err_pquantity;?>
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4>
			<textarea type="text" name="pdescription" class="form-control"></textarea>
			<?php echo $err_pdescription;?>
		</div>
		<div class="form-group text-center">

			<input type="submit" name="add_product" class="btn btn-success" value="Add Product" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
