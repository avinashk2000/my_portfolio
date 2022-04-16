
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
                                    <span class="card-title" >Projects</span>
                                    <a href="add-project" class="btn btn-outline-primary" style="float: right;">Add Project</a>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th> #S.No. </th>
                                                <th> Project Image</th>
                                                <th> Project Name </th>
                                                <th> Project Link </th>
                                                <th colspan="2"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sn = 1;
                                                $sel = "select * from my_projects";
                                                $query = mysqli_query($con, $sel);
                                                if (mysqli_num_rows($query) > 0) {
                                                while ($data = mysqli_fetch_assoc($query)) {
                                                ?>
                                                    <tr>
                                                    <td><?= $sn; ?></td>
                                                    <td>
                                                        <img src="code/project-image/<?= $data['project_image'];?>" class="me-2" alt="image" title="<?= $data['project_name']; ?>">
                                                    </td>
                                                    <td> <?= $data['project_name'] ?> </td>
                                                    <td> <?= $data['project_link']; ?> </td>
                                                    <td><a href="editprojects?id=<?= $data['id']?> && image=<?= $data['project_image']?>"><i class="fa fa-edit"></i></a></td>
                                                    <td><a href="code/deleteproject?id=<?= $data['id']?> && image=<?= $data['project_image']?>"><i class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                <?php
                                                    $sn++;
                                                }
                                                } else {
                                                ?>
                                                <tr>
                                                    <td class="text-danger">there is not any project...</td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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