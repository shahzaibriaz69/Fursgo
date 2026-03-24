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

    <div class="pet-form booking-container">

        <!-- LEFT IMAGE -->
        <div class="pet-left">

            <div class="pet-avatar"></div>

            <button class="edit-btn">📷 Edit photo</button>

        </div>

        <!-- RIGHT FORM -->
        <div class="pet-right">

            <!-- Row 1 -->
            <div class="form-row">

                <div class="field">
                    <label>Select Pet Type</label>
                    <div class="toggle-group">
                        <button>Cat</button>
                        <button>Dog</button>
                        <button class="active">Other 🐾</button>
                    </div>
                </div>

                <div class="field">
                    <label>Select Pet Size</label>
                    <div class="toggle-group">
                        <button>Small 0-7 kg</button>
                        <button>Medium 8-18 kg</button>
                        <button class="active">Large 19+ kg</button>
                    </div>
                </div>

            </div>

            <!-- Row 2 -->
            <div class="form-row">

                <div class="field">
                    <label>Name</label>
                    <input type="text" value="Bella">
                </div>

                <div class="field">
                    <label>Birthday</label>
                    <input type="text" placeholder="dd/mm/yyyy">
                </div>

                <div class="field">
                    <label>Sex</label>
                    <div class="radio-group">
                        <label><input type="radio"> Male</label>
                        <label><input type="radio"> Female</label>
                    </div>
                </div>

            </div>

            <!-- Row 3 -->
            <div class="form-row">

                <div class="field">
                    <label>Pet Type (for ‘other’ pets)</label>
                    <input type="text" placeholder="e.g. Rabbit, Guinea Pig ...">
                </div>

                <div class="field">
                    <label>Breed(s)</label>
                    <select>
                        <option>Labrador</option>
                    </select>
                </div>

                <div class="field small">
                    <label>Weight (kg)</label>
                    <input type="number" value="4">
                </div>

            </div>

        </div>

    </div>

</body>

</html>