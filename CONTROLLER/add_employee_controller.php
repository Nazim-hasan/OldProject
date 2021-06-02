<?php
    require_once "MODEL/db_config.php";
    $ename="";
    $err_ename="";
    $uname="";
    $err_uname="";
    $jpos="";
    $err_jpos="";
    $esalary="";
    $err_esalary="";
    $eaddress="";
    $err_eaddress="";
    $email="";
    $err_email="";
    $number="";
    $err_number="";
    $has_error=false;




    function checkUsername($username){
      $query="select * from employees where username='$username'";
      $result=get($query);
      if(count($result) > 0){
        return false;
      }
      else{
      return true;
    }
    }



    function getAllEmployees()
    {
        $query = "select * from employees";
        $result = get($query);
        return $result;
    }

    function insertEmployee($ename,$uname,$jpos,$esalary,$eaddress,$email,$number)
    {
      $query="INSERT INTO employees (name,username, position, basic_salary, eadd, email, phonenum) VALUES ('$ename','$uname','$jpos','$esalary','$eaddress','$email','$number')";
      execute($query);
      header("Location: manageEmployee.php");
    }











    if(isset($_POST["editEmployee"])){
      editEmployee($_POST["id"],$_POST["ename"],$_POST["uname"],$_POST["jpos"],$_POST["salary"],$_POST["address"],$_POST["email"],$_POST["number"]);
    }
    function editEmployee($id,$ename,$uname,$jpos,$esalary,$eaddress,$email,$number){
      $query = "update employees set name='$ename',username='$uname',position='$jpos',basic_salary='$esalary',eadd='$eaddress',email='$email',phonenum='$number' where id=$id";
      execute($query);
      header("Location: manageEmployee.php");

    }
    function getEmployee($id){
      $query="select * from employees where id=$id";
      $result= get($query);
      if(count($result) > 0){
        return $result[0];
      }
      return false;

    }









    function validateEname($e_name)
    {
        if(strlen($e_name) < 3)
        {
            return false;
        }
        elseif(strpos($e_name,' '))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    if(isset($_POST["add_employee"]) || isset($_POST["edit_employee"]))
    {
        if(empty($_POST["ename"]))
        {
            $err_ename="**Name Required**";
            //echo $err_pname;
            $has_error=true;
        }
        elseif(!validateEname($_POST["ename"]))
        {
            $err_ename="**Employee's name must be atleast 3 char long and contain no white spaces**";
            $has_error=true;
        }
        else
        {
            $ename = htmlspecialchars($_POST["ename"]);
        }

        if(empty($_POST["uname"]))
   		 {
   			 $err_uname="[Username Required]";
                $has_error=true;
   		 }
   		 elseif(strlen($_POST["uname"])<6)
   		 {
   			 $err_uname="[Username must be 6 charachters long]";
                $has_error=true;
   		 }
   		 elseif(strpos($_POST["uname"]," "))
   		 {
   			 $err_uname="[Username should not contain white space]";
                $has_error=true;
   		 }
   		 else
   		 {
   			 $uname=htmlspecialchars($_POST["uname"]);
   		 }

        if(empty($_POST["phone"]))
        {
            $err_number="[Number Required]";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["phone"]))
        {
            $err_number="[number should only contain neumeric value]";
            $has_error=true;
        }
        else
        {
            $number=htmlspecialchars($_POST["phone"]);
        }


        if(empty($_POST["eaddress"])){
          $err_eaddress="[Address required]";
          $has_error=true;
        }
        else{
          $eaddress=htmlspecialchars($_POST["eaddress"]);
        }


        //Email Validation
        if(empty($_POST["email"]))
        {
            $err_email="[Email required]";
            $has_error=true;
        }
        elseif(!strpos($_POST["email"],"@"))
        {
            $err_email="[email must contain '@' sign]";
            $has_error=true;
        }
        else
        {
            $pos_at  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$pos_at))
            {
                $err_email="[at least one dot needed after '@' sign]";
                $has_error=true;
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }

         }

         if(!isset($_POST["jpos"]))
         {
             $err_jpos="**Please Select Category**";
             $has_error=true;
         }
         else
         {
             $jpos=htmlspecialchars($_POST["jpos"]);
         }








         if(empty($_POST["esalary"]))
         {
             $err_esalary="**Enter Salary**";
             $has_error=true;
         }
         elseif(!is_numeric($_POST["esalary"]))
         {
             $err_esalary="**Only insert numeric value**";
             $has_error=true;
         }
         else
         {
             $esalary=$_POST["esalary"];
         }







         if(!$has_error)
         {
        //     #session cookie & insert into database...
        insertEmployee($ename,$uname,$jpos,$esalary,$eaddress,$email,$number);
        }

    }
?>
