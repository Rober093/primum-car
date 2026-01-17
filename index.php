<!DOCTYPE html>
<html lang="en">
<?php $headTitle = 'premiumrentalcarsv'; ?>
<?php include './partials/head.php' ?>

<body>

    <?php include './partials/preloader.php' ?>

    <?php include './partials/scroll-up.php' ?>

    <?php include './partials/header-top.php' ?>

    <?php include './partials/header.php' ?>


    <!-- Search Area Start -->
    <?php include './partials/search-wrap.php' ?>

    <!-- Hero Section Start -->
    <section class="hero-section hero-1 fix">
        <div class="array-button">
            <button class="image-array-left">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/hero-1.jpg');">
                        <div class="overlay-shape">
                            <img src="assets/img/hero/overlay.png" alt="img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Encuentra los mejores precios
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Premium<span> Rental</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/hero-2.jpg');">
                        <div class="overlay-shape">
                            <img src="assets/img/hero/overlay.png" alt="img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        La mejor opcion en el salvador
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        <span>Car</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Form Section Start -->
    <div class="pickup-loaction-area bg-cover" style="background-image: url('assets/img/brand-bg.png');">
        <div class="container">
            <form action="https://submit-form.com/KDxc5caZt" method="POST" class="pickup-wrapper wow fadeInUp" data-wow-delay=".4s">
                <!-- Pickup Date -->
                <div class="pickup-items">
                    <label class="field-label">Pickup Date</label>
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text" placeholder="Check in" readonly name="pickup_date" required>
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>

                <!-- Dropoff Date -->
                <div class="pickup-items">
                    <label class="field-label">Dropoff Date</label>
                    <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text" placeholder="Check out" readonly name="dropoff_date" required>
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>

                <!-- Email -->
                <div class="pickup-items">
                    <label class="field-label">Email Address</label>
                    <input class="form-control" type="email" placeholder="email@example.com" name="email" required>
                </div>

                <!-- Submit Button -->
                <div class="pickup-items">
                    <label class="field-label style-2">&nbsp;</label>
                    <button class="pickup-btn" type="submit">
                        Check Availability
                    </button>
                </div>
            </form>

            <!-- Brands Section (unchanged) -->
            <div class="brand-wrapper pt-80 pb-80">
                <div class="array-button">
                    <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
                    <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
                </div>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/01.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/02.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/03.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/04.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/05.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/06.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Date Pickers and Form Submission -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize date pickers
            if (typeof $.fn.datepicker !== 'undefined') {
                $('#datepicker').datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    todayHighlight: true,
                    startDate: new Date()
                });

                $('#datepicker2').datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    todayHighlight: true,
                    startDate: new Date()
                });

                // Set min date for dropoff based on pickup date
                $('#datepicker').on('changeDate', function(e) {
                    const pickupDate = e.date;
                    $('#datepicker2').datepicker('setStartDate', pickupDate);
                    $('#datepicker2').datepicker('update');
                });
            }

            // Form submission handling
            const form = document.querySelector('form');

            form.addEventListener('submit', function(e) {
                // Basic validation
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = '#dc3545';
                    } else {
                        field.style.borderColor = '';
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields');
                    return false;
                }

                // Validate email format
                const emailField = document.querySelector('input[name="email"]');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailField && !emailRegex.test(emailField.value)) {
                    e.preventDefault();
                    emailField.style.borderColor = '#dc3545';
                    alert('Please enter a valid email address');
                    return false;
                }

                // Validate dates
                const pickupDate = document.querySelector('input[name="pickup_date"]').value;
                const dropoffDate = document.querySelector('input[name="dropoff_date"]').value;

                if (pickupDate && dropoffDate) {
                    const pickupParts = pickupDate.split('-');
                    const dropoffParts = dropoffDate.split('-');

                    const pickup = new Date(pickupParts[2], pickupParts[1] - 1, pickupParts[0]);
                    const dropoff = new Date(dropoffParts[2], dropoffParts[1] - 1, dropoffParts[0]);

                    if (dropoff < pickup) {
                        e.preventDefault();
                        alert('Drop-off date must be after pick-up date');
                        return false;
                    }
                }

                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Checking...';
                submitBtn.disabled = true;

                // The form will submit normally to Formspark
                // Re-enable button after 8 seconds (in case of error)
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 8000);
            });

            // Add CSS for styling
            const style = document.createElement('style');
            style.textContent = `
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-control:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0,123,255,0.25);
        }
        .spinner-border {
            margin-right: 8px;
        }
        input[type="email"] {
            height: 45px;
        }
    `;
            document.head.appendChild(style);
        });
    </script>

    <!-- Feature Benefit Section Start -->
    <section class="feature-benefit section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Nuestros beneficios</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Por que usar <br>
                    Premium Rental Car
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg1.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="car-details.php">
                                    Facil Y <br>
                                    Rapidas Reservas
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-1.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="car-details.php" class="link-btn">View More <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg2.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="car-details.php">
                                    Muchos vehiculos <br>
                                    De donde escoger
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-2.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="car-details.php" class="link-btn">View More <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg3.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="car-details.php">
                                    Clientes <br>
                                    100% Sastifechos
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-3.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="car-details.php" class="link-btn">View More <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section fix section-padding pt-0">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="color-shape">
                                <img src="assets/img/about/secondary-shape-color-full.png" alt="shape-img">
                            </div>
                            <div class="car-shape wow fadeInUp" data-wow-delay=".7s">
                                <img src="assets/img/about/car-shape.png" alt="shape-img">
                            </div>
                            <div class="counter-content wow fadeInLeft" data-wow-delay=".2s">
                                <h2 class="text-white"><span class="count">5</span></h2>
                                <p class="text-white">
                                   Años De  <br>
                                    Experiencia
                                </p>
                            </div>
                            <div class="about-image-1 wow fadeInDown" data-wow-delay=".3s">
                                <img src="assets/img/about/about001.png" alt="about-image">
                            </div>
                            <div class="about-image-2 wow fadeInLeft" data-wow-delay=".5s">
                                <img src="assets/img/about/about002.png" alt="about-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Conózcanos</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Servicios con una amplia gama de coches
                                </h2>
                            </div>
                            <h4 class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                                Comprometidos a brindarles a nuestros clientes un servicio excepcional.
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum is simply ipun txns mane so dummy text of free available in market the
                                printing and typesetting industry has been the industry's standard dummy text ever.
                            </p>
                            <div class="about-list-item wow fadeInUp" data-wow-delay=".7s">
                                <ul>
                                    <li>
                                        Muchos lugares de recogida
                                    </li>
                                    <li>
                                        Ofreciendo precios bajos
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        Muchos lugares de recogida
                                    </li>
                                    <li>
                                        Ofreciendo precios bajos
                                    </li>
                                </ul>
                            </div>
                            <a href="about.php" class="theme-btn wow fadeInUp" data-wow-delay=".8s">Sobre nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Echa un vistazo a nuestros Tipos de vehiculos</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                   vehiculos que ofrecemos <br>
                    para renta
                </h2>
            </div>
        </div>
        <div class="car-rentals-wrapper">
            <div class="array-button">
                <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                <button class="array-next"><i class="far fa-chevron-right"></i></button>
            </div>
            <div class="swiper car-rentals-slider">
                <div class="swiper-wrapper">

                    <!-- Tarjeta 1 -->

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items mt-0">
                            <div class="car-image">
                                <img src="assets/img/car/Sedán automático Kia Forte/1.jpeg" alt="img">
                            </div>

                            <div class="car-content">
                                <div class="post-cat">2024 Model</div>

                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>

                                <h4>
                                    <a href="car-details.php?car=1&name=Kia Forte&price=70&image=assets/img/car/Sedán automático Kia Forte/1.jpeg&seats=6&doors=2&transmission=Automatic&fuel=Petrol">
                                        Kia Forte Sedán Automático
                                    </a>
                                </h4>

                                <h6>$70.00 <span>/ Day</span></h6>

                                <div class="icon-items">
                                    <ul>
                                        <li><img src="assets/img/car/seat.svg"> 6 Seats</li>
                                        <li><img src="assets/img/car/door.svg"> 2 Doors</li>
                                    </ul>
                                    <ul>
                                        <li><img src="assets/img/car/automatic.svg"> Automatic</li>
                                        <li><img src="assets/img/car/petrol.svg"> Petrol</li>
                                    </ul>
                                </div>

                                <a href="car-grid.php"
                                   class="theme-btn bg-color w-100 text-center">
                                    book now <i class="fa-solid fa-arrow-right ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items mt-0">
                            <div class="car-image">
                                <img src="assets/img/car/Sedán automático Kia Forte/1.jpeg" alt="img">
                            </div>

                            <div class="car-content">
                                <div class="post-cat">2024 Model</div>

                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>

                                <h4>
                                    <a href="car-details.php?car=1&name=Kia Forte&price=70&image=assets/img/car/Sedán automático Kia Forte/1.jpeg&seats=6&doors=2&transmission=Automatic&fuel=Petrol">
                                        Kia Forte Sedán Automático
                                    </a>
                                </h4>

                                <h6>$70.00 <span>/ Day</span></h6>

                                <div class="icon-items">
                                    <ul>
                                        <li><img src="assets/img/car/seat.svg"> 6 Seats</li>
                                        <li><img src="assets/img/car/door.svg"> 2 Doors</li>
                                    </ul>
                                    <ul>
                                        <li><img src="assets/img/car/automatic.svg"> Automatic</li>
                                        <li><img src="assets/img/car/petrol.svg"> Petrol</li>
                                    </ul>
                                </div>

                                <a href="car-details.php?car=1&name=Kia Forte&price=70&image=assets/img/car/Sedán automático Kia Forte/1.jpeg&seats=6&doors=2&transmission=Automatic&fuel=Petrol"
                                   class="theme-btn bg-color w-100 text-center">
                                    book now <i class="fa-solid fa-arrow-right ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items mt-0">
                            <div class="car-image">
                                <img src="assets/img/car/Sedán automático Kia Forte/1.jpeg" alt="img">
                            </div>

                            <div class="car-content">
                                <div class="post-cat">2024 Model</div>

                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>

                                <h4>
                                    <a href="car-details.php?car=1&name=Kia Forte&price=70&image=assets/img/car/Sedán automático Kia Forte/1.jpeg&seats=6&doors=2&transmission=Automatic&fuel=Petrol">
                                        Kia Forte Sedán Automático
                                    </a>
                                </h4>

                                <h6>$70.00 <span>/ Day</span></h6>

                                <div class="icon-items">
                                    <ul>
                                        <li><img src="assets/img/car/seat.svg"> 6 Seats</li>
                                        <li><img src="assets/img/car/door.svg"> 2 Doors</li>
                                    </ul>
                                    <ul>
                                        <li><img src="assets/img/car/automatic.svg"> Automatic</li>
                                        <li><img src="assets/img/car/petrol.svg"> Petrol</li>
                                    </ul>
                                </div>

                                <a href="car-details.php?car=1&name=Kia Forte&price=70&image=assets/img/car/Sedán automático Kia Forte/1.jpeg&seats=6&doors=2&transmission=Automatic&fuel=Petrol"
                                   class="theme-btn bg-color w-100 text-center">
                                    book now <i class="fa-solid fa-arrow-right ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 4 -->

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items mt-0">
                            <div class="car-image">
                                <img src="assets/img/car/Sedán automático Kia Forte/1.jpeg" alt="img">
                            </div>

                            <div class="car-content">
                                <div class="post-cat">2024 Model</div>

                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>

                                <h4>
                                    <a href="car-details.php?car=1&name=Kia Forte&price=70&image=assets/img/car/Sedán automático Kia Forte/1.jpeg&seats=6&doors=2&transmission=Automatic&fuel=Petrol">
                                        Kia Forte Sedán Automático
                                    </a>
                                </h4>

                                <h6>$70.00 <span>/ Day</span></h6>

                                <div class="icon-items">
                                    <ul>
                                        <li><img src="assets/img/car/seat.svg"> 6 Seats</li>
                                        <li><img src="assets/img/car/door.svg"> 2 Doors</li>
                                    </ul>
                                    <ul>
                                        <li><img src="assets/img/car/automatic.svg"> Automatic</li>
                                        <li><img src="assets/img/car/petrol.svg"> Petrol</li>
                                    </ul>
                                </div>

                                <a href="car-details.php?car=1&name=Kia Forte&price=70&image=assets/img/car/Sedán automático Kia Forte/1.jpeg&seats=6&doors=2&transmission=Automatic&fuel=Petrol"
                                   class="theme-btn bg-color w-100 text-center">
                                    book now <i class="fa-solid fa-arrow-right ps-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="testimonial-bg-shape">
            <img src="assets/img/testimonial/testimonial-bg.jpg" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">nuestros testimonios</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Lo que dicen nuestros clientes <br>
                        sobre PremiumRentalCarsSV
                    </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    La satisfacción de nuestros clientes nos respalda, ofreciendo siempre
                    vehículos premium y el mejor servicio en El Salvador.
                </p>
            </div>

            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Quedé totalmente impresionada con el servicio de PremiumRentalCarsSV.
                                        Los vehículos están en excelentes condiciones y la atención es rápida
                                        y confiable. Sin duda, la mejor empresa de renta de autos.
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items text-center">
                                <div class="content">
                                    <h5>Jessica Brown</h5>
                                    <span>Cliente satisfecha</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        PremiumRentalCarsSV superó mis expectativas. El proceso fue sencillo,
                                        rápido y transparente. Definitivamente la mejor opción para rentar
                                        vehículos en El Salvador.
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items text-center">
                                <div class="content">
                                    <h5>Kevin Martin</h5>
                                    <span>Cliente frecuente</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Excelente servicio, vehículos modernos y atención personalizada.
                                        PremiumRentalCarsSV es mi empresa de confianza para alquilar autos.
                                        Totalmente recomendados.
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items text-center">
                                <div class="content">
                                    <h5>María López</h5>
                                    <span>Cliente recomendada</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Cta Cheap Rental Section Start -->
    <section class="cta-cheap-rental-section">
        <div class="container">
            <div class="cta-cheap-rental">
                <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay="
                    .3s">
                    <div class="logo-thumb">
                        <a href="index.php">
                            <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                        </a>
                    </div>
                    <h4 class="text-white">Save big with our cheap car rental</h4>
                </div>
                <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay="
                    .5s">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>

    <?php include './partials/footer.php' ?>

    <?php include './partials/script.php' ?>
</body>

</html>