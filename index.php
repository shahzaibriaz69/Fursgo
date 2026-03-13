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
    <section class="cb-booking-modal">
        <div class="cb-modal-header">
            <h1>Change Booking</h1>
        </div>

        <div class="cb-container">

            <div class="cb-nav-container">
                <button class="cb-back-btn">
                    ← Back to My Bookings
                </button>
            </div>

            <div class="cb-booking-card">
                <div class="cb-profile-section">
                    <div class="cb-img-wrapper">
                        <img src="images/card_image_2.png" alt="Provider" class="cb-provider-img">
                        <div class="cb-badge"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="30"
                                viewBox="0 0 27 30" fill="none">
                                <ellipse cx="14.6533" cy="15.2551" rx="8.64502" ry="8.13649" fill="white" />
                                <path
                                    d="M14.2538 0.170856C14.0175 0.058916 13.7644 0 13.5 0C13.2356 0 12.9825 0.058916 12.7463 0.170856L2.1544 4.87824C0.916899 5.42616 -0.00559941 6.70463 2.55852e-05 8.24823C0.0281505 14.0927 2.32315 24.7859 12.015 29.6465C12.9544 30.1178 14.0456 30.1178 14.985 29.6465C24.6769 24.7859 26.9719 14.0927 27 8.24823C27.0056 6.70463 26.0831 5.42616 24.8456 4.87824L14.2538 0.170856ZM8.15064 16.8617C8.42064 16.9324 8.70751 16.9678 9.00001 16.9678C10.9856 16.9678 12.6 15.2769 12.6 13.1972V9.42655H15.0863C15.7669 9.42655 16.3912 9.82718 16.695 10.4694L17.1 11.3119H20.7C21.195 11.3119 21.6 11.7361 21.6 12.2545V14.1398C21.6 16.7439 19.5862 18.8531 17.1 18.8531H14.4V21.8401C14.4 22.2702 14.0681 22.6237 13.6519 22.6237C13.5506 22.6237 13.4494 22.6002 13.3594 22.5589L7.80751 20.0668C7.43626 19.9018 7.20001 19.5189 7.20001 19.1006C7.20001 18.9356 7.23376 18.7765 7.30689 18.6292L8.15064 16.8617ZM8.10001 9.42655H10.8V13.1972C10.8 14.24 9.99563 15.0825 9.00001 15.0825C8.00439 15.0825 7.20001 14.24 7.20001 13.1972V10.3692C7.20001 9.85075 7.60501 9.42655 8.10001 9.42655ZM15.3 12.2545C15.3 12.0045 15.2052 11.7647 15.0364 11.588C14.8676 11.4112 14.6387 11.3119 14.4 11.3119C14.1613 11.3119 13.9324 11.4112 13.7636 11.588C13.5948 11.7647 13.5 12.0045 13.5 12.2545C13.5 12.5045 13.5948 12.7443 13.7636 12.9211C13.9324 13.0979 14.1613 13.1972 14.4 13.1972C14.6387 13.1972 14.8676 13.0979 15.0364 12.9211C15.2052 12.7443 15.3 12.5045 15.3 12.2545Z"
                                    fill="#C9DDA0" />
                            </svg></div>
                    </div>
                </div>

                <div class="cb-info-grid">
                    <div class="cb-tag-row">
                        <span class="cb-category-tag">Home Visits</span>
                        <span class="cb-booking-ref">Booking reference: FG-10294</span>
                    </div>

                    <div class="cb-details-row">
                        <div class="cb-detail-item">
                            <p class="cb-label"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                        viewBox="0 0 16 17" fill="none">
                                        <path
                                            d="M4.94591 11.5544C6.23114 12.8397 9.35699 11.798 11.9274 9.22713C14.4983 6.65667 15.54 3.53082 14.2548 2.24559M8.72754 1.37259L9.30927 1.95473M6.6915 3.40904L7.27322 3.99077M4.9455 5.73636L5.52722 6.31809M4.36377 8.6454L4.9455 9.22713M11.9274 0.5L12.5092 1.08173M11.3457 3.99118L12.5092 5.15463M9.30968 6.02763L10.4731 7.19109M6.98236 7.77281L8.14581 8.93627"
                                            stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M4.94547 13.2998C5.42747 12.8178 5.42747 12.0364 4.94548 11.5544C4.46348 11.0724 3.68202 11.0724 3.20003 11.5544L0.872775 13.8816C0.390784 14.3636 0.390784 15.1451 0.872775 15.6271C1.35477 16.1091 2.13623 16.1091 2.61822 15.6271L4.94547 13.2998Z"
                                            stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></span> Service</p>
                            <p class="cb-value">Full Groom</p>
                        </div>

                        <hr class="vertical-line">

                        <div class="cb-detail-item">
                            <p class="cb-label"><span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="17"
                                        viewBox="0 0 19 17" fill="none">
                                        <path
                                            d="M0.5 8.29554C0.5 5.20139 0.5 3.6539 1.50457 2.69308C2.50914 1.73227 4.12486 1.73145 7.35714 1.73145H10.7857C14.018 1.73145 15.6346 1.73145 16.6383 2.69308C17.642 3.65472 17.6429 5.20139 17.6429 8.29554V9.93656C17.6429 13.0307 17.6429 14.5782 16.6383 15.539C15.6337 16.4998 14.018 16.5007 10.7857 16.5007H7.35714C4.12486 16.5007 2.50829 16.5007 1.50457 15.539C0.500857 14.5774 0.5 13.0307 0.5 9.93656V8.29554Z"
                                            stroke="#3B3731" />
                                        <path d="M4.78585 1.73077V0.5M13.3573 1.73077V0.5M0.928711 5.83333H17.2144"
                                            stroke="#3B3731" stroke-linecap="round" />
                                        <path
                                            d="M14.2139 12.3975C14.2139 12.6151 14.1236 12.8238 13.9629 12.9777C13.8021 13.1315 13.5841 13.218 13.3568 13.218C13.1295 13.218 12.9114 13.1315 12.7507 12.9777C12.59 12.8238 12.4997 12.6151 12.4997 12.3975C12.4997 12.1799 12.59 11.9712 12.7507 11.8173C12.9114 11.6634 13.1295 11.577 13.3568 11.577C13.5841 11.577 13.8021 11.6634 13.9629 11.8173C14.1236 11.9712 14.2139 12.1799 14.2139 12.3975ZM14.2139 9.11543C14.2139 9.33305 14.1236 9.54175 13.9629 9.69562C13.8021 9.8495 13.5841 9.93595 13.3568 9.93595C13.1295 9.93595 12.9114 9.8495 12.7507 9.69562C12.59 9.54175 12.4997 9.33305 12.4997 9.11543C12.4997 8.89782 12.59 8.68912 12.7507 8.53524C12.9114 8.38137 13.1295 8.29492 13.3568 8.29492C13.5841 8.29492 13.8021 8.38137 13.9629 8.53524C14.1236 8.68912 14.2139 8.89782 14.2139 9.11543ZM9.92822 12.3975C9.92822 12.6151 9.83792 12.8238 9.67717 12.9777C9.51643 13.1315 9.29841 13.218 9.07108 13.218C8.84375 13.218 8.62573 13.1315 8.46499 12.9777C8.30424 12.8238 8.21394 12.6151 8.21394 12.3975C8.21394 12.1799 8.30424 11.9712 8.46499 11.8173C8.62573 11.6634 8.84375 11.577 9.07108 11.577C9.29841 11.577 9.51643 11.6634 9.67717 11.8173C9.83792 11.9712 9.92822 12.1799 9.92822 12.3975ZM9.92822 9.11543C9.92822 9.33305 9.83792 9.54175 9.67717 9.69562C9.51643 9.8495 9.29841 9.93595 9.07108 9.93595C8.84375 9.93595 8.62573 9.8495 8.46499 9.69562C8.30424 9.54175 8.21394 9.33305 8.21394 9.11543C8.21394 8.89782 8.30424 8.68912 8.46499 8.53524C8.62573 8.38137 8.84375 8.29492 9.07108 8.29492C9.29841 8.29492 9.51643 8.38137 9.67717 8.53524C9.83792 8.68912 9.92822 8.89782 9.92822 9.11543ZM5.64251 12.3975C5.64251 12.6151 5.5522 12.8238 5.39146 12.9777C5.23071 13.1315 5.01269 13.218 4.78537 13.218C4.55804 13.218 4.34002 13.1315 4.17927 12.9777C4.01853 12.8238 3.92822 12.6151 3.92822 12.3975C3.92822 12.1799 4.01853 11.9712 4.17927 11.8173C4.34002 11.6634 4.55804 11.577 4.78537 11.577C5.01269 11.577 5.23071 11.6634 5.39146 11.8173C5.5522 11.9712 5.64251 12.1799 5.64251 12.3975ZM5.64251 9.11543C5.64251 9.33305 5.5522 9.54175 5.39146 9.69562C5.23071 9.8495 5.01269 9.93595 4.78537 9.93595C4.55804 9.93595 4.34002 9.8495 4.17927 9.69562C4.01853 9.54175 3.92822 9.33305 3.92822 9.11543C3.92822 8.89782 4.01853 8.68912 4.17927 8.53524C4.34002 8.38137 4.55804 8.29492 4.78537 8.29492C5.01269 8.29492 5.23071 8.38137 5.39146 8.53524C5.5522 8.68912 5.64251 8.89782 5.64251 9.11543Z"
                                            fill="#3B3731" />
                                    </svg></span> Date</p>
                            <p class="cb-value">18/12/2025</p>
                        </div>

                        <hr class="vertical-line">

                        <div class="cb-detail-item">
                            <p class="cb-label"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <path
                                            d="M8 0.5C12.1423 0.5 15.5 3.85774 15.5 8C15.5 12.1423 12.1423 15.5 8 15.5C3.85774 15.5 0.5 12.1423 0.5 8C0.5 3.85774 3.85774 0.5 8 0.5Z"
                                            stroke="#3B3731" stroke-linecap="round" />
                                    </svg></span> Time</p>
                            <p class="cb-value">14:30 - 15:30</p>
                        </div>

                        <hr class="vertical-line">

                        <div class="cb-detail-item">
                            <p class="cb-label"><span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="16"
                                        viewBox="0 0 12 16" fill="none">
                                        <path
                                            d="M6 0.5C7.4694 0.5 8.87214 1.04525 9.90137 2.00586C10.9293 2.96529 11.4999 4.25871 11.5 5.59961C11.5 7.10011 10.6408 8.95946 9.51855 10.7236C8.41048 12.4655 7.10434 14.0263 6.32227 14.9082C6.14625 15.1067 5.85375 15.1067 5.67773 14.9082C4.89566 14.0263 3.58952 12.4655 2.48145 10.7236C1.35919 8.95946 0.5 7.10011 0.5 5.59961C0.500111 4.25871 1.07068 2.96529 2.09863 2.00586C3.12786 1.04525 4.53061 0.5 6 0.5ZM6 3.09961C5.30978 3.09961 4.64141 3.35564 4.14355 3.82031C3.64466 4.28597 3.35753 4.92517 3.35742 5.59961C3.35742 6.27422 3.64453 6.91413 4.14355 7.37988C4.64141 7.84453 5.30979 8.09961 6 8.09961C6.34236 8.09961 6.68202 8.03695 7 7.91406C7.31807 7.7911 7.60965 7.61022 7.85645 7.37988C8.10326 7.14952 8.30086 6.87397 8.43652 6.56836C8.57224 6.26256 8.64258 5.93289 8.64258 5.59961C8.64247 4.92517 8.35534 4.28597 7.85645 3.82031C7.35859 3.35564 6.69022 3.09961 6 3.09961Z"
                                            stroke="#3B3731" />
                                    </svg></span> Location</p>
                            <p class="cb-value">At your home</p>
                        </div>

                        <hr class="vertical-line">

                        <div class="cb-pet-section">
                            <img src="images/pet-card-image_1.png" alt="Pet" class="cb-pet-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cb-update-section cb-container">
        <h2 class="cb-update-title">Update Date & Time</h2>

        <div class="cb-selection-container">
            <div class="cb-current-info">
                <div class="cb-info-group">
                    <p class="cb-label"><span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="17"
                                viewBox="0 0 19 17" fill="none">
                                <path
                                    d="M0.5 8.29554C0.5 5.20139 0.5 3.6539 1.50457 2.69308C2.50914 1.73227 4.12486 1.73145 7.35714 1.73145H10.7857C14.018 1.73145 15.6346 1.73145 16.6383 2.69308C17.642 3.65472 17.6429 5.20139 17.6429 8.29554V9.93656C17.6429 13.0307 17.6429 14.5782 16.6383 15.539C15.6337 16.4998 14.018 16.5007 10.7857 16.5007H7.35714C4.12486 16.5007 2.50829 16.5007 1.50457 15.539C0.500857 14.5774 0.5 13.0307 0.5 9.93656V8.29554Z"
                                    stroke="#3B3731" />
                                <path d="M4.78585 1.73077V0.5M13.3573 1.73077V0.5M0.928711 5.83333H17.2144"
                                    stroke="#3B3731" stroke-linecap="round" />
                                <path
                                    d="M14.2139 12.3975C14.2139 12.6151 14.1236 12.8238 13.9629 12.9777C13.8021 13.1315 13.5841 13.218 13.3568 13.218C13.1295 13.218 12.9114 13.1315 12.7507 12.9777C12.59 12.8238 12.4997 12.6151 12.4997 12.3975C12.4997 12.1799 12.59 11.9712 12.7507 11.8173C12.9114 11.6634 13.1295 11.577 13.3568 11.577C13.5841 11.577 13.8021 11.6634 13.9629 11.8173C14.1236 11.9712 14.2139 12.1799 14.2139 12.3975ZM14.2139 9.11543C14.2139 9.33305 14.1236 9.54175 13.9629 9.69562C13.8021 9.8495 13.5841 9.93595 13.3568 9.93595C13.1295 9.93595 12.9114 9.8495 12.7507 9.69562C12.59 9.54175 12.4997 9.33305 12.4997 9.11543C12.4997 8.89782 12.59 8.68912 12.7507 8.53524C12.9114 8.38137 13.1295 8.29492 13.3568 8.29492C13.5841 8.29492 13.8021 8.38137 13.9629 8.53524C14.1236 8.68912 14.2139 8.89782 14.2139 9.11543ZM9.92822 12.3975C9.92822 12.6151 9.83792 12.8238 9.67717 12.9777C9.51643 13.1315 9.29841 13.218 9.07108 13.218C8.84375 13.218 8.62573 13.1315 8.46499 12.9777C8.30424 12.8238 8.21394 12.6151 8.21394 12.3975C8.21394 12.1799 8.30424 11.9712 8.46499 11.8173C8.62573 11.6634 8.84375 11.577 9.07108 11.577C9.29841 11.577 9.51643 11.6634 9.67717 11.8173C9.83792 11.9712 9.92822 12.1799 9.92822 12.3975ZM9.92822 9.11543C9.92822 9.33305 9.83792 9.54175 9.67717 9.69562C9.51643 9.8495 9.29841 9.93595 9.07108 9.93595C8.84375 9.93595 8.62573 9.8495 8.46499 9.69562C8.30424 9.54175 8.21394 9.33305 8.21394 9.11543C8.21394 8.89782 8.30424 8.68912 8.46499 8.53524C8.62573 8.38137 8.84375 8.29492 9.07108 8.29492C9.29841 8.29492 9.51643 8.38137 9.67717 8.53524C9.83792 8.68912 9.92822 8.89782 9.92822 9.11543ZM5.64251 12.3975C5.64251 12.6151 5.5522 12.8238 5.39146 12.9777C5.23071 13.1315 5.01269 13.218 4.78537 13.218C4.55804 13.218 4.34002 13.1315 4.17927 12.9777C4.01853 12.8238 3.92822 12.6151 3.92822 12.3975C3.92822 12.1799 4.01853 11.9712 4.17927 11.8173C4.34002 11.6634 4.55804 11.577 4.78537 11.577C5.01269 11.577 5.23071 11.6634 5.39146 11.8173C5.5522 11.9712 5.64251 12.1799 5.64251 12.3975ZM5.64251 9.11543C5.64251 9.33305 5.5522 9.54175 5.39146 9.69562C5.23071 9.8495 5.01269 9.93595 4.78537 9.93595C4.55804 9.93595 4.34002 9.8495 4.17927 9.69562C4.01853 9.54175 3.92822 9.33305 3.92822 9.11543C3.92822 8.89782 4.01853 8.68912 4.17927 8.53524C4.34002 8.38137 4.55804 8.29492 4.78537 8.29492C5.01269 8.29492 5.23071 8.38137 5.39146 8.53524C5.5522 8.68912 5.64251 8.89782 5.64251 9.11543Z"
                                    fill="#3B3731" />
                            </svg></span> Date</p>
                    <p class="cb-value">18/12/2025</p>
                </div>

                <div class="cb-info-group">
                    <p class="cb-label"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0.5C12.1423 0.5 15.5 3.85774 15.5 8C15.5 12.1423 12.1423 15.5 8 15.5C3.85774 15.5 0.5 12.1423 0.5 8C0.5 3.85774 3.85774 0.5 8 0.5Z"
                                    stroke="#3B3731" stroke-linecap="round" />
                            </svg></span> Time</p>
                    <p class="cb-value">14:30 - 15:30</p>
                    <span class="cb-sub-text">(80 minutes)</span>
                </div>
            </div>

            <div class="calendar mt-4">
                <div class="calendar-header">
                    <button class="nav-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path d="M5.53426 10.484L0.499999 5.44975L5.44975 0.500005" stroke="#3B3731"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <span>October 2025</span>
                    <button class="nav-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                            <path d="M0.5 10.484L5.53426 5.44975L0.58451 0.500005" stroke="#3B3731"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="weekdays mt-4">
                    <div>M</div>
                    <div>T</div>
                    <div>W</div>
                    <div>T</div>
                    <div>F</div>
                    <div>S</div>
                    <div>S</div>
                </div>

                <div class="dates mt-4">
                    <div></div>
                    <div></div>
                    <div class="date">1</div>
                    <div class="date">2</div>
                    <div class="date">3</div>
                    <div class="date">4</div>

                    <div class="date">5</div>
                    <div class="date">6</div>
                    <div class="date">7</div>
                    <div class="date">8</div>
                    <div class="date">9</div>
                    <div class="date">10</div>
                    <div class="date">11</div>

                    <div class="date">12</div>
                    <div class="date">13</div>
                    <div class="date available selected">14</div>
                    <div class="date">15</div>
                    <div class="date">16</div>
                    <div class="date">17</div>
                    <div class="date">18</div>

                    <div class="date">19</div>
                    <div class="date">20</div>
                    <div class="date">21</div>
                    <div class="date">22</div>
                    <div class="date">23</div>
                    <div class="date">24</div>
                    <div class="date">25</div>

                    <div class="date">26</div>
                    <div class="date">27</div>
                    <div class="date">28</div>
                    <div class="date">29</div>
                    <div class="date">30</div>
                    <div class="date">31</div>
                </div>


            </div>

            <div class="cb-time-slots">
                <p class="cb-availability-title"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18" fill="none">
                            <path
                                d="M9 0C4.05 0 0 4.05 0 9C0 13.95 4.05 18 9 18C13.95 18 18 13.95 18 9C18 4.05 13.95 0 9 0ZM7.2 13.5L2.7 9L3.969 7.731L7.2 10.953L14.031 4.122L15.3 5.4L7.2 13.5Z"
                                fill="#D8E8B7" />
                        </svg></span> Availability</p>
                <div class="time">09:00 AM</div>
                <div class="time selected">11:00 AM</div>
                <div class="time">12:00 PM</div>
                <div class="time" id="halfDay">Half Day</div>
                <div class="time" id="fullDay">Full-Day</div>
            </div>
        </div>

        <div class="cb-modal-footer">
            <button class="cb-btn-cancel">Cancel</button>
            <button class="cb-btn-save">Save</button>
        </div>
    </div>

    <script>
        // calendar
        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        let currentDate = new Date(2025, 9); // October 2025

        const headerTitle = document.querySelector('.calendar-header span');
        const datesContainer = document.querySelector('.dates');
        const prevBtn = document.querySelector('.nav-btn:first-child');
        const nextBtn = document.querySelector('.nav-btn:last-child');

        // Example available dates (can come from backend later)
        const availableDates = [
            "2025-10-07",
            "2025-10-09",
            "2025-10-14",
            "2025-10-15",
            "2025-10-20",
            "2025-10-26",
            "2025-10-29",
            "2025-10-30"
        ];

        function renderCalendar() {
            datesContainer.innerHTML = '';

            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();

            headerTitle.textContent = `${monthNames[month]} ${year}`;

            const firstDay = new Date(year, month, 1).getDay() || 7;
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let i = 1; i < firstDay; i++) {
                datesContainer.appendChild(document.createElement('div'));
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const dateDiv = document.createElement('div');
                dateDiv.classList.add('date');
                dateDiv.textContent = day;

                const dateKey = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;

                if (availableDates.includes(dateKey)) {
                    dateDiv.classList.add('available');

                    dateDiv.addEventListener('click', () => {
                        document.querySelectorAll('.date').forEach(d => d.classList.remove('selected'));
                        dateDiv.classList.add('selected');
                    });
                }

                datesContainer.appendChild(dateDiv);
            }
        }

        prevBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        });

        nextBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        });

        // Time selection (unchanged)
        document.querySelectorAll('.time').forEach(time => {
            time.addEventListener('click', () => {
                document.querySelectorAll('.time').forEach(t => t.classList.remove('selected'));
                time.classList.add('selected');
            });
        });

        renderCalendar();
    </script>

</body>



</html>