<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

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

    <div class="pf-form booking-container">

        <!-- LEFT IMAGE -->
        <div class="pf-left">

            <div class="pf-avatar">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="190" height="190" viewBox="0 0 190 190"
                        fill="none">
                        <circle cx="95" cy="95" r="94.5" fill="#E3E3E3" stroke="#9D9B98" />
                        <path
                            d="M36.7334 169.099C40.4255 97.0391 149.511 97.0391 153.203 169.1C153.203 169.1 131.903 189.366 95.1698 189.366C58.4364 189.366 36.7334 169.099 36.7334 169.099Z"
                            fill="white" stroke="#9D9B98" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M123.737 74.7178C123.737 82.4402 120.669 89.8464 115.209 95.3071C109.748 100.768 102.342 103.835 94.6194 103.835C86.897 103.835 79.4908 100.768 74.0303 95.3071C68.5697 89.8464 65.502 82.4402 65.502 74.7178C65.502 66.9953 68.5697 59.5891 74.0303 54.1285C79.4908 48.6678 86.897 45.6001 94.6194 45.6001C102.342 45.6001 109.748 48.6678 115.209 54.1285C120.669 59.5891 123.737 66.9953 123.737 74.7178Z"
                            fill="white" stroke="#9D9B98" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></span>
            </div>

            <button class="pf-edit-btn">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                        <path
                            d="M1.25 12.5C1.25 12.8315 1.3817 13.1495 1.61612 13.3839C1.85054 13.6183 2.16848 13.75 2.5 13.75H17.5C17.8315 13.75 18.1495 13.6183 18.3839 13.3839C18.6183 13.1495 18.75 12.8315 18.75 12.5V5C18.75 4.66848 18.6183 4.35054 18.3839 4.11612C18.1495 3.8817 17.8315 3.75 17.5 3.75H16.035C15.041 3.74946 14.0878 3.35425 13.385 2.65125L12.3475 1.61625C12.1137 1.38242 11.7969 1.25073 11.4662 1.25H8.53625C8.20476 1.25007 7.88687 1.38181 7.6525 1.61625L6.6175 2.65125C6.26921 2.99964 5.85569 3.276 5.40057 3.46453C4.94544 3.65305 4.45763 3.75006 3.965 3.75H2.5C2.16848 3.75 1.85054 3.8817 1.61612 4.11612C1.3817 4.35054 1.25 4.66848 1.25 5V12.5ZM17.5 2.5C18.163 2.5 18.7989 2.76339 19.2678 3.23223C19.7366 3.70107 20 4.33696 20 5V12.5C20 13.163 19.7366 13.7989 19.2678 14.2678C18.7989 14.7366 18.163 15 17.5 15H2.5C1.83696 15 1.20107 14.7366 0.732233 14.2678C0.263393 13.7989 0 13.163 0 12.5V5C0 4.33696 0.263393 3.70107 0.732233 3.23223C1.20107 2.76339 1.83696 2.5 2.5 2.5H3.965C4.62799 2.49986 5.26377 2.23637 5.7325 1.7675L6.7675 0.7325C7.23623 0.263627 7.87201 0.000141594 8.535 0H11.465C12.128 0.000141594 12.7638 0.263627 13.2325 0.7325L14.2675 1.7675C14.7362 2.23637 15.372 2.49986 16.035 2.5H17.5Z"
                            fill="#3B3731" />
                        <path
                            d="M10 11.25C10.8288 11.25 11.6237 10.9208 12.2097 10.3347C12.7958 9.74866 13.125 8.9538 13.125 8.125C13.125 7.2962 12.7958 6.50134 12.2097 5.91529C11.6237 5.32924 10.8288 5 10 5C9.1712 5 8.37634 5.32924 7.79029 5.91529C7.20424 6.50134 6.875 7.2962 6.875 8.125C6.875 8.9538 7.20424 9.74866 7.79029 10.3347C8.37634 10.9208 9.1712 11.25 10 11.25ZM10 12.5C8.83968 12.5 7.72688 12.0391 6.90641 11.2186C6.08594 10.3981 5.625 9.28532 5.625 8.125C5.625 6.96468 6.08594 5.85188 6.90641 5.03141C7.72688 4.21094 8.83968 3.75 10 3.75C11.1603 3.75 12.2731 4.21094 13.0936 5.03141C13.9141 5.85188 14.375 6.96468 14.375 8.125C14.375 9.28532 13.9141 10.3981 13.0936 11.2186C12.2731 12.0391 11.1603 12.5 10 12.5ZM16.25 5.625C16.25 5.79076 16.3158 5.94973 16.4331 6.06694C16.5503 6.18415 16.7092 6.25 16.875 6.25C17.0408 6.25 17.1997 6.18415 17.3169 6.06694C17.4342 5.94973 17.5 5.79076 17.5 5.625C17.5 5.45924 17.4342 5.30027 17.3169 5.18306C17.1997 5.06585 17.0408 5 16.875 5C16.7092 5 16.5503 5.06585 16.4331 5.18306C16.3158 5.30027 16.25 5.45924 16.25 5.625Z"
                            fill="#3B3731" />
                    </svg>
                </span> Edit photo
            </button>

        </div>

        <!-- RIGHT FORM -->
        <div class="pf-pet-right">

            <!-- Row 1 -->
            <div class="pf-form-row">

                <div class="pf-field">
                    <label>Select Pet Type</label>
                    <div class="pf-toggle-group">
                        <button>
                            <p>Cat</p> <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="14"
                                    viewBox="0 0 10 14" fill="none">
                                    <path
                                        d="M4.6084 2.33691C5.10435 2.27575 5.79149 2.29051 6.44824 2.5127C7.17421 2.75837 7.87556 3.26331 8.21875 4.19922L9.63379 4.87793L9.66406 4.98926C9.85166 5.66584 9.96334 6.71639 9.67285 7.67285C9.52643 8.15482 9.27602 8.61867 8.87695 8.99414C8.47673 9.37055 7.93833 9.64708 7.23535 9.77246C4.70572 10.2235 3.27073 12.3877 2.875 13.4092C2.71213 13.8744 1.74663 13.9922 1.51953 13.5547C-1.87265 7.01946 1.17825 1.85935 3.28418 0L4.6084 2.33691ZM6.17578 4.70117C5.80462 4.70117 5.41028 4.88536 5.41016 5.62207C5.41016 6.13084 6.059 5.6221 6.48145 5.62207C6.90389 5.62207 6.94043 6.13086 6.94043 5.62207C6.94028 5.11355 6.59802 4.70134 6.17578 4.70117Z"
                                        fill="#D4D4D4" />
                                </svg></span>
                        </button>
                        <div class="line">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="1" height="47" viewBox="0 0 1 47"
                                    fill="none">
                                    <path d="M0.5 0V47" stroke="#D4D4D4" />
                                </svg></span>
                        </div>
                        <button>
                            <p>Dog</p><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                    viewBox="0 0 16 15" fill="none">
                                    <path
                                        d="M8.02539 0C8.64242 0.000140068 9.2247 0.285386 9.60352 0.772461L11.7188 3.49219C11.8778 3.69673 12.1107 3.83152 12.3672 3.86816L14.3516 4.15137C14.7095 4.20257 15.0127 4.44309 15.1211 4.78809C15.3559 5.53534 15.694 6.86422 15.4336 7.6582C15.1019 8.66939 14.5698 9.17547 13.6104 9.42285C11.9671 9.84647 10.6084 9.36193 9.00293 10.5859C8.55955 10.924 8.24254 11.3554 8.02148 11.8379C7.15008 13.7398 4.72988 15.7687 2.92676 14.708C1.76295 14.0232 1.19713 12.6471 1.54297 11.3418L2.01855 9.5459C2.13806 9.53792 2.25497 9.52868 2.36621 9.51465C2.66071 9.47749 2.95579 9.41275 3.1543 9.28711C3.31279 9.18664 3.47135 9.01633 3.61621 8.83105C3.76496 8.64078 3.91598 8.41357 4.05859 8.18066C4.3438 7.71485 4.60464 7.20844 4.75879 6.88281C4.81783 6.75804 4.7644 6.60888 4.63965 6.5498C4.51511 6.49106 4.36683 6.54369 4.30762 6.66797C4.15931 6.98132 3.90591 7.47232 3.63184 7.91992C3.49484 8.14364 3.35443 8.35264 3.22168 8.52246C3.08497 8.69731 2.97014 8.81137 2.88672 8.86426C2.78879 8.92628 2.5909 8.98231 2.30371 9.01855C2.02727 9.05342 1.70321 9.06707 1.38281 9.06641C1.06824 9.06575 0.762506 9.04879 0.516602 9.03125C0.12944 8.76968 -0.0877677 8.27103 0.0341797 7.80859C1.06258 3.90966 1.66993 2.10637 2.67871 1.09766C3.77026 0.00653585 5.94603 3.69908e-05 5.97168 0H8.02539ZM8.5752 3.66016C8.11076 3.66016 7.61831 3.89064 7.61816 4.8125C7.61816 5.44915 8.42941 4.8125 8.95801 4.8125C9.48646 4.81262 9.53223 5.44909 9.53223 4.8125C9.53204 4.17611 9.10359 3.66027 8.5752 3.66016Z"
                                        fill="#D4D4D4" />
                                </svg></span>
                        </button>
                        <button class="active">
                            <p style="color:#fff;">Other</p> <span><svg xmlns="http://www.w3.org/2000/svg" width="19"
                                    height="15" viewBox="0 0 19 15" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.10714 0C5.43536 0 4.90879 0.410454 4.58307 0.902727C4.25329 1.39909 4.07143 2.04682 4.07143 2.72727C4.07143 3.40773 4.25329 4.05545 4.58307 4.55182C4.90879 5.04273 5.43536 5.45455 6.10714 5.45455C6.77893 5.45455 7.3055 5.04409 7.63121 4.55182C7.961 4.05545 8.14286 3.40773 8.14286 2.72727C8.14286 2.04682 7.961 1.39909 7.63121 0.902727C7.3055 0.411818 6.77893 0 6.10714 0ZM12.8929 0C12.2211 0 11.6945 0.410454 11.3688 0.902727C11.039 1.39909 10.8571 2.04682 10.8571 2.72727C10.8571 3.40773 11.039 4.05545 11.3688 4.55182C11.6945 5.04273 12.2211 5.45455 12.8929 5.45455C13.5646 5.45455 14.0912 5.04409 14.4169 4.55182C14.7467 4.05545 14.9286 3.40773 14.9286 2.72727C14.9286 2.04682 14.7467 1.39909 14.4169 0.902727C14.0912 0.411818 13.5646 0 12.8929 0ZM2.03571 6.13636C1.36393 6.13636 0.837357 6.54682 0.511643 7.03909C0.181857 7.53545 0 8.18318 0 8.86364C0 9.54409 0.181857 10.1918 0.511643 10.6882C0.837357 11.1791 1.36393 11.5909 2.03571 11.5909C2.7075 11.5909 3.23407 11.1805 3.55979 10.6882C3.88957 10.1918 4.07143 9.54409 4.07143 8.86364C4.07143 8.18318 3.88957 7.53545 3.55979 7.03909C3.23407 6.54818 2.7075 6.13636 2.03571 6.13636ZM9.5 6.13636C7.87143 6.13636 6.66493 7.01455 5.89407 8.10409C5.13271 9.17727 4.75 10.5095 4.75 11.5909C4.75 12.8509 5.50321 13.7277 6.42743 14.2527C7.33671 14.7709 8.47671 15 9.5 15C10.5233 15 11.6633 14.7723 12.5726 14.2527C13.4954 13.7264 14.25 12.8509 14.25 11.5909C14.25 10.5095 13.8673 9.17727 13.1059 8.10409C12.3364 7.01318 11.1299 6.13636 9.5 6.13636ZM16.9643 6.13636C16.2925 6.13636 15.7659 6.54682 15.4402 7.03909C15.1104 7.53545 14.9286 8.18318 14.9286 8.86364C14.9286 9.54409 15.1104 10.1918 15.4402 10.6882C15.7659 11.1791 16.2925 11.5909 16.9643 11.5909C17.6361 11.5909 18.1626 11.1805 18.4884 10.6882C18.8181 10.1918 19 9.54409 19 8.86364C19 8.18318 18.8181 7.53545 18.4884 7.03909C18.1626 6.54818 17.6361 6.13636 16.9643 6.13636Z"
                                        fill="white" />
                                </svg></span>
                        </button>
                    </div>
                </div>

                <div class="pf-field">
                    <label>Select Pet Size</label>
                    <div class="pf-toggle-group" style="width:410px;">
                        <button>
                            <p>Small 0-7 kg</p>
                        </button>
                        <div class="line">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="1" height="47" viewBox="0 0 1 47"
                                    fill="none">
                                    <path d="M0.5 0V47" stroke="#D4D4D4" />
                                </svg></span>
                        </div>


                        <button>
                            <p>Medium 8-18 kg</p>
                        </button>
                        <button class="active">
                            <p style="color:#fff">Large 19+ kg</p>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Row 2 -->
            <div class="pf-form-row">

                <div class="pf-pet-field">
                    <label>Name</label>
                    <div class="input-box">

                        <input type="text" value="Bella">

                        <!-- RIGHT SVG -->
                        <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                            viewBox="0 0 19 19" fill="none">
                            <path
                                d="M9.5 0C4.275 0 0 4.275 0 9.5C0 14.725 4.275 19 9.5 19C14.725 19 19 14.725 19 9.5C19 4.275 14.725 0 9.5 0ZM7.6 14.25L2.85 9.5L4.1895 8.1605L7.6 11.5615L14.8105 4.351L16.15 5.7L7.6 14.25Z"
                                fill="#C9DDA0" />
                        </svg>

                    </div>
                </div>

                <div class="pf-pet-field">
                    <label>Birthday</label>

                    <div class="input-box">

                        <input type="text" placeholder="dd/mm/yyyy" style="width:195px">

                        <!-- Arrow SVG -->
                        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="8"
                            viewBox="0 0 15 8" fill="none">
                            <path d="M13.5107 0.5L6.95042 7.06033L0.500215 0.610127" stroke="#3B3731"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>

                <div class="pf-pet-field">
                    <label>Sex</label>
                    <div class="radio-group">
                        <label><input type="radio"> Male</label>
                        <label><input type="radio"> Female</label>
                    </div>
                </div>

            </div>

            <!-- Row 3 -->
            <div class="pf-form-row">

                <div class="pf-pet-field">
                    <label>Pet Type (for ‘other’ pets)</label>
                    <div class="input-box">

                        <input type="text" placeholder="e.g. Rabbit, Guinea Pig ...">

                        <!-- RIGHT SVG -->
                        <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                            viewBox="0 0 19 19" fill="none">
                            <path
                                d="M9.5 0C4.275 0 0 4.275 0 9.5C0 14.725 4.275 19 9.5 19C14.725 19 19 14.725 19 9.5C19 4.275 14.725 0 9.5 0ZM7.6 14.25L2.85 9.5L4.1895 8.1605L7.6 11.5615L14.8105 4.351L16.15 5.7L7.6 14.25Z"
                                fill="#C9DDA0" />
                        </svg>

                    </div>

                </div>

                <div class="pf-pet-field">
                    <label>Breed(s)</label>
                    <select>
                        <option>Labrador</option>
                    </select>
                </div>

                <div class="pf-pet-field small">
                    <label>Weight (kg)</label>

                    <div class="input-box">

                        <input type="number" value="4" style="width: 85px;
height: 48px;">

                        <!-- SVG -->
                        <svg class="number-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="28"
                            viewBox="0 0 11 28" fill="none">
                            <path d="M10.374 21.5315L5.3952 26.5103L0.499963 21.6151" stroke="#3B3731"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.374 5.47876L5.3952 0.499941L0.499963 5.39518" stroke="#3B3731"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                </div>

            </div>

            <div class="form-container">
                <div class="input-group">
                    <label class="section-label">Vaccination status</label>
                    <div class="radio-group">
                        <label class="radio-item">
                            <input type="radio" name="vaccination" value="yes">
                            <span class="custom-radio"></span>
                            Yes
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="vaccination" value="no">
                            <span class="custom-radio"></span>
                            No
                        </label>
                    </div>
                </div>

                <div class="input-group">
                    <label class="section-label">Medical Notes</label>
                    <textarea
                        placeholder="Help us keep your pets healthy and safe!&#10;(e.g allergies, sensitivities, medications, or ongoing treatments)."></textarea>
                </div>

                <div class="input-group">
                    <label class="section-label">Personality & behaviour</label>
                    <textarea
                        placeholder="Any behaviour we should know about?&#10;(e.g. Friendly with people, nervous around loud noises, doesn't like paws touched)."></textarea>
                </div>

                <div class="input-group">
                    <label class="section-label">Grooming preferences</label>
                    <textarea
                        placeholder="Any style preferences?&#10;(e.g clip length, shampoo type, sensitive areas)."></textarea>
                </div>
            </div>



        </div>

    </div>

</body>

</html>