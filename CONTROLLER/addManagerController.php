
<?php
    require_once "MODEL/db_config.php";

    $ename="";
    $err_ename="";
    $uname="";
    $err_uname="";
    $eaddress="";
    $err_eaddress="";
    $number="";
    $err_number="";
    $email="";
    $err_email="";
    $jpos="";
    $err_jpos="";
    $esalary="";
    $err_esalary="";
    $has_error=false;


    function checkUsername($username){
      $query="select * from manager where username='$username'";
      $result=get($query);
      if(count($result) > 0){
        return false;
      }
      else{
      return true;
    }
    }

  /*  funcion updateManger($ename,$eaddress,$number,$email,$jpos,$esalary)
    {
      $query = "update user set name='$name',address=$eaddress,phone='$number',email='$email', jobposition='$jpos',basicsalary=$esalary";
      execute($query);
      header("Location: manManager.php");
    }
*/

    function insertManager($ename,$uname,$eaddress,$number,$email,$jpos,$esalary)
    {
        $query="INSERT INTO manager (name,username,address, phone, email, jobposition, basicsalary, grandsalary) VALUES ('$ename','$uname','$eaddress','$number','$email','$jpos','$esalary','$esalary')";
        execute($query);
        header("Location: manManager.php");
    }

    if(isset($_POST["editManager"])){
      editManager($_POST["id"],$_POST["ename"],$_POST["uname"],$_POST["number"],$_POST["email"],$_POST["address"],$_POST["jpos"],$_POST["salary"]);
    }
    function editManager($id,$ename,$uname,$number,$email,$eaddress,$jpos,$esalary){
      $query = "update manager set name='$ename',username='$uname',address='$eaddress',phone='$number',email='$email',jobposition='$jpos',basicsalary='$esalary',grandsalary='$esalary' where id=$id";
      execute($query);
      header("Location: manManager.php");

    }



    function getmanager($id){
      $query="select * from manager where id=$id";
      $result= get($query);
      if(count($result) > 0){
        return $result[0];
      }
      return false;

    }

    function getAllManager()
    {
        $query = "select * from manager";
        $result = get($query);
        return $result;
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

    if(isset($_POST["add_manager"]) || isset($_POST["edit_manager"]))
    {
        if(empty($_POST["name"]))
        {
            $err_ename="[Name Required]";
            //echo $err_pname;
            $has_error=true;
        }
        else
        {
            $ename = htmlspecialchars($_POST["name"]);
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
             $err_jpos="[Please Select Category]";
             $has_error=true;
         }
         else
         {
             $jpos=htmlspecialchars($_POST["jpos"]);
         }

         if(empty($_POST["esalary"]))
         {
             $err_esalary="[Enter Salary]";
             $has_error=true;
         }
         elseif(!is_numeric($_POST["esalary"]))
         {
             $err_esalary="[Only insert numeric value]";
             $has_error=true;
         }
         else
         {
             $esalary=$_POST["esalary"];
         }



         if(!$has_error)
         {
             insertManager($ename,$uname,$eaddress,$number,$email,$jpos,$esalary);
         }

        // if(!$has_error)
        // {
        //     #session cookie & insert into database...
        // }
    }
?>
