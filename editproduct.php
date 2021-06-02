<?php include 'admin_header.php';
require_once "CONTROLLER/ProductController.php";
require_once "CONTROLLER/category_controller.php";
$id=$_GET["id"];
$product = getProduct($id);

$categories = getAllCategories();
?>
<!--edit products starts -->
<div class="center">
	<form method="post" class="form-horizontal form-material">
    <div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="text" name="pname" value="<?php echo $product ["name"];?>" class="form-control">
			<?php echo $err_pname;?>
		</div>

    <div class="form-group">
			<h4 class="text">Category:</h4>
			<select name="pcategory_id" value="<?php echo $product ["cid"];?>" class="form-control">
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
			<input type="text" name="pprice" value="<?php echo $product ["price"];?>" class="form-control">
			<?php echo $err_pprice;?>
		</div>

    <div class="form-group">
			<h4 class="text">Quantity:</h4>
			<input type="text" name="pquantity" value="<?php echo $product ["qty"];?>" maxlength="50" class="form-control">
			<?php echo $err_pquantity;?>
		</div>

    <div class="form-group">
      <h4 class="text">Description:</h4>
      <input type="text" name="pdescription"  value="<?php echo $product ["description"];?>" class="form-control">
      <?php echo $err_pdescription;?>
    </div>

		<div class="form-group text-center">
			<input type="hidden" name="id" value="<?php echo $product ["id"];?>" >
			<input type="submit" name="editProduct" class="btn btn-success" value="Edit Category" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>
