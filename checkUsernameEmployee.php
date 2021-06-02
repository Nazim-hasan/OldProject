<?php
require 'CONTROLLER/add_employee_controller.php';
$username = $_GET["uname"];
$rs= checkUsername($username);
if($rs){
  echo "";
}
else echo "<span>Already Exist!</span>";
?>
