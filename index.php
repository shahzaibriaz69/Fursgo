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
    <div class="review-container main-conatiner">
        <button class="review-close-btn"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                viewBox="0 0 36 36" fill="none">
                <circle cx="18" cy="18" r="17.5" stroke="#3B3731" />
                <path d="M12.7998 23.9998L23.9998 12.7998M12.7998 12.7998L23.9998 23.9998" stroke="#3B3731"
                    stroke-width="1.5" stroke-linecap="round" />
            </svg></button>

        <div class="review-header">
            <h1>Write a Review</h1>
            <p>Share your experience with Sarah's Grooming Studio.</p>
        </div>

        <div class="review-profile-section">
            <div class="avatar-wrapper">
                <img src="https://via.placeholder.com/80" alt="Groomer" class="avatar">
                <div class="badge"><i class="fas fa-paw"></i></div>
            </div>

            <div class="review-details">
                <div class="review-tags">
                    <span class="review-tag">Home Visit</span>
                    <span class="review-tag">Mobile Station</span>
                </div>

                <h3 class="review-name">Cathy P.</h3>
                <p class="review-studio-name">Sarah's Grooming Studio</p>

                <div class="review-info-row">
                    <span><i class="fas fa-brush"></i> Full Groom</span>
                    <span><i class="far fa-calendar-alt"></i> 18/12/2025</span>
                    <span><i class="fas fa-paw"></i> Bella</span>
                </div>
            </div>
        </div>
        <hr>
    </div>

</body>

</html>