<?php
require "../MODEL/db_config.php";
/*$mysqli = new mysqli("localhost", "root", "", "wt_sp21_final");
if($mysqli->connect_error) {
  exit('Could not connect');
}*/

$sqlU = "select * from products where name like '%".$_GET['p']."%' or description like '%".$_GET['p']."%'";
$resuldt = get($sqlU);

/*$stmt = $mysqli->prepare($sqlU);
//$stmt->bind_param("s", $_GET['p']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($uname);
$stmt->fetch();
$stmt->close();*/

$output='';
foreach ($resuldt as $key) {

  $output .= '<td>'.$key['name'].'</td>';
  $output .= '<td>'.$key['cid'].'</td>';
  $output .= '<td>'.$key['price'].'</td>';
  $output .= '<td>'.$key['qty'].'</td>';
  $output .= '<td>'.$key['description'].'</td>';
}
echo $output;


//echo "<h1>".$_GET['p']."</h1>";

?>
