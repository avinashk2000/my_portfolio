<?php
    require_once('../../database/connection.php');
    if (isset($_POST['update_tech']))
    {
        $id = $_POST['id'];
        $tech = $_POST['technology'];
        $update="UPDATE technology SET technology='$tech' where id='$id'";
        $query=mysqli_query($con,$update);
        if($query)
        {
            header("Location:../technology");
        }
    }
?>