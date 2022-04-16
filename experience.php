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