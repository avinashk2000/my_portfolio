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
                                    <span class="card-title" >Add Experience</span>
                                    <form action="code/add-experience-code.php" method="post" enctype="multipart/form-data">
                                        <label class="mb-3 mt-4">Experience</label>
                                        <input type="text" name="experience" required placeholder="Enter Project..." class="form-control mb-4"/>
                                        <label class="mb-3">Company Name</label>
                                        <input type="text" name="company_name" required placeholder="Enter Project Link..." class="form-control mb-4"/>
                                        <label class="mb-3">Details</label>
                                        <textarea name="details" rows="5" placeholder="Enter Eperience Details"class="form-control mb-4"></textarea>
                                        <label class="mb-3">Start Time</label>
                                        <input type="month" name="start_time" required  class="form-control mb-4"/>
                                        <label class="mb-3">Leave Time</label>
                                        <input type="month" name="leave_time" required  class="form-control mb-4"/>
                                        <input type="submit" name="add_experience" class="btn btn-outline-primary" value="Add Experience"/>
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