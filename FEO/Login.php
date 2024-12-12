<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella Beauty Saloon</title>
    
    <link rel="stylesheet" href="Loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Log In</h1>
            <div class="input-box">
                <input type="email" placeholder="Email"required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password"required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remeber-forgot">
                <label><input type="checkbox" >Remember me</label>
                <a href="Reset password.php">Forgot password</a>
            </div>
            <button type="submit" class="btn"><a href="Front.php">Login</a></button>
            <div class="register-link">
                <p>Dont have an account? <a href="create Account.php">Create Account</a></p>
            </div>
        </form>
    </div>
</body>
</html>