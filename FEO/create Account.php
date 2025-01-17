<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella Beauty Saloon</title>
    <link rel="stylesheet" href="create Accountstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form class="form" action="../Php/createacc.php" method="post">
            <h2>Create Account</h2>
            <div class="input-box">
                <input type="text" name="fname" placeholder="Firstname" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name="lname" placeholder="Lastname" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Sign up</button>
        </form>
    </div>
</body>
</html>
