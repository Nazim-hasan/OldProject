<?php include 'admin_header.php';

require_once "MODEL/db_config.php";
require_once "CONTROLLER/category_controller.php";
$categories = getAllCategories();

?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th> Name</th>
			<th></th>
			<th></th>

		</thead>
		<?php
			foreach ($categories as $category) {
				echo "<tr>";
				echo "<td>".$category["id"]."</td>";
				echo "<td>".$category["name"]."</td>";


				echo '<td><a href="editcategory.php?id='.$category["id"].'" class="btn btn-success">Edit</a></td>';
				echo '<td><a href="deleteCategory.php?id='.$category["id"].'" class="btn btn-danger">Delete</a></td>';

							}
							?>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>
