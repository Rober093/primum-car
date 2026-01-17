<?php
// Datos de los coches
$cars = [
    1 => [
        'name' => 'Kia Forte Sedán Automático',
        'price' => 70,
        'image' => 'assets/img/car/Sedán automático Kia Forte/sedan-blanco.svg',
        'seats' => 6,
        'doors' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'model' => '2024 Model'
    ],
    2 => [
        'name' => 'Sedan Kia Forte automático',
        'price' => 70,
        'image' => 'assets/img/car/06.jpeg',
        'seats' => 5,
        'doors' => 4,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'model' => '2024 Model'
    ],
    3 => [
        'name' => 'Sedán Kía Forte, automático',
        'price' => 70,
        'image' => 'assets/img/car/sedan-azul.svg',
        'seats' => 6,
        'doors' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'model' => '2024 Model'
    ],
    4 => [
        'name' => 'Sedan Nissan Sentra automático',
        'price' => 70,
        'image' => 'assets/img/car/Sedan Nissan Sentra automático.svg',
        'seats' => 6,
        'doors' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'model' => '2024 Model'
    ],
    5 => [
        'name' => 'Sedan Nissan Sentra automático',
        'price' => 70,
        'image' => 'assets/img/car/Sedan Nissan Sentra automático2.svg',
        'seats' => 6,
        'doors' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'model' => '2024 Model'
    ],
    6 => [
        'name' => 'Sedan Nissan Sentra SV automático',
        'price' => 70,
        'image' => 'assets/img/car/Sedan Nissan Sentra SV automático.svg',
        'seats' => 6,
        'doors' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'model' => '2024 Model'
    ]
];

$headTitle = '';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Cars';
$SubTitle = 'SEDANES';
?>

<?php include './partials/layouts/layoutsTop.php' ?>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix">
        <div class="container">
            <div class="row g-4">

                <?php foreach ($cars as $id => $car): ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo (($id % 3) * 2 + 3); ?>s">
                        <div class="car-rentals-items mt-0">
                            <div class="car-image">
                                <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['name']; ?>">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    <?php echo $car['model']; ?>
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.php?car_id=<?php echo $id; ?>"><?php echo $car['name']; ?></a></h4>
                                <h6>$<?php echo $car['price']; ?>.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                            <?php echo $car['seats']; ?> Seats
                                        </li>
                                        <li>
                                            <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                            <?php echo $car['doors']; ?> Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                            <?php echo $car['transmission']; ?>
                                        </li>
                                        <li>
                                            <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                            <?php echo $car['fuel']; ?>
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.php?car_id=<?php echo $id; ?>" class="theme-btn bg-color w-100 text-center">book now <i
                                            class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

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

<?php include './partials/layouts/layoutsBottom.php' ?>