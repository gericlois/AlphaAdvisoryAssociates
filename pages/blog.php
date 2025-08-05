<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "includes/connection.php";
?>

<?php
// 1. Set items per page
$limit = 9;

// 2. Get current page number from URL or default to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$page = max($page, 1); // prevent negative or zero

// 3. Calculate offset
$offset = ($page - 1) * $limit;

// 4. Count total blog posts
$totalQuery = "SELECT COUNT(*) AS total FROM blogs WHERE status = 'published'";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalBlogs = (int) $totalRow['total'];
$totalPages = ceil($totalBlogs / $limit);

// 5. Fetch blogs for current page
$query = "SELECT blogs.*, users.name AS author_name 
          FROM blogs 
          LEFT JOIN users ON blogs.author_id = users.user_id 
          WHERE status = 'published' 
          ORDER BY published_at DESC 
          LIMIT $limit OFFSET $offset";

$result = mysqli_query($conn, $query);
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
            <h2 class="text-white mb-0 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h2>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Our Blog</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Blog  Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blog & News</h4>
                <h2 class=" mb-0">Insights on Governance, Markets, and Engagement</h2>
                <p class="mb-0">
                    Stay informed with the latest trends, analysis, and expert commentary from Alpha Advisory Associates.
                    Explore thought leadership that drives better shareholder communication and strategy.
                </p>
            </div>

            <div class="row g-4 wow fadeInUp" data-wow-delay="0.2s">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <?php
                    $title = htmlspecialchars($row['title']);
                    $slug = htmlspecialchars($row['slug']);
                    $excerpt = substr(strip_tags($row['content']), 0, 120) . '...';
                    $image = !empty($row['image_path']) ? '../' . $row['image_path'] : '../img/default.jpg';
                    $author = $row['author_name'] ?: 'Admin';
                    $date = date("F j, Y", strtotime($row['published_at']));
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item p-4 border rounded h-100 shadow-sm">
                            <div class="blog-img mb-3">
                                <img src="<?= $image ?>" class="img-fluid w-75 rounded" alt="<?= $title ?>" loading="lazy">
                            </div>
                            <a href="blog-details.php?slug=<?= $slug ?>" class="h5 d-inline-block mb-2"><?= $title ?></a>
                            <p class="mb-3"><?= $excerpt ?></p>
                            <a href="blog-details.php?slug=<?= $slug ?>" class="btn btn-sm btn-primary rounded-pill px-4 mb-3">Learn More</a>
                            <div class="d-flex align-items-center">
                                <img src="../img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 50px; height: 50px;" alt="Author">
                                <div class="ms-3">
                                    <h6 class="mb-0"><?= $author ?></h6>
                                    <small><?= $date ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>

            <div class="text-center mt-4">
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>" class="btn btn-outline-primary rounded-pill px-4 py-2 me-2">
                        &laquo; Previous
                    </a>
                <?php endif; ?>

                <?php if ($page < $totalPages): ?>
                    <a href="?page=<?= $page + 1 ?>" class="btn btn-outline-primary rounded-pill px-4 py-2">
                        Next &raquo;
                    </a>
                <?php endif; ?>
            </div>



        </div>
    </div>
    <!-- Blog  End -->


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