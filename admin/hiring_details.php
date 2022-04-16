
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
                                    <span class="card-title" >Contact Information</span>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th> #S.No. </th>
                                                <th> Company Name </th>
                                                <th> Role </th>
                                                <th> Technology </th>
                                                <th> Contact Number</th>
                                                <th> Email </th>
                                                <th> Job Type </th>
                                                <th> Company Website Link </th>
                                                <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sn = 1;
                                                $sel = "select * from hire_details order by id ASC LIMIT 10";
                                                $query = mysqli_query($con, $sel);
                                                if (mysqli_num_rows($query) > 0) {
                                                while ($data = mysqli_fetch_assoc($query)) {
                                                ?>
                                                    <tr>
                                                    <td><?= $sn; ?></td>
                                                    <td><?= $data['company_name']; ?></td>
                                                    <td><?= $data['role']; ?></td>
                                                    <td><?= $data['technology']; ?></td>
                                                    <td><?= $data['contact_number']; ?></td>
                                                    <td><?= $data['email'];?></td>
                                                    <td><?= $data['job_type']; ?></td>
                                                    <td><a href="<?= $data['link']; ?>" style="text-decoration:none; color:blue;"><?= $data['link']; ?></a></td>
                                                    <td><a href="code/deletehiredetails?id=<?= $data['id'];?>"><i class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                <?php
                                                    $sn++;
                                                }
                                                } else {
                                                ?>
                                                <tr>
                                                    <td colspan="5">
                                                    <h3 class="text-danger text-center">Any One Not Contact With Us...</h3>
                                                    <td>
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