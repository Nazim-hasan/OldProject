<?php include 'C:\xampp\htdocs\WebTech\Project V2\admin_header.php';
require_once "MODEL/db_config.php";



$id=$_GET["id"];
deleteEmployee($id);
function deleteEmployee($id){

	$query="delete from Employees where id='$id'";
	execute($query);
	header("Location: manageEmployee.php");
}

include 'admin_footer.php';
?>
