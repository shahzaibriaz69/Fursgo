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

        <div class="modal-card">
            <div class="modal-booking-card">
                <div class="card-header-bar">
                    <span class="status-badge">Confirmed</span>
                    <div class="ref-container">
                        Booking reference: FG-10294
                        <span class="pdf-download"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="15"
                                viewBox="0 0 13 15" fill="none">
                                <path
                                    d="M3.07717 14.5H9.27418C9.95769 14.5 10.6132 14.2209 11.0965 13.7242C11.5798 13.2275 11.8514 12.5538 11.8514 11.8514V7.66649C11.8516 6.96411 11.5804 6.29039 11.0973 5.79351L6.70216 1.27568C6.46282 1.02973 6.1787 0.834645 5.86601 0.701554C5.55331 0.568463 5.21817 0.499975 4.87972 0.5H3.07717C2.39367 0.5 1.73815 0.779053 1.25484 1.27577C0.771523 1.77249 0.5 2.44618 0.5 3.14865V11.8514C0.5 12.5538 0.771523 13.2275 1.25484 13.7242C1.73815 14.2209 2.39367 14.5 3.07717 14.5Z"
                                    stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M5.9458 0.772461V5.0557C5.9458 5.45711 6.10096 5.84208 6.37714 6.12592C6.65332 6.40976 7.0279 6.56922 7.41847 6.56922H11.5876"
                                    stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M2.67822 10.9055V10.1488M2.67822 10.1488V8.63525H3.41456C3.60985 8.63525 3.79714 8.71498 3.93523 8.8569C4.07332 8.99882 4.15089 9.19131 4.15089 9.39201C4.15089 9.59272 4.07332 9.7852 3.93523 9.92712C3.79714 10.069 3.60985 10.1488 3.41456 10.1488H2.67822ZM8.56891 10.9055V9.95958M8.56891 9.95958V8.63525H9.67341M8.56891 9.95958H9.67341M5.62357 10.9055V8.63525H5.99173C6.28467 8.63525 6.5656 8.75485 6.77274 8.96773C6.97987 9.18061 7.09624 9.46933 7.09624 9.77039C7.09624 10.0714 6.97987 10.3602 6.77274 10.5731C6.5656 10.7859 6.28467 10.9055 5.99173 10.9055H5.62357Z"
                                    stroke="#3B3731" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> PDF</span>
                    </div>
                </div>
                <div style="padding: 30px;">
                    <div class="card-content">
                        <div class="groomer-row">
                            <div class="groomer-img-container">
                                <img src="images/booking-modal.svg" alt="Grooming">
                                <div class="shield-badge"><i class="fas fa-paw"></i></div>
                            </div>

                            <div class="groomer-main-info">
                                <div class="studio-header">
                                    <h3>Sarah's Grooming Studio</h3>
                                    <div class="pill-badges">
                                        <span class="pill popular"><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                height="9" viewBox="0 0 10 9" fill="none">
                                                <path
                                                    d="M2 8.99999C1.85833 8.99999 1.73967 8.95199 1.644 8.85599C1.54833 8.75999 1.50033 8.64133 1.5 8.49999C1.49967 8.35866 1.54767 8.23999 1.644 8.14399C1.74033 8.04799 1.859 7.99999 2 7.99999H8C8.14166 7.99999 8.2605 8.04799 8.3565 8.14399C8.4525 8.23999 8.50033 8.35866 8.5 8.49999C8.49966 8.64133 8.45166 8.76016 8.356 8.85649C8.26033 8.95283 8.14166 9.00066 8 8.99999H2ZM2.35 7.24999C2.10833 7.24999 1.89383 7.17083 1.7065 7.0125C1.51917 6.85416 1.4045 6.65416 1.3625 6.4125L0.862501 3.2375C0.845834 3.2375 0.827167 3.23967 0.806501 3.244C0.785834 3.24833 0.767001 3.25033 0.750001 3.25C0.541667 3.25 0.364668 3.17717 0.219001 3.0315C0.0733344 2.88583 0.000334469 2.70867 1.13636e-06 2.5C-0.000332197 2.29133 0.0726677 2.11433 0.219001 1.969C0.365334 1.82367 0.542334 1.75067 0.750001 1.75C0.957667 1.74933 1.13483 1.82233 1.2815 1.969C1.42817 2.11567 1.501 2.29267 1.5 2.5C1.5 2.55833 1.49367 2.6125 1.481 2.6625C1.46833 2.7125 1.45383 2.75833 1.4375 2.8L3 3.5L4.5625 1.3625C4.47083 1.29583 4.39583 1.20833 4.3375 1.1C4.27917 0.991667 4.25 0.875 4.25 0.75C4.25 0.541667 4.323 0.364501 4.469 0.218501C4.615 0.0725011 4.792 -0.000332194 5 1.13895e-06C5.208 0.000334472 5.38516 0.0733344 5.5315 0.219001C5.67783 0.364667 5.75066 0.541667 5.75 0.75C5.75 0.875 5.72083 0.991667 5.6625 1.1C5.60416 1.20833 5.52916 1.29583 5.4375 1.3625L7 3.5L8.5625 2.8C8.54583 2.75833 8.53116 2.7125 8.5185 2.6625C8.50583 2.6125 8.49966 2.55833 8.5 2.5C8.5 2.29167 8.573 2.1145 8.719 1.9685C8.865 1.8225 9.042 1.74967 9.25 1.75C9.458 1.75033 9.63516 1.82333 9.7815 1.969C9.92783 2.11467 10.0007 2.29167 10 2.5C9.99933 2.70833 9.92649 2.8855 9.7815 3.0315C9.6365 3.1775 9.45933 3.25033 9.25 3.25C9.23333 3.25 9.21466 3.248 9.194 3.244C9.17333 3.24 9.1545 3.23783 9.1375 3.2375L8.6375 6.4125C8.59583 6.65416 8.48133 6.85416 8.294 7.0125C8.10666 7.17083 7.892 7.24999 7.65 7.24999H2.35ZM2.35 6.25H7.65L7.975 4.1625L7.4 4.4125C7.18333 4.50416 6.9625 4.52083 6.7375 4.4625C6.5125 4.40416 6.32916 4.27916 6.1875 4.0875L5 2.45L3.8125 4.0875C3.67083 4.27916 3.4875 4.40416 3.2625 4.4625C3.0375 4.52083 2.81667 4.50416 2.6 4.4125L2.025 4.1625L2.35 6.25Z"
                                                    fill="white" />
                                            </svg> Popular</span>
                                        <span class="pill top-rated"><svg xmlns="http://www.w3.org/2000/svg" width="9"
                                                height="11" viewBox="0 0 9 11" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.41322 7.89398C6.44215 7.34453 6.31579 6.79804 6.0486 6.31706C5.78142 5.83608 5.3842 5.44005 4.90243 5.1743C4.81687 5.12481 4.71545 5.11047 4.61952 5.1343C4.5236 5.15813 4.44068 5.21827 4.38824 5.30205L3.77553 6.28276L3.26579 5.66624C3.23778 5.63245 3.20308 5.60482 3.16387 5.5851C3.12466 5.56538 3.08178 5.554 3.03795 5.55167C2.99413 5.54934 2.95029 5.55612 2.90921 5.57157C2.86813 5.58702 2.83069 5.61082 2.79926 5.64146C2.49919 5.93182 2.2648 6.2831 2.11186 6.67164C1.95892 7.06019 1.89098 7.47698 1.91262 7.89398C1.91262 8.49072 2.14967 9.06301 2.57162 9.48496C2.99358 9.90692 3.56587 10.144 4.1626 10.144C4.75934 10.144 5.33163 9.90692 5.75358 9.48496C6.17554 9.06301 6.41259 8.49072 6.41259 7.89398M3.01028 6.35586L2.97087 6.40798C2.67197 6.82551 2.52221 7.33145 2.54566 7.84441L2.54757 7.88191C2.54757 8.31007 2.71766 8.7207 3.02042 9.02346C3.32317 9.32621 3.7338 9.4963 4.16197 9.4963C4.59013 9.4963 5.00076 9.32621 5.30352 9.02346C5.60628 8.7207 5.77636 8.31007 5.77636 7.88191L5.77827 7.84504C5.78272 7.80373 5.88187 6.6673 4.84205 5.89442L4.79056 5.85692L4.12701 6.91835C4.09497 6.96954 4.05123 7.01239 3.99939 7.04337C3.94755 7.07435 3.8891 7.09258 3.82884 7.09655C3.76858 7.10052 3.70823 7.09013 3.65278 7.06622C3.59732 7.04231 3.54834 7.00557 3.50985 6.95903L3.01028 6.35586Z"
                                                    fill="#FEFEFE" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.79701 0.30821C3.81025 0.23997 3.84191 0.176658 3.88858 0.125138C3.93524 0.0736173 3.99512 0.0358558 4.06172 0.0159479C4.12832 -0.00396001 4.1991 -0.00525449 4.26638 0.0122049C4.33367 0.0296642 4.39489 0.0652111 4.4434 0.114991C4.56671 0.240837 4.80378 0.489988 5.04467 0.777274C5.28111 1.05884 5.53916 1.39761 5.68788 1.69951C5.8328 1.99443 5.98661 2.37578 6.10801 2.69421L6.67305 1.75354C6.70456 1.701 6.74826 1.65683 6.80046 1.62476C6.85265 1.59269 6.91181 1.57367 6.97292 1.56931C7.03402 1.56494 7.09528 1.57536 7.1515 1.59969C7.20773 1.62401 7.25727 1.66152 7.29592 1.70905C8.09867 2.70057 8.49846 3.76263 8.6974 4.57365C8.79718 4.97979 8.8474 5.32491 8.87282 5.57025C8.88576 5.69278 8.89424 5.81574 8.89824 5.93889V5.97131C8.89824 8.4482 6.93364 10.4649 4.44785 10.4649C1.96206 10.4649 0 8.44756 0 5.97004C0 5.28805 0.322244 3.68192 1.27563 2.36498C1.31266 2.31422 1.36166 2.27341 1.41826 2.24615C1.47487 2.2189 1.53734 2.20605 1.60011 2.20876C1.66287 2.21146 1.724 2.22963 1.77806 2.26166C1.83211 2.29368 1.87741 2.33856 1.90994 2.39231L2.55507 3.46709C2.75083 3.16073 3.01269 2.73044 3.21163 2.3332C3.49765 1.76117 3.72455 0.682572 3.79701 0.308845M4.3201 0.912655C4.20506 1.42113 4.01501 2.14697 3.77985 2.61858C3.46714 3.24336 3.0165 3.9298 2.86142 4.16051C2.82554 4.21345 2.77693 4.25651 2.72005 4.28574C2.66317 4.31497 2.59986 4.32943 2.53593 4.32778C2.472 4.32614 2.40952 4.30844 2.35422 4.27632C2.29892 4.24421 2.25258 4.1987 2.21948 4.14399L1.57118 3.06476C0.87457 4.19166 0.635589 5.45839 0.635589 5.97131C0.635589 8.10561 2.32244 9.82806 4.44785 9.82806C6.57326 9.82806 8.26265 8.10561 8.26265 5.97131V5.95351L8.26011 5.88995C8.25568 5.80484 8.24911 5.71986 8.24041 5.63508C8.20712 5.3287 8.15362 5.02487 8.08024 4.72555C7.87826 3.89157 7.52027 3.10334 7.02516 2.40248L6.38068 3.47535C6.34338 3.53732 6.28925 3.58743 6.22459 3.61985C6.15993 3.65227 6.08739 3.66566 6.01542 3.65847C5.94344 3.65128 5.87499 3.6238 5.81802 3.57923C5.76105 3.53466 5.71791 3.47483 5.6936 3.40671C5.59064 3.11815 5.33831 2.42917 5.11713 1.98044C5.00463 1.751 4.78916 1.46117 4.55781 1.18596C4.4801 1.09353 4.40086 1.00242 4.3201 0.912655Z"
                                                    fill="#FEFEFE" />
                                            </svg> Top Rated</span>
                                    </div>
                                </div>
                                <p class="sub-name">Sarah W.</p>


                                <div class="rating-loc-row">
                                    <span class="rating-service-type">Home Visits</span>

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

                    <div class="pet-info-card">
                        <div class="pet-profile">
                            <img src="images/pet-card-image_1.png" alt="Bella">
                        </div>
                        <div class="pet-details-grid">
                            <div class="detail-item">
                                <label><i class="fas fa-paw"></i> Bella</label>
                                <p>Rabbit • Mini Lop</p>
                            </div>
                            <div class="detail-item">
                                <label><i class="fas fa-birthday-cake"></i> Birthday</label>
                                <p>22/08/2020</p>
                            </div>
                            <div class="detail-item">
                                <label><i class="fas fa-venus-mars"></i> Sex</label>
                                <p>Female</p>
                            </div>
                            <div class="detail-item">
                                <label><i class="fas fa-sticky-note"></i> Notes</label>
                                <p>Nervous around hair-dryers.</p>
                            </div>
                        </div>
                        <div class="arrow-circle">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="next-steps">
                        <h4>What happens next?</h4>
                        <ul>
                            <li>Your booking is secured for the selected time.</li>
                            <li>You can manage or cancel your booking from your account.</li>
                        </ul>
                        <div class="price-line">
                            <span>Total</span>
                            <span class="total-amount">£48.00</span>
                        </div>
                    </div>
                    <div class="card-actions">
                        <button class="btn-outline">Change Booking</button>
                        <button class="btn-green">Message Groomer</button>
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