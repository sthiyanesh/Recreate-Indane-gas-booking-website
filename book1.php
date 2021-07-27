<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from cn_contact where Cn_ID = ?");
		$stmt->bind_param("s", $id);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Cn_Name'] === $name && $data['Phone'] == $phone){
				$address = $data['Address'];
				$stmt = $con->prepare("select*from cn_detail where Cn_ID = ?");
				$stmt->bind_param("s", $id);
				$stmt->execute();
				$stmt_result  = $stmt->get_result();
				if($stmt_result -> num_rows > 0){
					$data = $stmt_result->fetch_assoc();
					$agid = $data['Agn_ID'];
					$stmt = $con->prepare("insert into cn_booking (Cn_ID,Cn_Name,Address,Phone,Agn_ID) values(?,?,?,?,?);");
					$stmt->bind_param("sssss", $id,$name,$address,$phone,$agid);
					$stmt->execute();
					$stmt = $con->prepare("SELECT * FROM cn_booking WHERE Booking_ID=(SELECT max(Booking_ID) FROM cn_booking);");
					$stmt->execute();
					$stmt_result  = $stmt->get_result();
					$data = $stmt_result->fetch_assoc();
					$id = $data['Booking_ID'];
					header("location:booking.php?bstatus=$id");
				}
			}else{
				echo "<h2>Invalid details.Check it Once Again</h2>";
			}
		}else {
			echo "<h2>Oops!!! Your Consumer_ID is not Found.Check if Your ID is Correct.If continues Contact Your Agency.</h2>";
		}
	}
?>