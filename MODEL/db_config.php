

<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "wt_sp21_final";
    function execute($query)
    {
        global $server,$user,$password,$db;
        $conn = mysqli_connect($server,$user,$password,$db);
        mysqli_query($conn,$query);
    }
    function get($query)
    {
        global $server,$user,$password,$db;
        $conn = mysqli_connect($server,$user,$password,$db);
        $result = mysqli_query($conn,$query);
        $data = array();
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $data[] = $row;
            }
        }
        return $data;
    }
?>
