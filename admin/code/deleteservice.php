<?php
    require_once("../../database/connection.php");
    if(isset($_GET['id']) && isset($_GET['image']))
    {
        $id=$_GET['id'];
        $image=$_GET['image'];
        $del="DELETE FROM service where id = '$id'";
        $query=mysqli_query($con,$del);
        if($query)
        {
            unlink('services_icon/'.$image);
            header("location:../services");
        }
    }
?> 