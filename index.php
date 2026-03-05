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



        <script src="script.js"></script>
</body>

</html>