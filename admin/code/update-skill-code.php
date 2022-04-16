<?php
    require_once("../../database/connection.php");
    if(isset($_POST['update_skill']))
    {
        $id = $_POST['id'];
        $skill = $_POST['skill'];
        $percentage = $_POST['percentage'];
        $update="UPDATE skill SET skill_name='$skill', percentage='$percentage' where id='$id'";
        $query=mysqli_query($con,$update);
        if($query)
        {
            header("Location:../skills");
        }
        else
        {
            echo "Update Error";
        }
    }
?>