<?php
    require_once 'dbconf.php';

    
    function AddData($connect, $email, $fname, $lname, $password) {
        try {
           
            if (empty($password)) {
                die("Password cannot be empty.");
            }

           
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            
            $sql = "INSERT INTO user (email, fname, lname, password) 
                    VALUES ('$email', '$fname', '$lname', '$hashed_password')";

            $result = mysqli_query($connect, $sql);
            if ($result) {
                
                header('Location: ../FEO/Front.php');
                exit;
            } else {
                die("Error: " . mysqli_error($connect));
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Get the POST data
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
        $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        
        if (empty($email) || empty($fname) || empty($lname) || empty($password)) {
            die("All fields are required.");
        }

        
        AddData($connect, $email, $fname, $lname, $password);
    }
?>
