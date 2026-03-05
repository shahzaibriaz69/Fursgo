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


    <div class="booking-container">

        <h2 class="booking-title">My Bookings</h2>

        <!-- Stats Cards -->
        <div class="booking-stats">

            <div class="booking-card active-bookings">
                <h3>2</h3>
                <p>Active Bookings</p>
            </div>

            <div class="booking-card total-bookings">
                <h3>20</h3>
                <p>Total Booking</p>
            </div>

            <div class="booking-card total-spend">
                <h3>£250</h3>
                <p>Total Spend</p>
            </div>

        </div>


        <!-- Filters -->
        <div class="booking-filters">

            <div class="tabs">
                <button class="tab active">All</button>
                <button class="tab">Upcoming</button>
                <button class="tab">Past</button>
                <button class="tab">Cancelled</button>
            </div>

            <div class="search-container">
                <input type="text" placeholder="Search bookings by groomer, service, or pet...">
                <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 16 16" fill="none">
                        <path
                            d="M5.73535 0.5C8.6267 0.500031 10.9707 2.844 10.9707 5.73535C10.9707 7.22006 10.3528 8.55933 9.35938 9.5127C8.41826 10.4158 7.14221 10.9707 5.73535 10.9707C2.844 10.9707 0.500031 8.6267 0.5 5.73535C0.5 2.84398 2.84398 0.5 5.73535 0.5Z"
                            stroke="#9D9B98" />
                        <path
                            d="M14.6466 15.3537C14.8419 15.549 15.1585 15.549 15.3537 15.3537C15.549 15.1585 15.549 14.8419 15.3537 14.6466L15.0002 15.0002L14.6466 15.3537ZM9.70605 9.70605L9.3525 10.0596L14.6466 15.3537L15.0002 15.0002L15.3537 14.6466L10.0596 9.3525L9.70605 9.70605Z"
                            fill="#9D9B98" />
                    </svg></span>
            </div>

        </div>

    </div>

    <section class="all-bookings booking-container">
        <div class="bookings-header">
            <div class="title">
                <h1>All Bookings</h1>
            </div>


            <div class="actions">
                <button class="btn btn-filled">
                    2 Feb - 4 March <span class="btn-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="13"
                            height="7" viewBox="0 0 13 7" fill="none">
                            <path d="M11.9102 0.5L6.15672 6.25344L0.499867 0.596581" stroke="white"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>
                </button>
                <button class="btn btn-outline">
                    Sort <span class="btn-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                            viewBox="0 0 13 7" fill="none">
                            <path d="M11.9102 0.5L6.15672 6.25344L0.499867 0.596581" stroke="#FBAC83"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>
                </button>
            </div>
        </div>

        <div class="chips-container">
            <div class="chip">Most Recent <span class="close"><svg xmlns="http://www.w3.org/2000/svg" width="9"
                        height="9" viewBox="0 0 9 9" fill="none">
                        <path d="M0.5 7.57L7.572 0.5M0.5 0.5L7.572 7.57" stroke="#FBAC83" stroke-linecap="round" />
                    </svg></span></div>
            <div class="chip">2 Feb - 4 Mar <span class="close"><svg xmlns="http://www.w3.org/2000/svg" width="9"
                        height="9" viewBox="0 0 9 9" fill="none">
                        <path d="M0.5 7.57L7.572 0.5M0.5 0.5L7.572 7.57" stroke="#FBAC83" stroke-linecap="round" />
                    </svg></span></div>
        </div>
    </section>

    <div class="upcoming-section booking-container">
        <div class="upcoming-section-title">
            <h2>Upcoming Bookings</h2>
            <hr>
        </div>


        <div class="bookings-cards">
            <div class="cards-header">
                <div class="header-left">
                    <span class="status-badge">Confirmed</span>
                    <span class="studio-name">Sarah’s Grooming Studio - <span class="host">Sarah W.</span></span>
                </div>
                <div class="booking-ref">Booking reference: FG-10294</div>
            </div>

            <div class="card-body">
                <div class="profile-section">
                    <img src="images/card_image_2.png" alt="Groomer" class="groomer-img">
                    <div class="service-type">Home Visits</div>
                </div>

                <div class="details-grids">
                    <div class="details-item">
                        <p class="label">Service</p>
                        <p class="value">Full Groom</p>
                    </div>
                    <div class="details-item">
                        <p class="label">Date</p>
                        <p class="value">18/12/2025</p>
                    </div>
                    <div class="details-item">
                        <p class="label">Time</p>
                        <p class="value">14:30 - 15:30</p>
                    </div>
                    <div class="details-item">
                        <p class="label">Location</p>
                        <p class="value">At your home</p>
                    </div>
                </div>

                <div class="pet-and-actions">
                    <img src="https://via.placeholder.com/40" alt="Pet" class="pet-img">
                    <div class="action-btns">
                        <button class="circle-btn arrow-btn">→</button>
                        <button class="circle-btn chat-btn">💬</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>