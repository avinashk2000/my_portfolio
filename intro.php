<div class="hero" id="home" style="border-bottom:1px solid white;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Avinash Kumar</h1>
                            <h2></h2>
                            <?php
                            $sel = "SELECT * from portfolio";
                            $query = mysqli_query($con, $sel);
                            if ($query) {
                                while ($role = mysqli_fetch_assoc($query)) {
                            ?>
                                    <div class="typed-text"><?= $role['role']; ?></div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="hero-btn">
                            <a type="button" class="btn" data-toggle="modal" data-target="#hireme">Hire Me</a>
                            <!-- hire modal -->
                            <div class="modal fade" id="hireme" tabindex="-1" role="dialog" aria-labelledby="hiremeTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hiremeTitle">Hireing Form</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="code/hire_code.php" method="post">
                                                <label class="mb-2">Enter Company Name</label>
                                                <input type="text" name="cname" id="cname" class="form-control mb-3" placeholder="Enter Company Name" required />
                                                <label class="mb-2">Enter Company Contact Number</label>
                                                <input type="text" name="contact_number" id="cname" class="form-control mb-2" placeholder="Enter Company contact Number..." required />
                                                <label class="mb-2">Enter E-Mail Address</label>
                                                <input type="email" name="email" placeholder="Enter Email Address..." required  class="form-control"/>
                                                <label class="mt-2">Role</label>
                                                <select name="role" class="form-control" required>
                                                    <option type="hidden">Choose Role</option>
                                                    <?php
                                                    $sel1 = "SELECT * from role";
                                                    $query = mysqli_query($con, $sel1);
                                                    if ($query) {
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                            <option value="<?= $data['role']; ?>"><?= $data['role'] ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label class="mt-2">Technology</label>
                                                <select name="tech" class="form-control" required>
                                                    <option type="hidden">Choose Role</option>
                                                    <?php
                                                    $sel2 = "SELECT * from technology";
                                                    $query = mysqli_query($con, $sel2);
                                                    if ($query) {
                                                        while ($data = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                            <option value="<?= $data['technology']; ?>"><?= $data['technology'] ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label class="mt-2">Job Type</label>
                                                <select name="jtype" class="form-control" required>
                                                    <option type="hidden">Choose Job Type</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Freelancing">Freelancing</option>
                                                </select>
                                                <label class="mt-2">Enter Company Website Link</label>
                                                <input type="text" name="link" placeholder="Enter Company Website Link" class="form-control" />
                                                <input value="Hire" type="submit" name="submit" id="btn" class="btn btn-secondary" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end hire modal -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="img/avinash2.png" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>