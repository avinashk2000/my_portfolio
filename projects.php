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
    <!-- Blog Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>From Project</p>
                <h2>Latest Projects</h2>
            </div>
            <div class="row">
                <?php
                    $sel="SELECT * FROM my_projects";
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