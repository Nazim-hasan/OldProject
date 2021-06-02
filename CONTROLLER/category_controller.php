<?php
    require_once "MODEL/db_config.php";
    $category="";
    $err_category="";
    $has_error=false;

    function insertCategory($name)
    {
        $query="insert into categories VALUES (null,'$name')";
        execute($query);
      	header("Location: allcategories.php");
    }





    if(isset($_POST["edit_category"]) && ($has_error!='false')){
      editCategory($_POST["id"],$_POST["category_name"]);
    }
    function editCategory($id,$category){
      $query = "update categories set name='$category' where id=$id";
      execute($query);
    	header("Location: allcategories.php");

    }






    if(isset($_POST["add_category"]) || isset($_POST["edit_category"]))
    {
        if(empty($_POST["category_name"]))
        {
            $err_category="**enter category**";
            $has_error=true;
        }
        else
        {
            $category=$_POST["category_name"];
        }
        if(($has_error!='false') && ($_POST["add_category"]))
        {
            insertCategory($category);
        }
    }

    function getAllCategories()
    {
        $query = "select * from categories";
        $result = get($query);
        return $result;
    }

    function getCategory($id)
    {
        $query = "select * from categories where id=$id";
        $result = get($query);
        if(count($result) > 0)
        {
            return $result[0];
        }
        return false;
    }
?>
