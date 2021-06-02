<?php include 'admin_header.php';
require_once "CONTROLLER/category_controller.php";
$id=$_GET["id"];
$category = getCategory($id);
?>
<!--edit category starts -->
<div class="center">
	<form method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4>
			<input type="text" name="category_name" value="<?php echo $category ["name"];?>"  class="form-control">
			<?php echo $err_category; ?>
		</div>

		<div class="form-group text-center">
			<input type="hidden" name="id" value="<?php echo $category ["id"];?>" >
			<input type="submit" name="edit_category" class="btn btn-success" value="Edit Category" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>
