<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "includes/connection.php";
?>
<?php include "includes/head.php" ?>

<body>

    <!-- Spinner Start -->
    <?php include "includes/spinner.php" ?>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php include "includes/topbar.php" ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <?php include "includes/navbar.php" ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Our Services</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h1 class="display-5 mb-4">Expert Shareholder Communication Solutions</h1>
                <p class="mb-0">We provide tailored services to help companies engage effectively with shareholders,
                    manage governance, and strengthen investor relations globally.
                </p>
            </div>
            <div class="row g-4">
                <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
                    <h3 class="text-primary">Insightful Shareholder Intelligence</h3>
                    <p>Gain clarity on who owns your stock. Our identification services help you understand investor
                        behavior, track activist funds, and shape effective engagement strategies.</p>
                </div>
                <!-- Shareholder ID -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="../img/service-1.jpg" class="img-fluid rounded-top w-100"
                                alt="Shareholder ID">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Shareholder Identification</a>
                            <p class="mb-4">Accurate shareholder ID, activist hedge fund tracking, and deep ownership
                                analysis to guide your strategy.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Proxy Solicitation -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="../img/service-2.jpg" class="img-fluid rounded-top w-100"
                                alt="Proxy Solicitation">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Proxy Solicitation</a>
                            <p class="mb-4">Manage annual and extraordinary meetings, vote projections, and post-meeting
                                analysis with confidence.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Perception Studies -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="../img/service-3.jpg" class="img-fluid rounded-top w-100"
                                alt="Perception Studies">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Perception Studies</a>
                            <p class="mb-4">Gauge investor sentiment through direct feedback and turn insights into
                                actionable communication strategies.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Roadshow Set-Up -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="../img/service-4.jpg" class="img-fluid rounded-top w-100"
                                alt="Roadshow Setup">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Roadshow Set-Up</a>
                            <p class="mb-4">Coordinate investor meetings globally and connect with decision-makers to
                                strengthen engagement.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-5">
                <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
                    <h3 class="text-primary">Strategic Proxy Management</h3>
                    <p>From vote projections to post-meeting analysis, we guide you through the entire proxy
                        process—ensuring informed decisions and strong shareholder support.</p>
                </div>
                <!-- Annual Report Distribution -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="../img/service-5.jpg" class="img-fluid rounded-top w-100"
                                alt="Annual Report Distribution">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Annual Report Distribution</a>
                            <p class="mb-4">Electronic report delivery solutions to ensure timely and compliant
                                shareholder communications.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Post-Meeting Vote Analysis -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="../img/service-6.jpg" class="img-fluid rounded-top w-100" alt="Post-Meeting Vote Analysis">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Post-Meeting Vote Analysis</a>
                            <p class="mb-4">Understand how your investors voted and why. We deliver detailed reports and insights to refine your future engagement strategies.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>


                <!-- Vote Projections -->
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="../img/service-1.jpg" class="img-fluid rounded-top w-100"
                                alt="Vote Projections">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Vote Projections</a>
                            <p class="mb-4">Estimate and influence expected voting outcomes before key meetings through
                                strategic forecasting.</p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-5 mb-4">Trusted by Global Companies</h1>
                <p class="mb-0">
                    Our clients value our responsiveness, precision, and ability to deliver results across time zones.
                    Here’s what they have to say about working with Alpha Advisory Associates.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <?php
                $query = "SELECT * FROM testimonials WHERE status = 'visible' ORDER BY created_at DESC LIMIT 10";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $name = htmlspecialchars($row['name']);
                    $position = htmlspecialchars($row['position']);
                    $company = htmlspecialchars($row['company']);
                    $message = htmlspecialchars($row['message']);
                    $imagePath = '../' . $row['image_path'];
                    $image = (!empty($row['image_path']) && file_exists($imagePath))
                        ? $imagePath
                        : '../img/testimonialdefault.jpg';
                ?>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="<?= $image ?>" class="img-fluid" alt="<?= $name ?>">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0"><?= $message ?></p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0"><?= $name ?></h4>
                                <p class="mb-0"><?= $position ?><?= $company ? ' at ' . $company : '' ?></p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include "includes/footer.php" ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <?php include "includes/copyright.php" ?>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>