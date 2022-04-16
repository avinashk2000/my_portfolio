
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
                                    <span class="card-title" >Experiences</span>
                                    <a href="add-experience" class="btn btn-outline-primary" style="float: right;">Add Experience</a>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                        <thead>
                                            <tr>
                                            <th> #S.No. </th>
                                            <th> Experience </th>
                                            <th> Company Name </th>
                                            <th> Details </th>
                                            <th> Experience Time Duration </th>
                                            <th colspan="2"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sn = 1;
                                            $sel = "select * from experience order by id ASC LIMIT 10";
                                            $query = mysqli_query($con, $sel);
                                            if (mysqli_num_rows($query) > 0) {
                                            while ($data = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr>
                                                <td><?= $sn; ?></td>
                                                <td><?= $data['experience']; ?></td>
                                                <td><?= $data['company_name']; ?></td>
                                                <td><?= wordwrap($data['details'],20); ?></td>
                                                <td><?= $data['start_time']; ?> - <?= $data['leave_time'];?></td>
                                                <td><a href="editexperience?id=<?= $data['id'];?>"><i class="fa fa-edit"></i></td>
                                                <td><a href="code/deleteexperience?id=<?= $data['id'];?>"><i class="fa fa-trash"></i></td>
                                                </tr>
                                            <?php
                                                $sn++;
                                            }
                                            } else {
                                            ?>
                                            <tr>
                                                <td colspan="5">
                                                <h3 class="text-danger text-center">I don't have any Experience...</h3>
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