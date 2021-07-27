<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$new = $_POST['new'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from cn_detail where Cn_ID = ?");
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Cn_Name'] == $name && $data['DOB'] == $dob){
				$stmt = $con->prepare("update cn_contact set Address = ? where Cn_ID = ?");
				$stmt->bind_param("ss", $new,$id);
				$stmt->execute();
				header("location:editaddress.php?bstatus=True");
			}else{
				echo "<h2>Invalid details.Check it Once Again</h2>";
			}
		}else {
			echo "<h2>Oops!!! Your Consumer_ID is not Found.Check if Your ID is Correct.If continues Contact Your Agency.</h2>";
		}
	}
?>