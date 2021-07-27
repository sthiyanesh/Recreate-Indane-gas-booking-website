<?php
	$cn_id = $_POST['ID'];
	$name = $_POST['name'];
	$dob = $_POST['DOB'];
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
			$stmt = $con->prepare("select*from cn_detail where Cn_ID = ?");
			$stmt->bind_param("s", $cn_id);
			$stmt->execute();
			$stmt_result  = $stmt->get_result();
			if($stmt_result -> num_rows > 0){
				$data = $stmt_result->fetch_assoc();
				if($data['Cn_Name'] === $name && $data['DOB'] == $dob){
					if($pass == $repass){
						$stmt = $con->prepare("update cn_login set Password= ? where Email_ID=?");
						$stmt->bind_param("ss", $pass, $em);
						$stmt->execute();
					echo "Your Password changed Successfully";
					echo $data['Cn_Name'];
					}else {
						echo "Your New-Password and Confirm New-Password doesn't Match";
					}
				}else{
					echo "<h2>Invalid details.Check it Once Again</h2>";
				}
			}else {
				echo "<h2>Oops!!! Your Consumer_ID is not Found.Check if Your ID is Correct.If continues Contact Your Agency.</h2>";
			}
		} else {
			echo "This Email_ID is not Registered. Try SignUp with this Email_ID or Enter Registered Email_ID correctly with this Consumer_ID"; 
		}
	}
?>