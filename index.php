<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fursgo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="booking-modal main-container">
        <button class="close-x">&times;</button>

        <div class="modal-header">
            <h1>My Bookings</h1>
            <p>Your upcoming booking.</p>
        </div>

        <div class="modal-booking-card">
            <div class="card-header-bar">
                <span class="status-badge">Confirmed</span>
                <div class="ref-container">
                    Booking reference: <strong>FG-10294</strong>
                    <span class="pdf-download"><i class="far fa-file-pdf"></i> PDF</span>
                </div>
            </div>

            <div class="card-content">
                <div class="groomer-row">
                    <div class="groomer-img-container">
                        <img src="images/favourite_card_1.svg" alt="Grooming">
                        <div class="shield-badge"><i class="fas fa-paw"></i></div>
                    </div>

                    <div class="groomer-main-info">
                        <div class="studio-header">
                            <h3>Sarah's Grooming Studio</h3>
                            <div class="pill-badges">
                                <span class="pill popular"><i class="fas fa-crown"></i> Popular</span>
                                <span class="pill top-rated"><i class="fas fa-certificate"></i> Top Rated</span>
                            </div>
                        </div>
                        <p class="sub-name">Sarah W.</p>

                        <span class="service-type">Home Visits</span>

                        <div class="rating-loc-row">
                            <span><i class="fas fa-map-marker-alt"></i> 2.5 mi</span>
                            <span><i class="fas fa-star"></i> 4.3 <small>(20 reviews)</small></span>
                        </div>
                        <div class="booking-meta-grid">
                            <div class="meta-box">
                                <label><i class="fas fa-cut"></i> Service</label>
                                <p>Full Groom</p>
                            </div>
                            <div class="meta-box">
                                <label><i class="far fa-calendar-alt"></i> Date</label>
                                <p>18/12/2025</p>
                            </div>
                            <div class="meta-box">
                                <label><i class="far fa-clock"></i> Time</label>
                                <p>14:30 - 15:30</p>
                            </div>
                            <div class="meta-box last">
                                <label><i class="fas fa-map-marker-alt"></i> Location</label>
                                <p>At your home</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-footer">
            <div class="cancel-policy">
                <a href="#">Cancel Booking</a>
                <p>Free cancellations up to 24 hours before appointment.</p>
            </div>
            <a href="#" class="view-policy">View cancellation policy</a>
        </div>

        <div class="help-text">
            <i class="fas fa-comment-dots"></i> Need help? Chat with <a href="#">Fursgo Support</a>.
        </div>
    </div>
    </div>

</body>

</html>