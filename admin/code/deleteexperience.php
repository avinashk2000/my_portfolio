<?php
    require_once('../../database/connection.php');
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $del="DELETE FROM experience where id='$id'";
        $query=mysqli_query($con,$del);
        if($query)
        {
            header('location:../experience');
        }
    }
?>