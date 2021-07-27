<?php
	$id = $_POST['ID'];
	$name = $_POST['name'];
	$dob = $_POST['DOB'];
	$em = $_POST['email'];
	$pass = $_POST['password'];
	$repass = $_POST['repassword'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from agn_login where Agn_ID = ?");
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Agn_Name'] === $name && $data['Agn_DOB'] == $dob){
				if($pass == $repass){
					$stmt = $con->prepare("update Agn_login set Password= ? where Email_ID=?");
					$stmt->bind_param("ss", $pass, $em);
					$stmt->execute();
					echo "Your Password changed Successfully";
					echo $data['Agn_Name'];
				}else {
					echo "Your New-Password and Confirm New-Password doesn't Match";
				}
			}else{
				echo "<h2>Invalid details.Check it Once Again</h2>";
			}
		}else {
			echo "<h2>Oops!!! Your Agency_ID is not Found.Check if Your ID is Correct.If continues Contact Nearby Indane Office.</h2>";
		}
	}
?>