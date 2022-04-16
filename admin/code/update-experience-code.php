<?php
    require_once("../../database/connection.php");
    if(isset($_POST['update_experience']))
    {
        $id=$_POST['id'];
        $experience=$_POST['experience'];
        $company_name=$_POST['company_name'];
        $details=$_POST['details'];
        $start_time=$_POST['start_time'];
        $leave_time=$_POST['leave_time'];
        $update="UPDATE experience SET experience='$experience', company_name='$company_name',details='$details', start_time='$start_time', leave_time='$leave_time' where id='$id'";
        $query = mysqli_query($con,$update);
        if($query)
        {
            header("Location:../experience");
        }
    }
?>