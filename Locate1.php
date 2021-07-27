<?php
	$id = $_POST['id'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from agn_login where Pin_Code=?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			$dealer = $data['Agn_Name'];
			header("location:Locate.php?bstatus=$dealer");
		}else {
			echo "<h2>Oops!!! No Supplier found for this Pincode If continues Contact Your Near-By Indane Administrtion to find Your Area Indane Gas Supplier</h2>";
		}
	}
?>