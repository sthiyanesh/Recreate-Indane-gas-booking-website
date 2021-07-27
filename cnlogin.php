<?php
	$em = $_POST['email'];
	$pass = $_POST['password'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from cn_login where Email_ID = ?");
		$stmt->bind_param("s", $em);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Password'] === $pass){
				$name = $data['Cn_Name'];
				header("Location: homelog.php?name=$name");
			}else{
				echo "<h2>Invalid Email or Password</h2>";
			}
		}else {
			echo "<h2>Invalid Email or Password</h2>";
		}
	}
?>