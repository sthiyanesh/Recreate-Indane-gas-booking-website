<?php
	$bid = $_POST['bid'];
	$aid = $_POST['aid'];
	$dob = $_POST['dob'];
	$new = $_POST['new'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from agn_login where Agn_ID = ?");
		$stmt->bind_param("s", $aid);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Agn_DOB'] == $dob){
				$stmt = $con->prepare("update cn_booking set DAC_No = ? where Booking_ID = ?");
				$stmt->bind_param("ss", $new,$bid);
				$stmt->execute();
				header("location:dac.php?bstatus=True");
			}else{
				echo "<h2>Invalid details.Check it Once Again</h2>";
			}
		}else {
			echo "<h2>Oops!!! Your Consumer_ID is not Found.Check if Your ID is Correct.If continues Contact Your Agency.</h2>";
		}
	}
?>