<?php
require 'CONTROLLER/addManagerController.php';
$username = $_GET["uname"];
$rs= checkUsername($username);
if($rs){
  echo "";
}
else echo "<span>Already Exist!</span>";
?>
