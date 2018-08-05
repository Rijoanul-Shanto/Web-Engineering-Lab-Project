<?php
include('connect.php');
	if (isset($_POST['register'])) {
		$fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$dofb = $_POST['dofb'];
		$country = $_POST['country'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$pass = $_POST['pass1'];

		$sql = "INSERT INTO info (id, firstname, lastname, email, phone, bd, country, address, gender, password)
		VALUES (null, '$fname', '$lname', '$email', '$phone', '$dofb' , '$country',  '$address', '$gender', '$pass')";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		}
		else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
?>
