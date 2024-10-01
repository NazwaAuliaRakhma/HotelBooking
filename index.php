<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grand Hotel - Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="index-page">
    <div class="container">
        <header>
            <div class="navbar">
                <ul>
                    <li><a href="index.php">INDONESIA</a></li>
                    <li><a href="#rooms">ROOM & PRICING</a></li> 
                    <li><a href="booking.php">RESERVATION</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
                <div class="login-register">
                    <a href="login.php">LOGIN</a> | <a href="register.php">REGISTER</a>
                </div>
            </div>
            <div class="hero-section">
                <h1>Welcome To Grand Hotel</h1>
                <h2>Enjoy The Experience</h2>
                <div class="cta">
                    <a href="#">Take a Look</a>
                </div>
            </div>
        </header>

        <!-- Rooms Section -->
        <section id="rooms">
            <h2>Our Rooms</h2>
            <div class="rooms-container">
                <div class="room-card">
                    <a href="standard.php">
                        <img src="image/standard.jpg" alt="Standard Suite" class="room-image">
                        <p><strong>Standard Suite</strong></p>
                        <p>Rp. 500.000 / Night</p>
                    </a>
                </div>
                <div class="room-card">
                    <a href="deluxe.php">
                        <img src="image/deluxe.jpg" alt="Deluxe Suite" class="room-image">
                        <p><strong>Deluxe Suite</strong></p>
                        <p>Rp. 750.000 / Night</p>
                    </a>
                </div>
                <div class="room-card">
                    <a href="executive.php">
                        <img src="image/executive.jpg" alt="Executive Room" class="room-image">
                        <p><strong>Executive Room</strong></p>
                        <p>Rp. 1.000.000 / Night</p>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
