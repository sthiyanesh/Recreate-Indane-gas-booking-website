<?php
	$cn_id = $_POST['ID'];
	$name = $_POST['name'];
	$em = $_POST['email'];
	$pass = $_POST['password'];
	$repass = $_POST['repassword'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from cn_login where Email_ID = ?");
		$stmt->bind_param("s", $em);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			echo "This Email_ID is already Registered try Login or Use any another Email_ID";
		}else {
			$stmt = $con->prepare("select*from cn_detail where Cn_ID = ?");
			$stmt->bind_param("s", $cn_id);
			$stmt->execute();
			$stmt_result  = $stmt->get_result();
			if($stmt_result -> num_rows > 0){
				$data = $stmt_result->fetch_assoc();
				if($data['Cn_Name'] === $name){
					if($pass == $repass){
						$stmt = $con->prepare("insert into cn_login (Cn_ID,Cn_Name,Email_ID,Password) values(?,?,?,?)");
						$stmt->bind_param("ssss", $cn_id,$name,$em,$pass);
						$stmt->execute();
					echo "Registered Successfully";
					echo $data['Cn_Name'];
					}else {
						echo "Your Password and Confirm Password doesn't Match";
					}
				}else{
					echo "<h2>Your Consumer_ID and Consumer Name does not match.Check it Once Again</h2>";
				}
			}else {
				echo "<h2>Oops!!! Your Consumer_ID is not Found.Check if Your ID is Correct.If continues Contact Your Agency.</h2>";
			}
		}
	}
?>