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
                        <button>Cat</button>
                        <button>Dog</button>
                        <button class="active">Other 🐾</button>
                    </div>
                </div>

                <div class="pf-field">
                    <label>Select Pet Size</label>
                    <div class="pf-toggle-group">
                        <button>Small 0-7 kg</button>
                        <button>Medium 8-18 kg</button>
                        <button class="active">Large 19+ kg</button>
                    </div>
                </div>

            </div>

            <!-- Row 2 -->
            <div class="pf-form-row">

                <div class="pf-field">
                    <label>Name</label>
                    <input type="text" value="Bella">
                </div>

                <div class="pf-field">
                    <label>Birthday</label>
                    <input type="text" placeholder="dd/mm/yyyy">
                </div>

                <div class="pf-field">
                    <label>Sex</label>
                    <div class="radio-group">
                        <label><input type="radio"> Male</label>
                        <label><input type="radio"> Female</label>
                    </div>
                </div>

            </div>

            <!-- Row 3 -->
            <div class="pf-form-row">

                <div class="pf-field">
                    <label>Pet Type (for ‘other’ pets)</label>
                    <input type="text" placeholder="e.g. Rabbit, Guinea Pig ...">
                </div>

                <div class="pf-field">
                    <label>Breed(s)</label>
                    <select>
                        <option>Labrador</option>
                    </select>
                </div>

                <div class="pf-field small">
                    <label>Weight (kg)</label>
                    <input type="number" value="4">
                </div>

            </div>

        </div>

    </div>

</body>

</html>