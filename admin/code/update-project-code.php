<?php
    require_once('../../database/connection.php');
    if(isset($_POST['update_project']))
    {
        $id=$_POST['id'];
        $image=$_POST['image'];
        $project_link=$_POST['project_link'];
        $project_name=$_POST['project_name'];
        $project_image=$_FILES['project_image']['name'];
        if(!empty($project_image))
        {
            $tmp_name=$_FILES['project_image']['tmp_name'];
            $exp=explode('.',$project_image);
            $ext=strtolower(end($exp));
            $p_image=$project_image . rand() . '.' . $ext;
            $path="project-image/".$p_image;
            if($ext=='jpg' or $ext=='jpeg' or $ext=='png')
            {
                if(move_uploaded_file($tmp_name,$path))
                {
                    $update="UPDATE my_projects SET project_name='$project_name',project_link='$project_link',project_image='$p_image' where id='$id'";
                    $query=mysqli_query($con,$update);
                    if($query)
                    {
                        unlink('project-image/'.$image);
                        header('Location:../projects');
                    }
                }
                else
                {
                    echo 'file not move';
                }
            }
        }
        else
        {
            $update="UPDATE my_projects SET project_name='$project_name',project_link='$project_link' where id='$id'";
            $query=mysqli_query($con,$update);
            if($query)
            {
                header('Location:../projects');
            }
        }
    }
?>