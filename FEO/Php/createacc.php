
<?php
	require_once 'dbconf.php';
	function AddData($connect,$email,$Firstname,$Lastname,$Password){
		try {
            $hashed_password = password_hash($Password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO user VALUES('$email','$Firstname','$Lastname','$hashed_password')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				//echo "New student record created sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../Front.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$email=$_POST['email'];
        $Firstname=$_POST['Firstname'];
        $Lastname=$_POST['Lastname'];
        $Password=$_POST['Password'];

		AddData($connect,$email,$Firstname,$Lastname,$Password);
	}

	?>
