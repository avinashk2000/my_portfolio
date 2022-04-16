<?php
    require_once("../../database/connection.php");
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $del="DELETE FROM contact_info where id='$id'";
        $query =mysqli_query($con,$del);
        if($query)
        {
            header("Location:../contact_info");
        }
    }
?>