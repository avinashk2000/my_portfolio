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
                                    <span class="card-title" >Edit Service</span>
                                    <?php
                                        if(isset($_GET['id']) && isset($_GET['image']))
                                        {
                                            $id=$_GET['id'];
                                            $image=$_GET['image'];
                                            $sel="SELECT * FROM service where id = '$id'";
                                            $query=mysqli_query($con,$sel);
                                            if($query)
                                            {
                                                $data=mysqli_fetch_assoc($query);
                                            }
                                        }
                                    ?>
                                    <form action="code/update-service-code.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="<?= $id;?>" name="id"/>
                                        <input type="hidden" name="image" value="<?= $image;?>"/>
                                        <label class="mb-3 mt-4">Service Name</label>
                                        <input type="text" name="service_name" value="<?= $data['service'] ?>" required placeholder="Enter Service Name..." class="form-control mb-4"/>
                                        <label class="mb-3">Service Image</label>
                                        <input type="file" name="service_image" class="form-control mb-4"/>
                                        <img src="code/services_icon/<?= $data['icon'];?>" width="100" height="100" alt="<?= $data['service'];?>"/><br/>
                                        <input type="submit" name="update_service" class="mt-4 btn btn-outline-primary" value="Update Service"/>
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