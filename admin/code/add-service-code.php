<?php
    require_once('../../database/connection.php');
    if(isset($_POST['add_service']))
    {
        $service_name = $_POST['service_name'];
        $service_image=$_FILES['service_image']['name'];
        $tmp_service_image=$_FILES['service_image']['tmp_name'];
        $exp=explode('.',$service_image);
        $ext=strtolower(end($exp));
        $s_image=$service_name . rand() . '.' . $ext;
        $path="services_icon/".$s_image;
        if($ext=='jpg' or $ext=='jpeg' or $ext=='png')
        {
            if(move_uploaded_file($tmp_service_image,$path))
            {
                $ins="INSERT INTO service(service,icon) values('$service_name','$s_image')";
                $query=mysqli_query($con,$ins);
                if($query)
                {
                    ?>
                        <script type="text/javascript"> alert('Service Added Successfully');</script>
                    <?php
                    header('Location:../services');
                }
                else
                {
                    ?>
                        <script type="text/javascript"> alert('Service Added Failurefully');</script>
                    <?php
                    header('Location:../add-service');
                }
            }
            else
            {
                ?>
                    <script type="text/javascript"> alert('Image not uploaded');</script>
                <?php
                header('Location:../add-service');
            }
        }
        else
        {
            ?>
                <script type="text/javascript"> alert('Image Must Be jpg,jpeg,png formate');</script>
            <?php
            header('Location:../add-service');
        }
    }
?>