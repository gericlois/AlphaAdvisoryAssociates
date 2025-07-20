<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h2 class="text-primary">
                <img src="../img/logo.png" alt="Logo"> Alpha Advisory Associates
            </h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">About</a>
                <a href="services.php" class="nav-item nav-link <?= ($current_page == 'services.php') ? 'active' : '' ?>">Services</a>
                <a href="blog.php" class="nav-item nav-link <?= ($current_page == 'blog.php') ? 'active' : '' ?>">Blog</a>
                <a href="contact.php" class="nav-item nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact Us</a>
            </div>
            <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a>
        </div>
    </nav>
</div>
