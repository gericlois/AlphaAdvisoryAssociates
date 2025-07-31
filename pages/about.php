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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">About Us</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">About Us</h4>
                        <h1 class="display-5 mb-4">Meet Alpha Advisory Associates</h1>
                        <p class="mb-4">
                            Alpha Advisory Associates, Inc. was formed in 2012 by Julian Cassells. After the Altman Group exited the Shareholder Identification and Global Proxy Solicitation business in mid-2011, the Colgate University alum set out on her own. Cassells was joined by senior level executives from the former Altman division, as the passion and drive to provide very high level service offerings remained.
                        </p>
                        <p class="mb-4">
                            In today’s highly volatile corporate governance environment, it is essential that issuers and their boards have experienced advisors to guide them through the challenges that lay ahead. Led by a team of senior professionals and a commitment to provide the highest level of client service, Alpha Advisory Associates has established itself as the preeminent full-service firm providing shareholder identification, proxy solicitation, and other IR related services to company’s located outside of the United States.
                        </p>
                        <p class="mb-4">
                            Collectively, our executives have worked on over 200 companies, offering them their own customized shareholder identification research, as well as managing telephone solicitation campaigns. Other services our clients request from us are, but not limited to Investor Targeting, Investor Roadshow Set-up, Perception Studies, and Electronic Annual Report Distribution.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Our Goal</h4>
                                        <p>Excellent Identification Rate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Year Of Expertise</h4>
                                        <p>Have Completed over 1500 Projects in 12 Countries over last 25 Years </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Call Us</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+862-250-6716</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Clients Tell Us</h4>
                <h1 class="display-5 mb-4">What Our Clients Say About Us</h1>
                <p class="mb-0">Trusted globally for our accuracy, responsiveness, and strategic insight—here’s why companies choose Alpha Advisory Associates.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-chart-line fa-4x text-primary"></i>
                        </div>
                        <h4>Unmatched Accuracy</h4>
                        <p class="mb-4">“The information we provide is the most accurate of any provider they have used.”
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-university fa-4x text-primary"></i>
                        </div>
                        <h4>Exceptional Responsiveness</h4>
                        <p class="mb-4">“We are the most responsive firm they have dealt with.”
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-file-alt fa-4x text-primary"></i>
                        </div>
                        <h4>Detail-Oriented Approach</h4>
                        <p class="mb-4">“We have a focus on detail that matches their needs.”
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                        </div>
                        <h4>Global Flexibility</h4>
                        <p class="mb-4">“They are impressed by our ability to work across time zones.”
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-5 mb-4">Meet Our Executives</h1>
                <p class="mb-0">Experienced leadership driving strategic shareholder solutions worldwide.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-title">
                            <h2 class="mb-0">Julian Cassells</h2>
                            <p class="mb-1"><i>President</i></p>
                            <hr>
                            <p class="mb-2 text-justify">
                                Julian Cassells is an industry veteran with over 18 years of experience in global shareholder identification and investor relations. She has led hundreds of successful projects for companies worldwide, including 120 component companies of the Nikkei 225 Index.
                            </p>
                            <p class="mb-2 text-justify">
                                Julian spent 9 years managing The Altman Group’s global shareholder ID and proxy solicitation operations. She oversaw client accounts and served as the main liaison between companies and the global investment community—including institutional investors, banks, and brokers. Her expertise spans companies of all sizes, particularly in Asia and Europe.
                            </p>
                            <p class="mb-2 text-justify">
                                Before joining The Altman Group in 2003, Julian was a core pioneer of the Shareholder ID team at Georgeson Inc. (CIC) and co-managed the Shareholder ID team at Taylor Rafferty.
                            </p>
                            <p class="mb-0 text-justify">
                                She holds a Bachelor of Arts degree from Colgate University.
                            </p>
                        </div>


                        <div class="team-contact mt-3 text-center">
                            <img src="../img/card1.png" alt="Julian Cassells Business Card" class="img-fluid business-card">
                        </div>

                        <div class="team-icon mt-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-title">
                            <h2 class="mb-0">Livia Pereira</h2>
                            <p class="mb-1"><i>Vice President</i></p>
                            <hr>
                            <p class="mb-2 text-justify">
                                Ms. Pereira is currently a Vice President of Alpha Advisory Associates, Inc. She is responsible for conducting extensive research of clients' shareholders, ranging from institutional investors down to fund research level. In addition, she leads solicitation campaigns, conduct perceptions studies, arrange roadshows, and prepare board presentations. Ms. Pereira played an integral role in pioneering Alpha Advisory Associates.
                            </p>
                            <p class="mb-2 text-justify">
                                Before this, Ms. Pereira was part of the AST-Altman Group Global Share ID team and for over 5 years managed to provide top of the line research of shareholders and institutional investors in addition to liaising with the investment community on a daily basis. She also helped to improve upon AST-Altman Group's proprietary database.
                            </p>
                            <p class="mb-2 text-justify">
                                Before this, Ms. Pereira served as a team leader in The Altman Group's call center after joining in 2006. She was responsible for directing call center assignments to individual investors in an effort to solicit votes on various proxy solicitation campaigns.
                            </p>
                            <p class="mb-0 text-justify">
                                Prior to joining The Altman Group, Ms. Pereira was a Call Center Outbound Supervisor at Etan Industries Inc. in Dallas, TX. She speaks fluent Portuguese and conversational Spanish.
                            </p>
                        </div>


                        <div class="team-contact mt-3 text-center">
                            <img src="../img/card2.png" alt="Livia Pereira Business Card" class="img-fluid business-card">
                        </div>

                        <div class="team-icon mt-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->









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