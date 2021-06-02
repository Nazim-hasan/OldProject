<?php include 'C:\xampp\htdocs\WebTech\Project V2\admin_header.php';
require_once "MODEL/db_config.php";
require_once "CONTROLLER/addManagerController.php";

$managers = getAllManager();
?>


<div>
	<table  align="center">
    <tr><td><br><br><td></tr>
		<tr>
			<td>
				<div>
          <a href="AddManager.php" class="btn btn-primary">Add New Manager</a>

				</div>
			</td>
			<td>
				<div>
          <a href="adminApproveReqManager.php" class="btn btn-primary">Approve Employee Request</a>
				</div>
			</td>
		</tr>
	</table>
</div>



<div class="center">
	<h3 class="text">Managers</h3>
	<table class="table table-striped">
		<thead>
      <th>ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Address</th>
			<th>PhoneNumber</th>
			<th>E-mail</th>
			<th>Job Position</th>
			<th>Basic Salary</th>
			<th>Salary Bonus</th>
			<th>Grand Salary</th>
		</thead>
		<?php
			foreach ($managers as $manager) {
				echo "<tr>";
				echo "<td>".$manager["id"]."</td>";
				echo "<td>".$manager["name"]."</td>";
				echo "<td>".$manager["username"]."</td>";
				echo "<td>".$manager["address"]."</td>";
				echo "<td>".$manager["phone"]."</td>";
				echo "<td>".$manager["email"]."</td>";
				echo "<td>".$manager["jobposition"]."</td>";
				echo "<td>".$manager["basicsalary"]."</td>";
				echo "<td>".$manager["bonus"]."</td>";
				echo "<td>".$manager["grandsalary"]."</td>";

				echo '<td><a href="editManager.php?id='.$manager["id"].'" class="btn btn-success">Edit</a></td>';
				echo '<td><a href="deleteManager.php?id='.$manager["id"].'" class="btn btn-danger">Delete</a></td>';

							}
							?>



	</table>
</div>
<!--dashboard ends -->
<?php include 'admin_footer.php';?>
