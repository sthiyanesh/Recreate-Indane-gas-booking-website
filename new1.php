<?php
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$agnname = $_POST['agnname'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select * from agn_login where Agn_Name = ?");
		$stmt->bind_param("s", $agnname);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			$agnid = $data['Agn_ID'];
			$stmt = $con->prepare("SELECT * FROM cn_detail WHERE cn_id=(SELECT max(cn_id) FROM cn_detail);");
			$stmt->execute();
			$stmt_result  = $stmt->get_result();
			if($stmt_result -> num_rows > 0){
				$data = $stmt_result->fetch_assoc();
				$id = $data['Cn_ID'];
				$id = $id+1;
				$stmt = $con->prepare("insert into cn_detail (CN_ID,Cn_Name,DOB,Agn_ID,Agn_Name) values (?,?,?,?,?)");
				$stmt->bind_param("sssss", $id,$name,$dob,$agnid,$agnname);
				$stmt->execute();
				$stmt = $con->prepare("insert into cn_contact (CN_ID,Cn_Name,Address,Phone) values (?,?,?,?)");
				$stmt->bind_param("ssss", $id,$name,$address,$phone);
				$stmt->execute();
				header("location:new.php?bstatus=$id");
			}
		}else {
			echo "<h2>Oops The Agency Name You Typed is Not Found Try after Rechecking it's Spelling.Try Contact Our Administration.</h2>";
		}
	}
?>