<?php
    require_once('../../database/connection.php');
    if(isset($_POST['add_project']))
    {
        $project_name=$_POST['project_name'];
        $project_link=$_POST['project_link'];
        $project_image=$_FILES['project_image']['name'];
        $tmp_name=$_FILES['project_image']['tmp_name'];
        $exp=explode(".",$project_image);
        $ext=strtolower(end($exp));
        $p_image=$project_name . rand() . '.' .$ext;
        $path="project-image/".$p_image;
        if($ext=='jpg' or $ext=='jpeg' or $ext=='png')
        {
            if(move_uploaded_file($tmp_name,$path))
            {
                $ins="INSERT INTO my_projects(project_name,project_link,project_image) values('$project_name','$project_link','$p_image')";
                $query=mysqli_query($con,$ins);
                if($query)
                {
                    ?>
                        <script> alert('Project Added Successfully');</script>
                    <?php
                    header('Location:../projects.php');
                }
                else
                {
                    ?>
                        <script> alert('Project Added Failed');</script>
                    <?php
                    header('Location:../add-project.php');
                }
            }
            else
            {
                ?>
                    <script> alert('Image Not uploaded');</script>
                <?php
                header('Location:../add-project.php');
            }
        }
        else
        {
            ?>
                <script> alert('Image Formate Must Br JPG,PNG,JPEG');</script>
            <?php
            header('Location:../add-project.php');
        }
    }
?>