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
          <div class="page-header">
            <h3 class="page-title">
              <span class="fa fa-home " style="color:#bba8bff5"></span> Dashboard
            </h3>
          </div>
          <div class="row">
            <div class="col-sm-4 grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-dark">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <?php
                  $sel = "SELECT * from skill";
                  $query = mysqli_query($con, $sel);
                  $row = mysqli_num_rows($query)
                  ?>
                  <h4 class="font-weight-normal mb-3">Skills 
                  </h4>
                  <h2><?= $row; ?></h2>
                  <?php
                  ?>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card bg-gradient-info card-img-holder text-dark">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <?php
                  $sel = "SELECT * from my_projects";
                  $query = mysqli_query($con, $sel);
                  $row = mysqli_num_rows($query)
                  ?>
                  <h4 class="font-weight-normal mb-3">No. of Projects 
                  </h4>
                  <h2><?= $row; ?></h2>
                  <?php
                  ?>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card bg-gradient-success card-img-holder text-dark">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <?php
                  $sel = "SELECT * from hire_details";
                  $query = mysqli_query($con, $sel);
                  $row = mysqli_num_rows($query)
                  ?>
                  <h4 class="font-weight-normal mb-3">No. of hireing people
                  </h4>
                  <h2><?= $row; ?></h2>
                  <?php
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 grid-margin">
              <div class="card bg-gradient-primary card-img-holder text-dark">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <?php
                  $sel = "SELECT * from service";
                  $query = mysqli_query($con, $sel);
                  $row = mysqli_num_rows($query)
                  ?>
                  <h4 class="font-weight-normal mb-3">Services
                  </h4>
                  <h2><?= $row; ?></h2>
                  <?php
                  ?>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card bg-gradient-warning card-img-holder text-dark">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <?php
                  $sel = "SELECT * from technology";
                  $query = mysqli_query($con, $sel);
                  $row = mysqli_num_rows($query)
                  ?>
                  <h4 class="font-weight-normal mb-3 text-dark">Technology
                  </h4>
                  <h2 class="text-dark"><?= $row; ?></h2>
                  <?php
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recently Added Projects</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> #S.No. </th>
                          <th> Project Image</th>
                          <th> Project Name </th>
                          <th> Project Link </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sn = 1;
                        $sel = "select * from my_projects order by id DESC LIMIT 5";
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
            <div class="col-6 grid-margin">
              <div class="card">
                <div class="card-body">
                  <span class="card-title">Recently Learned skills</span>
                  <div class="table-responsive mt-2">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> #S.No. </th>
                          <th> Skill </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sn = 1;
                        $sel = "select * from skill order by id ASC LIMIT 5";
                        $query = mysqli_query($con, $sel);
                        if (mysqli_num_rows($query) > 0) {
                          while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                              <td><?= $sn; ?></td>
                              <td><?= $data['skill_name']; ?></td>
                            </tr>
                          <?php
                            $sn++;
                          }
                        } else {
                          ?>
                          <tr>
                            <td colspan="5">
                              <h3 class="text-danger text-center">Not any skill...</h3>
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
          <div class="row">
            <div class="col-6 grid-margin">
              <div class="card">
                <div class="card-body">
                  <span class="card-title">Recently Start Services</span>
                  <div class="table-responsive mt-2">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> #S.No. </th>
                          <th> Services </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sn = 1;
                        $sel = "select * from service order by id ASC LIMIT 5";
                        $query = mysqli_query($con, $sel);
                        if (mysqli_num_rows($query) > 0) {
                          while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                              <td><?= $sn; ?></td>
                              <td><?= $data['service']; ?></td>
                            </tr>
                          <?php
                            $sn++;
                          }
                        } else {
                          ?>
                          <tr>
                            <td colspan="5">
                              <h3 class="text-danger text-center">Not Available Any Services...</h3>
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
            <div class="col-6 grid-margin">
              <div class="card">
                <div class="card-body">
                  <span class="card-title">Recently Start Services</span>
                  <div class="table-responsive mt-2">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> #S.No. </th>
                          <th> Experience </th>
                          <th> Company Name </th>
                          <th> Time Duration </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sn = 1;
                        $sel = "select * from experience order by id ASC LIMIT 5";
                        $query = mysqli_query($con, $sel);
                        if (mysqli_num_rows($query) > 0) {
                          while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                              <td><?= $sn; ?></td>
                              <td><?= $data['experience']; ?></td>
                              <td><?= $data['company_name'];?></td>
                              <td><?= $data['time_duraion'];?></td>
                            </tr>
                          <?php
                            $sn++;
                          }
                        } else {
                          ?>
                          <tr>
                            <td colspan="5">
                              <h3 class="text-danger text-center">Not Available Any Services...</h3>
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