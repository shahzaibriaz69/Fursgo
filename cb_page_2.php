<?php include 'header.php';
include_once __DIR__ . '/calender.php'; ?>

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
    <div class="addons-section cb-container">
        <h2>Add-ons Services</h2>

        <div class="addons-grid">
            <div class="addon-card selected">
                <span class="addon-name">Storage Locker</span>
                <div class="addon-price">
                    <span class="currency">£5</span> <span class="unit">/ day</span>
                </div>
                <i class="fas fa-check-circle check-icon"></i>
            </div>

            <div class="addon-card selected">
                <span class="addon-name">Deep Clean</span>
                <div class="addon-price">
                    <span class="currency">£10</span>
                </div>
                <i class="fas fa-check-circle check-icon"></i>
            </div>

            <div class="addon-card ed-4">
                <span class="addon-name">After-hours access</span>
                <div class="addon-price">
                    <span class="currency">£20</span>
                </div>
            </div>
        </div>

        <div class="cb-modal-footer">
            <button class="cb-btn-cancel">Cancel</button>
            <button class="cb-btn-save">Save</button>
        </div>
    </div>

    <div class="charge-summary cb-container">
        <div class="charge-alert">
            You'll be charged an additional £3.00.
        </div>
        <div class="price-breakdown">
            <div class="price-row">
                <span>Original Total</span>
                <span class="underline">£48.00</span>
            </div>
            <div class="price-row bold">
                <span style="color: #3B3731">Updated Total</span>
                <span class="underline">£61.00</span>
            </div>
        </div>
    </div>

    <div class="cb-action-footer cb-container">
        <button class="cb-btn-outline">Cancel changes</button>
        <button class="cb-btn-filled">Confirm changes</button>
    </div>

</body>

</html>