<?php
    $pname="";
    $err_pname="";
    $pcategory="";
    $err_pcategory="";
    $pprice="";
    $err_pprice="";
    $pquantity="";
    $err_pquantity="";
    $pdescription="";
    $err_pdescription="";
    $pimage="";
    $err_pimage="";
    $has_error=false;

    function validatePname($p_name)
    {
        if(strlen($p_name) < 3)
        {
            return false;
        }
        elseif(strpos($p_name,' '))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    if(isset($_POST["add_product"]) || isset($_POST["edit_product"]))
    {
        if(empty($_POST["pname"]))
        {
            $err_pname="**Name Required**";
            //echo $err_pname;
            $has_error=true;
        }
        elseif(!validatePname($_POST["pname"]))
        {
            $err_pname="**Product name must be atleast 3 char long and contain no white spaces**";
            $has_error=true;
        }
        else
        {
            $pname = $_POST["pname"];
        }

        if(!isset($_POST["pcategory"]))
        {
            $err_pcategory="**Please Select Category**";
            $has_error=true;
        }
        else
        {
            $pcategory=htmlspecialchars($_POST["pcategory"]);
        }

        if(empty($_POST["pprice"]))
        {
            $err_pprice="**Enter price**";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["pprice"]))
        {
            $err_pprice="**Only insert numeric value**";
            $has_error=true;
        }
        else
        {
            $pprice=$_POST["pprice"];
        }

        if(empty($_POST["pquantity"]))
        {
            $err_pquantity="**Enter quantity**";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["pquantity"]))
        {
            $err_pquantity="**Only insert numeric value**";
            $has_error=true;
        }
        else
        {
            $pquantity=$_POST["pquantity"];
        }

        if(empty($_POST["pdescription"]))
		 {
			 $err_pdescription="**description Required**";
             $has_error=true;
		 }
		 else
		 {
			 $pdescription=htmlspecialchars($_POST["pdescription"]);
		 
         }

         if(!isset($_POST["pimage"]))
         {
            $err_pimage="**insert product image**";
            $has_error=true;
         }
         else
         {
            $pimage=$_POST["pimage"];
         }

        

        // if(!$has_error)
        // {
        //     #session cookie & insert into database...
        // }
    }
?>