<?php include 'C:\xampp\htdocs\WebTech\Project V2\admin_header.php';
require_once "MODEL/db_config.php";



$id=$_GET["id"];
deleteProduct($id);
function deleteProduct($id){

	$query="delete from products where id='$id'";
	execute($query);
	header("Location: allproducts.php");
}

include 'admin_footer.php';
?>
