<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php
    require_once("csslink.php");
    ?>
</head>

<body>
    <div class="container-scroller">

        <?php
        require_once("navbar.php");
        ?>

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php
            require_once('sidebar.php');
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <span class="card-title" >Edit Project</span>
                                    <?php
                                        if(isset($_GET['id']) && isset($_GET['image']))
                                        {
                                            $id=$_GET['id'];
                                            $image=$_GET['image'];
                                            $sel="SELECT * FROM my_projects WHERE id='$id'";
                                            $query=mysqli_query($con,$sel);
                                            if($query)
                                            {
                                                $data=mysqli_fetch_assoc($query);
                                            }
                                        }
                                    ?>
                                    <form action="code/update-project-code.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="<?= $data['id'] ?>" name="id"/>
                                        <input type="hidden" value="<?= $data['project_image'] ?>" name="image"/>
                                        <label class="mb-3 mt-4">Project Name</label>
                                        <input type="text" name="project_name" value="<?= $data['project_name'] ?>"required placeholder="Enter Project..." class="form-control mb-4"/>
                                        <label class="mb-3">Project Link</label>
                                        <input type="text" name="project_link" value="<?= $data['project_link']; ?>" required placeholder="Enter Project Link..." class="form-control mb-4"/>
                                        <label class="mb-3">Project Image</label>
                                        <input type="file" name="project_image" class="form-control mb-4"/>
                                        <img src="code/project-image/<?= $data['project_image'];?>" width="100" height="100" alt="image"/><br/>
                                        <input type="submit" name="update_project" class="mt-4 btn btn-outline-primary" value="Update Project"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © AvinashFolio</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <?php
    require_once("jslink.php");
    ?>
</body>

</html>