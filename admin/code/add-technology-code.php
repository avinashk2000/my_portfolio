<?php
    require_once("../../database/connection.php");
    if(isset($_POST['add_tech']))
    {
        $tech=$_POST['technology'];
        $Ins="INSERT INTO technology(technology) values('$tech')";
        $query=mysqli_query($con,$Ins);
        if($query)
        {
            header("Location:../technology");
            ?>
                <script type="text/javascript">alert('Technology Added Successfully');</script>
            <?php
        }
        else
        {
            header("Location:add-technology-code");
            ?>
                <script type="text/javascript">alert('Technology added Failure');</script>
            <?php
        }
    }
?>