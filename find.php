<?php
	$cn_id = $_POST['ID'];
	$name = $_POST['name'];
	$dname = $_POST['dname'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from cn_detail where Cn_ID = ?");
		$stmt->bind_param("s", $cn_id);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Cn_Name'] === $name && $data['Agn_Name'] == $dname){
				$lpgid = $data['LPG_ID'];
				header("Location: print.php?lpgid=$lpgid");
			}else{
				echo "<h2>Invalid details.Check it Once Again</h2>";
			}
		}else {
			echo "<h2>Oops!!! Your Consumer_ID is not Found.Check if Your ID is Correct.If continues Contact Your Agency.</h2>";
		}
	} 
?>