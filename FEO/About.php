<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella Beauty Saloon</title>
</head>
<body>
    <link href="Aboutstyle.css" rel="stylesheet">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Bella Beauty</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Front.php"><button type="button" class="btn btn-primary">HOME</button></a></li>
                    <li><a href="#"><button type="button" class="btn btn-primary">ABOUT</button></a></li>
                    <li><a href="#"><button type="button" class="btn btn-primary">SERVICES</button></a></li>
                    <li><a href="#"><button type="button" class="btn btn-primary">BOOKING</button></a></li>
                    <li><a href="#"><button type="button" class="btn btn-primary">CONTACT</button></a></li>

                </ul>
            </div>

          

        </div> 
        
        <div class="content">
            <h1>HISTORY<br><span>BELLA BEAUTY Saloon</span></h1>
            <p class="par">WELCOME TO BELLA BEAUTY<br>Bella Beauty founded by Mr.R.Suresh ,09th January 2020<br>We start our journey with three staff.We Give Hair styling & Facials only in earlier time.Now We give our services to our valuable customers Hair styling,Facials,Manicure & Pedicure,Massage Therapy and Makeup.<br>We launch this system for our valuable customers can Booking get our services.  </p>
            
            <h1>Our Branches</h1>
            <p class="par">Colombo,Negambo,Kandy,Jaffna,Batticalo</p>
           
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