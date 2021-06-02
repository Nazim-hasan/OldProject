
<?php
session_start();
if(!isset($_SESSION["user"]) || !isset($_COOKIE["user"])){
header("Location: login.php");
}
?>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Admin</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="dashboard.php" class="btn btn-primary">Dashboard</a>
			<a href="allproducts.php" class="btn btn-warning">All Products</a>
			<a href="addproduct.php" class="btn btn-danger">Add Product</a>
			<a href="allcategories.php" class="btn btn-warning">All Categories</a>
			<a href="addcategory.php" class="btn btn-info">Add Category</a>
			<a href="manageEmployee.php" class="btn btn-primary">Manage Employee</a>
			<a href="manManager.php" class="btn btn-primary">Manage Manager</a>
			<a href="AdminProfileEdit.php" class="btn btn-primary">Edit My Profile</a>
			<a href="financialInfo.php" class="btn btn-primary">Financial</a>
			<a href="logout.php" class="btn btn-danger">Logout</a>
		</div>
		<!--menu ends-->
