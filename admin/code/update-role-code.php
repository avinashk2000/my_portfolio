<?php
    require_once('../../database/connection.php');
    if(isset($_POST['update_role']))
    {
        $id=$_POST['id'];
        $role=$_POST['role'];
        $update="UPDATE role SET role='$role' where id='$id'";
        $query=mysqli_query($con,$update);
        if($query)
        {
            header("Location:../role");
        }
    }
?>