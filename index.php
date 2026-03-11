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
        <button class="close-x"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                fill="none">
                <circle cx="18" cy="18" r="17.5" stroke="#3B3731" />
                <path d="M12.7998 23.9998L23.9998 12.7998M12.7998 12.7998L23.9998 23.9998" stroke="#3B3731"
                    stroke-width="1.5" stroke-linecap="round" />
            </svg></button>

        <div class="modal-header">
            <h1>My Bookings</h1>
            <p>Your upcoming booking.</p>
        </div>

        <div class="booking-modal-page-2">
            <div class="modal-booking-card">
                <div class="modal-header">
                    <span class="modal-header-status">Confirmed</span>

                    <div class="ref-container">
                        Booking reference: FG-10294
                        <span class="pdf"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="15"
                                viewBox="0 0 13 15" fill="none">
                                <path
                                    d="M3.07717 14.5H9.27418C9.95769 14.5 10.6132 14.2209 11.0965 13.7242C11.5798 13.2275 11.8514 12.5538 11.8514 11.8514V7.66649C11.8516 6.96411 11.5804 6.29039 11.0973 5.79351L6.70216 1.27568C6.46282 1.02973 6.1787 0.834645 5.86601 0.701554C5.55331 0.568463 5.21817 0.499975 4.87972 0.5H3.07717C2.39367 0.5 1.73815 0.779053 1.25484 1.27577C0.771523 1.77249 0.5 2.44618 0.5 3.14865V11.8514C0.5 12.5538 0.771523 13.2275 1.25484 13.7242C1.73815 14.2209 2.39367 14.5 3.07717 14.5Z"
                                    stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M5.9458 0.772461V5.0557C5.9458 5.45711 6.10096 5.84208 6.37714 6.12592C6.65332 6.40976 7.0279 6.56922 7.41847 6.56922H11.5876"
                                    stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M2.67822 10.9054V10.1486M2.67822 10.1486V8.63513H3.41456C3.60985 8.63513 3.79714 8.71486 3.93523 8.85678C4.07332 8.9987 4.15089 9.19118 4.15089 9.39189C4.15089 9.59259 4.07332 9.78508 3.93523 9.927C3.79714 10.0689 3.60985 10.1486 3.41456 10.1486H2.67822ZM8.56891 10.9054V9.95946M8.56891 9.95946V8.63513H9.67341M8.56891 9.95946H9.67341M5.62357 10.9054V8.63513H5.99173C6.28467 8.63513 6.5656 8.75473 6.77274 8.96761C6.97987 9.18048 7.09624 9.46921 7.09624 9.77027C7.09624 10.0713 6.97987 10.36 6.77274 10.5729C6.5656 10.7858 6.28467 10.9054 5.99173 10.9054H5.62357Z"
                                    stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> PDF</span>
                    </div>
                </div>
                <div style="padding: 30px;">
                    <div class="modal-content-page-2">

                        <div class="modal-studio">
                            <div class="studio-image">
                                <img src="images/booking-modal-img.png" alt="Grooming">
                            </div>

                            <!-- Details -->
                            <div class="studio-details">
                                <div class="rating-loc-row">

                                    <div class="modal-content">
                                        <div class="modal-host">
                                            <h3>Furs & Co. Studio</h3>
                                            <p class="hosted">Hosted <span>by Dev É.</span> </p>
                                            <span class="modal-category">Garden / Shed</span>
                                        </div>

                                        <div class="modal-tags" style="flex-direction: column;" gap="10px">
                                            <div class=" tags">
                                                <span class="popular">Popular</span>
                                                <span class="rated">Top Rated</span>
                                            </div>

                                            <div class="rating">
                                                📍 2.5 mi
                                                ⭐ 4.3 (20 reviews)
                                            </div>
                                        </div>


                                    </div>
                                </div>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="28" viewBox="0 0 34 28" fill="none">
                <path
                    d="M3.08333 13.875C1.3875 13.875 0 12.4875 0 10.7917V3.08333C0 1.3875 1.3875 0 3.08333 0H15.4167C17.1125 0 18.5 1.3875 18.5 3.08333V10.7917C18.5 12.4875 17.1125 13.875 15.4167 13.875H12.3333V18.5L7.70833 13.875H3.08333ZM30.8333 23.125C32.5292 23.125 33.9167 21.7375 33.9167 20.0417V12.3333C33.9167 10.6375 32.5292 9.25 30.8333 9.25H21.5833V10.7917C21.5833 14.1833 18.8083 16.9583 15.4167 16.9583V20.0417C15.4167 21.7375 16.8042 23.125 18.5 23.125H21.5833V27.75L26.2083 23.125H30.8333Z"
                    fill="#D8E8B7" />
            </svg> Need help? Chat with <a href="#">Fursgo Support</a>.
        </div>
    </div>
    </div>

</body>

</html>