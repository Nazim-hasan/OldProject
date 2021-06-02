<?php include 'C:\xampp\htdocs\WebTech\Project V2\admin_header.php';
require_once "MODEL/db_config.php";



$id=$_GET["id"];
deleteCategory($id);
function deleteCategory($id){

	$query="delete from categories where id='$id'";
	execute($query);
	header("Location: allcategories.php");
}

include 'admin_footer.php';
?>
