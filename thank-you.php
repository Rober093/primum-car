<?php
// thank-you.php
$headTitle = 'Thank You - Message Sent';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Thank You';
$SubTitle = 'Message Sent Successfully';

include './partials/layouts/layoutsTop.php';

// Obtener parámetros de la URL si vienen de Formspark
$car_name = $_GET['car_name'] ?? $_POST['car_name'] ?? 'your selected car';
$name = $_GET['name'] ?? $_POST['name'] ?? '';
?>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="mb-4">
                        <div class="success-icon" style="font-size: 5rem; color: #28a745;">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                    <h1 class="mb-3">Thank You, <?php echo htmlspecialchars($name ?: 'Customer'); ?>!</h1>
                    <h4 class="text-muted mb-4">Your Booking Request Has Been Sent</h4>

                    <div class="card border-success mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-solid fa-car me-2"></i> Booking Details</h5>
                            <p class="card-text">
                                We have received your request for: <br>
                                <strong><?php echo htmlspecialchars($car_name); ?></strong>
                            </p>
                            <p class="card-text mb-0">
                                Our team will contact you within <strong>24 hours</strong> to confirm your reservation.
                            </p>
                        </div>
                    </div>

                    <div class="alert alert-info mb-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fa-solid fa-envelope fa-2x"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="alert-heading">Check Your Email</h5>
                                <p class="mb-0">
                                    A confirmation message has been sent to your email address.<br>
                                    <small class="text-muted">(Please check your spam folder if you don't see it)</small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <p class="mb-3">What would you like to do next?</p>
                        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                            <a href="index.php" class="theme-btn">
                                <i class="fa-solid fa-home me-2"></i> Return to Homepage
                            </a>
                            <a href="cars.php" class="theme-btn bg-secondary">
                                <i class="fa-solid fa-car me-2"></i> Browse More Cars
                            </a>
                            <a href="contact.php" class="theme-btn bg-light text-dark">
                                <i class="fa-solid fa-phone me-2"></i> Contact Support
                            </a>
                        </div>
                    </div>

                    <div class="mt-5 pt-4 border-top">
                        <p class="text-muted small">
                            <i class="fa-solid fa-clock me-1"></i>
                            Request submitted: <?php echo date('F j, Y \a\t g:i a'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include './partials/layouts/layoutsBottom.php' ?>