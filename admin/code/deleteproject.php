<?php
    require_once('../../database/connection.php');
    if(isset($_GET['id']) && isset($_GET['image']))
    {
        $id=$_GET['id'];
        $image=$_GET['image'];
        $del="DELETE from my_projects where id='$id'";
        $query=mysqli_query($con,$del) or die('Query Failed: DELETE');
        if($query)
        {
            unlink('project-image/'.$image);
            header('location:../projects');
        }
    }
    echo "error";
?>