<?php
    require_once('../../database/connection.php');
    if(isset($_POST['update_service']))
    {
        $id=$_POST['id'];
        $image=$_POST['image'];
        $service=$_POST['service_name'];
        $service_image=$_FILES['service_image']['name'];
        if(!empty($service_image))
        {
            $tmp_name=$_FILES['service_image']['tmp_name'];
            $exp=explode('.',$service_image);
            $ext=strtolower(end($exp));
            $s_image=$service_image . rand() . '.' . $ext;
            $path="services_icon/".$s_image;
            if($ext=='jpg' or $ext=='jpeg' or $ext=='png')
            {
                if(move_uploaded_file($tmp_name,$path))
                {
                    $update="UPDATE service SET service='$service',icon='$s_image' where id='$id'";
                    $query=mysqli_query($con,$update);
                    if($query)
                    {
                        unlink('services_icon/'.$image);
                        header('Location:../services');
                    }
                }
                else
                {
                    echo 'file not move';
                }
            }
            else
            {
                echo "error";
            }
        }
        else
        {
            $update="UPDATE service SET service='$service' where id='$id'";
            $query=mysqli_query($con,$update);
            if($query)
            {
                header('Location:../services');
            }
        }
    }
    else
    {
        echo "error";
    }
?>