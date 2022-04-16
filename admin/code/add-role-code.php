<?php
    require_once("../../database/connection.php");
    if(isset($_POST['add_role']))
    {
        $role=$_POST['role'];
        $ins="INSERT INTO role(role) VALUES('$role')";
        $query=mysqli_query($con,$ins);
        if($query)
        {
            header('Location:../role');
            ?>
                <script type="text/javascript">alert('Role Added Successfully');</script>
            <?php
        }
        else
        {
            header('Location:add-role');
            ?>
                <script type="text/javascript">alert('Role added failed');</script>
            <?php
        }
    }
?>