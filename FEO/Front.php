<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella Beauty Saloon</title>
    
    <link href="Frontstyle.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Bella Beauty</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Front.php"><button type="button" class="btn btn-primary">HOME</button></a></li>
                    <li><a href="About.php"><button type="button" class="btn btn-primary">ABOUT</button></a></li>
                    <li><a href="#"><button type="button" class="btn btn-primary">SERVICES</button></a></li>
                    <li><a href="#"><button type="button" class="btn btn-primary">BOOKING</button></a></li>
                    <li><a href="Contact.php"><button type="button" class="btn btn-primary">CONTACT</button></a></li>
                    <!-- Logout Button -->
                    <li><a href="Login.php"><button type="button" class="btn btn-primary">LOGOUT</button></a></li>
                </ul>
            </div>
        </div> 
        
        <div class="content">
            <h1>Bella Beauty <br><span>Salon</span></h1>
            <p class="par">WELCOME TO BELLA BEAUTY<br>We Give Hair Styling, Facials, Manicure & Pedicure, Massage Therapy, and Makeup Services.<br>Book your slot & Get our valuable services</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bella Beauty. All rights reserved.</p>
    </footer>
</body>
</html>

<?php

session_start();


session_destroy();


header('Location: Login.php');
exit;
?>
