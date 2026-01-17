<?php
// error.php
$headTitle = 'Error - Submission Failed';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Error';
$SubTitle = 'Submission Failed';

include './partials/layouts/layoutsTop.php';
?>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="mb-4">
                        <div class="error-icon" style="font-size: 5rem; color: #dc3545;">
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
                    </div>
                    <h1 class="mb-3">Submission Error</h1>
                    <h4 class="text-muted mb-4">We couldn't process your request</h4>

                    <div class="alert alert-danger mb-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fa-solid fa-triangle-exclamation fa-2x"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="alert-heading">Technical Issue</h5>
                                <p class="mb-0">
                                    There was a problem sending your booking request. This might be due to:
                                </p>
                                <ul class="mb-0 mt-2">
                                    <li>Network connection issues</li>
                                    <li>Server maintenance</li>
                                    <li>Temporary service unavailability</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card border-warning mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-solid fa-lightbulb me-2"></i> What to do now?</h5>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <h6><i class="fa-solid fa-rotate me-2"></i> Option 1: Try Again</h6>
                                        <p class="small">Wait a few moments and resubmit your request.</p>
                                        <a href="javascript:history.back()" class="btn btn-outline-primary btn-sm">
                                            <i class="fa-solid fa-arrow-left me-1"></i> Go Back & Try Again
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <h6><i class="fa-solid fa-phone me-2"></i> Option 2: Contact Us</h6>
                                        <p class="small">Contact us directly for assistance.</p>
                                        <a href="tel:+50312345678" class="btn btn-outline-success btn-sm me-2">
                                            <i class="fa-solid fa-phone me-1"></i> Call Now
                                        </a>
                                        <a href="mailto:info@rentalcars.com" class="btn btn-outline-success btn-sm">
                                            <i class="fa-solid fa-envelope me-1"></i> Email Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
                        <a href="index.php" class="theme-btn">
                            <i class="fa-solid fa-home me-2"></i> Back to Homepage
                        </a>
                        <a href="cars.php" class="theme-btn bg-secondary">
                            <i class="fa-solid fa-car me-2"></i> Continue Browsing Cars
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include './partials/layouts/layoutsBottom.php' ?>