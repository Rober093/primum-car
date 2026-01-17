<?php
// Datos de los coches (debería estar en un archivo aparte para compartirlo)
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

// Obtener ID del coche
$car_id = isset($_GET['car_id']) ? (int)$_GET['car_id'] : 1;

// Validar que el ID exista
if (!isset($cars[$car_id])) {
    $car_id = 1; // Valor por defecto
}

// Obtener datos del coche
$car = $cars[$car_id];
$car_name = $car['name'];
$car_price = '$' . $car['price'] . '.00';
$car_image = $car['image'];
$car_seats = $car['seats'] . ' Seats';
$car_doors = $car['doors'] . ' Doors';
$car_transmission = $car['transmission'];
$car_fuel = $car['fuel'];

// Configurar título de la página
$headTitle = 'Rental - ' . $car_name;
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Cars';
$SubTitle = $car_name;

include './partials/layouts/layoutsTop.php';
?>

    <!-- Car Details Section Start -->
    <section class="car-details fix section-padding">
        <div class="container">
            <div class="car-details-wrapper">
                <div class="row g-5">
                    <!-- Columna izquierda: Detalles del coche -->
                    <div class="col-lg-7">
                        <div class="car-details-items">
                            <div class="car-image">
                                <img src="<?php echo $car_image; ?>" alt="<?php echo $car_name; ?>">
                            </div>
                            <div class="car-content">
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h3><?php echo $car_name; ?></h3>
                                <h6><?php echo $car_price; ?> <span>/ Day</span></h6>
                                <p class="mt-4 mb-4">
                                    To deliver on the promise of technology and human We help our clients become sions of
                                    themselves. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    orem ipsum has been the industry's standard dummy text ever since the 1500s.
                                </p>
                                <div class="icon-details-area">
                                    <h4>Key Features</h4>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Body:</h6>
                                                <p>Sedan</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Mileage:</h6>
                                                <p>70.000 (Mi)</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Year:</h6>
                                                <p>2024</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/icon/07.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Engine:</h6>
                                                <p>2500 cc</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/door.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Passengers:</h6>
                                                <p><?php echo $car_seats; ?></p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/seat.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Doors:</h6>
                                                <p><?php echo $car_doors; ?></p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/automatic.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Transmission:</h6>
                                                <p><?php echo $car_transmission; ?></p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="assets/img/car/petrol.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Fuel:</h6>
                                                <p><?php echo $car_fuel; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna derecha: Formulario de contacto -->
                    <div class="col-lg-5">
                        <div class="car-booking-items sticky-top" style="top: 20px;">
                            <div class="booking-header">
                                <h3>Request for Booking - <?php echo $car_name; ?></h3>
                                <p>Send your requirement to us. We will check email and contact you soon.</p>
                            </div>

                            <!-- FORMAS ACTUALIZADA PARA FORMS PARK -->
                            <form action="https://submit-form.com/KDxc5caZt" id="contact-form" method="POST" class="contact-form-items">
                                <!-- IMPORTANTE: Agregar este campo para Formspark -->
                                <input type="hidden" name="_redirect" value="https://<?php echo $_SERVER['HTTP_HOST']; ?>/thank-you.php">
                                <input type="hidden" name="_error_redirect" value="https://<?php echo $_SERVER['HTTP_HOST']; ?>/error.php">

                                <!-- Campo para evitar spam -->
                                <input type="checkbox" name="_honeypot" style="display:none">

                                <!-- Campos ocultos con los datos del carro -->
                                <input type="hidden" name="car_id" value="<?php echo $car_id; ?>">
                                <input type="hidden" name="car_name" value="<?php echo htmlspecialchars($car_name, ENT_QUOTES, 'UTF-8'); ?>">
                                <input type="hidden" name="car_price" value="<?php echo $car_price; ?>">

                                <!-- Asunto del email -->
                                <input type="hidden" name="_subject" value="Nueva reserva: <?php echo htmlspecialchars($car_name, ENT_QUOTES, 'UTF-8'); ?>">

                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Your Name *</label>
                                            <input type="text" name="name" id="name" placeholder="Your Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Email *</label>
                                            <input type="email" name="email" id="email" placeholder="your@email.com" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Phone Number *</label>
                                            <input type="tel" name="phone" id="phone" placeholder="+503 1234-5678" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Address *</label>
                                            <input type="text" name="address" id="address" placeholder="Your Address" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Pick-up Date *</label>
                                            <div id="datepicker3" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" name="pickup_date" id="pickup_date_input" placeholder="Select Date" readonly required>
                                                <span class="input-group-addon">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Drop-off Date *</label>
                                            <div id="datepicker4" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" name="dropoff_date" id="dropoff_date_input" placeholder="Select Date" readonly required>
                                                <span class="input-group-addon">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Pick-up Location *</label>
                                            <div class="category-oneadjust">
                                                <select name="pickup_location" id="pickup_location_select" class="form-control" required>
                                                    <option value="">Select Location</option>
                                                    <option value="Aeropuerto Internacional de El Salvador, San Luis Talpa, La Paz">
                                                        Aeropuerto Internacional de El Salvador, San Luis Talpa, La Paz
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <label class="label-text">Additional Message (Optional)</label>
                                            <textarea name="message" id="message" class="form-control" placeholder="Any special requirements or questions..." rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="theme-btn w-100" type="submit" id="submit-btn">
                                            Send Request
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix pt-0">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Similar Cars Available
                </h2>
            </div>
            <div class="row">
                <?php
                // Mostrar coches similares (excluyendo el actual)
                $similarCars = [];
                foreach ($cars as $key => $value) {
                    if ($key != $car_id) {
                        $similarCars[$key] = $value;
                    }
                }

                // Mostrar máximo 3 coches similares
                $count = 0;
                foreach ($similarCars as $id => $similarCar):
                    if ($count >= 3) break;
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo ($count + 3); ?>s">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="<?php echo $similarCar['image']; ?>" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    <?php echo $similarCar['model']; ?>
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.php?car_id=<?php echo $id; ?>"><?php echo $similarCar['name']; ?></a></h4>
                                <h6>$<?php echo $similarCar['price']; ?>.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                            <?php echo $similarCar['seats']; ?> Seats
                                        </li>
                                        <li>
                                            <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                            <?php echo $similarCar['doors']; ?> Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                            <?php echo $similarCar['transmission']; ?>
                                        </li>
                                        <li>
                                            <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                            <?php echo $similarCar['fuel']; ?>
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.php?car_id=<?php echo $id; ?>" class="theme-btn bg-color w-100 text-center">book now <i
                                            class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $count++;
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact-form');
            const submitBtn = document.getElementById('submit-btn');
            let isSubmitting = false;

            if (form) {
                // Validación antes de enviar
                form.addEventListener('submit', function(e) {
                    if (isSubmitting) {
                        e.preventDefault();
                        return;
                    }

                    // Validación de fechas
                    const pickupDate = document.getElementById('pickup_date_input').value;
                    const dropoffDate = document.getElementById('dropoff_date_input').value;

                    if (pickupDate && dropoffDate) {
                        const [pickupDay, pickupMonth, pickupYear] = pickupDate.split('-');
                        const [dropoffDay, dropoffMonth, dropoffYear] = dropoffDate.split('-');

                        const pickupDateObj = new Date(pickupYear, pickupMonth - 1, pickupDay);
                        const dropoffDateObj = new Date(dropoffYear, dropoffMonth - 1, dropoffDay);

                        if (dropoffDateObj < pickupDateObj) {
                            e.preventDefault();
                            alert('Error: Drop-off date must be after pick-up date.');
                            return;
                        }
                    }

                    // Deshabilitar botón para evitar envíos múltiples
                    isSubmitting = true;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = 'Sending...';

                    // Restaurar botón después de 5 segundos por si hay error
                    setTimeout(function() {
                        isSubmitting = false;
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = 'Send Request';
                    }, 5000);
                });
            }
        });
    </script>

<?php include './partials/layouts/layoutsBottom.php' ?>