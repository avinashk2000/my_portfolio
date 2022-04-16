<?php
require_once('database/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "csslink.php";
    ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <?php
    require_once('header.php');
    ?>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <?php
        require_once('intro.php');
    ?>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/profile.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Learn About Me</p>
                            <h2>8 Months Experience</h2>
                        </div>
                        <div class="about-text">
                            <p style="text-align:justify;">
                                I develop website with PHP, Laravel and CodeIgniter and also do website design with HTML, CSS, JavaScript,JQuery and manage database with the help of MySQL.
                            </p>
                        </div>
                        <div class="skills">
                            <?php
                            $sel = "SELECT * from skill limit 5";
                            $query = mysqli_query($con, $sel);
                            if ($query) {
                                $row = mysqli_num_rows($query);
                                if ($row > 0) {
                                    while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                        <div class="skill-name">
                                            <p><?= $data['skill_name']; ?></p>
                                            <p><?= $data['percentage']; ?> %</p>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="<?= $data['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"><?= $data['percentage']; ?> %</div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <p style="color:red; text-align:center;">I don't have any skill</p>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <a class="btn" href="my_all_skill">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What I do</p>
                <h2>Services</h2>
            </div>
            <div class="row">
                <?php
                $sel = "SELECT * from service limit 4";
                $query = mysqli_query($con, $sel);
                if ($query) {
                    if (mysqli_num_rows($query)) {

                        while ($data = mysqli_fetch_assoc($query)) {
                ?>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                                <div class="service-item">

                                    <div class="service-icon">
                                        <img src="admin/code/services_icon/<?= $data['icon'];?>" width="100" height="100" alt/>
                                    </div>
                                    <div class="service-text">
                                        <h3><?= $data['service']; ?></h3>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Resume</p>
                <h2>Working Experience</h2>
            </header>
            <div class="timeline">
                <?php
                $sel = "SELECT * from experience limit 3";
                $query = mysqli_query($con, $sel);
                if ($query) {
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_assoc($query)) {
                ?>
                            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date"><?= $data['start_time']; ?> - <?= $data['leave_time']; ?></div>
                                    <h2><?= $data['experience']; ?></h2>
                                    <h4><?= $data['company_name']; ?></h4>
                                    <p>
                                        <?= $data['details'] ?>
                                    </p>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Job Experience End -->

    <!-- Contact Start -->
    <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form action="code/contact_code.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" Name="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" name="message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" name="submit" value="Send Message" id="sendMessageButton" />Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Blog Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>From Project</p>
                <h2>Latest Projects</h2>
            </div>
            <div class="row">
                <?php
                    $sel="SELECT * FROM my_projects ORDER BY id DESC LIMIT 3 ";
                    $query=mysqli_query($con,$sel);
                    if($query)
                    {
                        if(mysqli_num_rows($query))
                        {
                            while($data=mysqli_fetch_assoc($query))
                            {
                                ?>
                                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                                        <div class="portfolio-wrap">
                                            <div class="portfolio-img">
                                                <img src="admin/code/project-image/<?= $data['project_image'];?>" alt="Image">
                                            </div>
                                            <div class="portfolio-text">
                                                <h3><a href="<?= $data['project_link'];?>" style="text-decoration:none; color:black;"><?= $data['project_name'] ;?></a></h3>
                                                <a class="btn" href="<?= $data['project_link'];?>" data-lightbox="portfolio">+</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    }

                ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>Avinash Kumar</h2>
                    <h3>Chakeri Mode, Kanpur UP.</h3>
                    <div class="footer-menu">
                        <a href="tel:+918650163913" style="text-decoration:none; color:white;"><i class="fa fa-phone">&nbsp;</i>+91 8650163913</a>,&nbsp;
                        <a href="mailto:avinashk8650@gmail.com" style="text-decoration:none; color:white;" target="_blank"><i class="fa fa-envelope">&nbsp;</i>avinashk8650@gmail.com</a>
                    </div>
                    <div class="footer-social">
                        <a href="https://twitter.com/Avinashk_10_09" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/avinash.chaurasiya.359" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/channel/UCPgCGzareR2W0Ag9EYAIfaw" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/avinash.k_10.09/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/avinash-kumar-19a173190/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">AvinashFolio</a>, All Right Reserved | Designed By <a href="https://www.linkedin.com/in/avinash-kumar-19a173190/" target="_blank">Avinash Kumar</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <?php
    require_once('jslink.php');
    ?>



</body>

</html>