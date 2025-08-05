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

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="../img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-primary text-uppercase fw-bold mb-0">Welcome To Alpha Advisory
                                    Associates </h4>
                                <h2 class=" text-uppercase text-white mb-0">Do you know who your shareholders are?</h2>
                                <p class="mb-5 fs-5">With over 25 years of experience and 1,500+ projects completed in
                                    12 Countries, Alpha Advisory Associates delivers precision and insights that drive
                                    results.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-0">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h3 class="text-white me-2">Follow Us:</h3>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="../img/carousel-2.jpg" class="img-fluid w-75" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-0">Welcome To Alpha Advisory
                                    Associates </h4>
                                <h2 class="text-uppercase text-white mb-0">Your Partner in Investor Relations
                                    Success</h2>
                                <p class="mb-5 fs-5">From perception studies to roadshow set-up, we help you connect,
                                    communicate, and convert institutional interest into long-term partnerships.
                                </p>
                                <div class="d-flex justify-content-center flex-shrink-0 mb-0">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h3 class="text-white me-2">Follow Us:</h3>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">About Us</h4>
                        <h2 class="mb-0">Navigating Governance. Empowering Engagement.</h2>
                        <p class="mb-0">In today’s ever-evolving corporate governance environment, issuers and boards
                            require seasoned guidance to make informed, strategic decisions. Alpha Advisory Associates
                            is led by senior professionals dedicated to delivering accuracy, responsiveness, and
                            customized service.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Our Services</h4>
                                        <p>We offer tailored solutions including shareholder ID research, telephone
                                            solicitation, investor targeting, roadshow setup, perception studies, and
                                            digital annual report distribution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Why Choose Us</h4>
                                        <p>Clients trust us for accurate data, fast response across time zones,
                                            attention to detail, and strong ties with 400+ global institutions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover
                                    Now</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Call Us</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+01234567890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="rounded position-relative overflow-hidden">
                        <img src="../img/logomain.png" class="img-fluid rounded w-75" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid offer-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h2 class=" mb-0"> Your Partner in Proxy, IR, and Shareholder Solutions</h2>
                <p class="mb-0">We deliver a focused suite of investor communications and governance solutions designed
                    to meet the needs of global companies:
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills bg-light rounded p-5">
                        <a class="accordion-link p-4 active mb-0" data-bs-toggle="pill" href="#collapseOne">
                            <h5 class="mb-0">Shareholder ID</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseTwo">
                            <h5 class="mb-0">Global Proxy Solicitation</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseThree">
                            <h5 class="mb-0">Investor Relations Support</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                            <h5 class="mb-0">Governance Roadshows</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="../img/offer-1.jpg" class="img-fluid w-75 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h3 class="mb-0">Accurate ownership insights to inform strategy and
                                        anticipate activism.</h3>
                                    <p class="mb-0">Gain clarity on institutional ownership and identify activist
                                        positions to support strategic decision-making.
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="../img/offer-2.jpg" class="img-fluid w-75 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-7 mb-0">Maximize voting outcomes with targeted solicitation and
                                        vote analytics.</h2>
                                    <p class="mb-0">Expert management of annual and special meeting campaigns, vote
                                        projections, and post-vote analysis.
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="../img/offer-3.jpg" class="img-fluid w-75 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-7 mb-0">Build stronger investor relationships with data-driven
                                        communications.</h2>
                                    <p class="mb-0">Customized perception studies, investor targeting, and communication
                                        strategies to strengthen market relationships.
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="../img/offer-4.jpg" class="img-fluid w-75 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-7 mb-0">Connect with key stakeholders through well-executed
                                        global outreach.</h2>
                                    <p class="mb-0">Plan and execute high-impact roadshows that connect you with key
                                        global investors and decision-makers.
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- FAQs Start -->
    <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">FAQs</h4>
                <h2 class=" mb-0">Frequently Asked Questions</h2>
                <p class="mb-0">Find quick answers to common questions about our services, process, and how we support your shareholder communication goals.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    What Does This Tool Do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What Are The Disadvantages Of Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Is Online Trading Safe?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    What Is Online Trading, And How Dose It Work?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Which App Is Best For Online Trading?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    How To Create A Trading Account?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="../img/about-2.png" class="img-fluid w-75" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->

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