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
                                    <span class="card-title" >Add Project</span>
                                    <form action="code/add-project-code.php" method="post" enctype="multipart/form-data">
                                        <label class="mb-3 mt-4">Project Name</label>
                                        <input type="text" name="project_name" required placeholder="Enter Project..." class="form-control mb-4"/>
                                        <label class="mb-3">Project Link</label>
                                        <input type="text" name="project_link" required placeholder="Enter Project Link..." class="form-control mb-4"/>
                                        <label class="mb-3">Project Image</label>
                                        <input type="file" name="project_image" required  class="form-control mb-4"/>
                                        <input type="submit" name="add_project" class="btn btn-outline-primary" value="Add Project"/>
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