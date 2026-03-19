<?php include 'header.php'; ?>
<?php include 'carousel.php'; ?>
<link rel="stylesheet" href="style.css">

<div class="container my-5">

    <div class="hero-section p-5 text-center mb-5">
        <h1 class="mb-3 fw-bold">Welcome to Gapan City Health Center</h1>
        <p class="lead text-muted mx-auto" style="max-width: 560px;">
            Easy access to health services, doctor schedules, and online registration for all residents.
        </p>
        <div class="mt-4">
            <a href="services.php" class="btn btn-primary me-2">View Services</a>
            <a href="doctor_schedule.php" class="btn btn-primary">Doctor Schedule</a>
        </div>
    </div>

    <p class="section-label">Quick Information</p>
    <div class="row g-3 mb-4">

        <div class="col-12 col-md-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title">Available Services</h5>
                    <p class="card-text flex-grow-1">Consultations, Vaccinations, Lab Testing, and more health services for residents.</p>
                    <div class="mt-auto">
                        <a href="services.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title">Doctor Schedules</h5>
                    <p class="card-text flex-grow-1">Check updated schedules for consultations per service area in Gapan City.</p>
                    <div class="mt-auto">
                        <a href="doctor_schedule.php" class="btn btn-primary">View Schedule</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title">Upcoming Programs</h5>
                    <p class="card-text flex-grow-1">Vaccination drives and health programs available in your community.</p>
                    <div class="mt-auto">
                        <a href="news.php" class="btn btn-primary">See Announcements</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <p class="section-label mt-4">Get Started</p>
    <div class="row g-3">

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title">Register</h5>
                    <p class="card-text flex-grow-1">Create an account to access all features and book appointments online.</p>
                    <div class="mt-auto">
                        <a href="register.php" class="btn btn-primary">Register Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title">Log In</h5>
                    <p class="card-text flex-grow-1">Already have an account? Log in to manage your health appointments.</p>
                    <div class="mt-auto">
                        <a href="login.php" class="btn btn-primary">Log In</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title">Book Appointment</h5>
                    <p class="card-text flex-grow-1">Schedule a consultation with a doctor at your preferred service area.</p>
                    <div class="mt-auto">
                        <a href="doctor_schedule.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title">News & Announcements</h5>
                    <p class="card-text flex-grow-1">Stay updated with the latest health news and programs in Gapan City.</p>
                    <div class="mt-auto">
                        <a href="news.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
