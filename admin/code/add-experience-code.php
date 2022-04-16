<?php
    require_once ('../../database/connection.php');
    if(isset($_POST['add_experience']))
    {
        $experience=$_POST['experience'];
        $company_name=$_POST['company_name'];
        $details=$_POST['details'];
        $start_time=$_POST['start_time'];
        $leave_time=$_POST['leave_time'];
        $ins="INSERT INTO experience(experience,company_name,details,start_time,leave_time) values('$experience','$company_name','$details','$start_time','$leave_time')";
        $query=mysqli_query($con,$ins);
        if($query)
        {
            header("Location:../experience");
            ?>
                <script type="text/javascript">alert("Experience Add Successfuly");</script>
            <?php
        }
        else
        {
            header("Location:add-experience");
            ?>
                <script type="text/javascript">alert("Experience Not Successfuly Added");</script>
            <?php
        }
    }
?>