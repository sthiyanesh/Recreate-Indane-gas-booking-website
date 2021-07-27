<html>
<head>
	<title>Indane Gas Service</title>
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
	<style>
a:link {
  color: white;
  text-decoration: none;
}

a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>
<body>
	<div class="text-center">
		<img src="images/bg.png" class="rounded" />
	</div>
	<div class = "container vh-100">
		<div class = "row justify-content-center h-100">
		<div class = "card text-center w-100 my-auto shadow">
			<div class = "card-header bg-primary text-white">
				YOUR BOOKED CYLINDER STATUS
			</div>
			<div class = "card-body">
<?php
	$bid = $_POST['bid'];
	$cid = $_POST['cid'];
	$name =$_POST['name'];
	$con = new mysqli("localhost","root","","gs_db");
	if($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	}else {
		$stmt = $con->prepare("select*from cn_booking where Booking_ID = ?");
		$stmt->bind_param("s", $bid);
		$stmt->execute();
		$stmt_result  = $stmt->get_result();
		if($stmt_result -> num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Cn_ID'] == $cid && $data['Cn_Name'] == $name){
				$dac = $data['DAC_No'];
				if($data['DAC_No'] == 0){
					echo '<h2 style = "color:green;text-align:center">DAC_No not Generated. Your Cylinder will be Delivered within a week</h2>';
				}else{
					echo '<h2 style = "color:green;text-align:center">DAC_No for Your Booking is '.$dac.' .Your Cylinder will Delivered within 2 Days</h2>';
				}
			}else{
				echo "<h2>Invalid details.Check it Once Again</h2>";
			}
		}else {
			echo "<h2>Oops!!! Your Booking_ID is not Found.Check if Your ID is Correct.If continues Contact Our Indane Administration.</h2>";
		}
	}
?>
			</div>
		</div></div>
	</div>
<div class = "container p-3 my-3 bg-primary text-white">
    <div class="row">
      
	  <div class="col-md-3 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
        <ul class="list-unstyled">
          <li>
            <a href="https://iocl.com/" target="_blank">Corporate Website Indian Oil</a>
          </li>
        </ul>
      </div>
      
	  <hr class="clearfix w-100 d-md-none">
      <div class="col-md-3 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">&copy; Indane Gas Service</h5>
        <ul class="list-unstyled">
          <li>
            <a href="https://cx.indianoil.in/termsofuse.htm" target="_blank">Term of Use</a>
          </li>
		  <li>
            <a href="https://cx.indianoil.in/Privacy_Policy.html" target="_blank">privacy Policy</a>
          </li>
        </ul>
      </div>

      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-3 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">DownLoad our Free Apps</h5>
        <ul class="list-unstyled">
          <div class="container" ><li>
            <a href="https://apps.apple.com/in/app/indianoil-one/id1444511410" target="_blank"><img src="images/apple.png" /></a>
          </li></div>
		  <div class="container" ><li>
            <a href="https://play.google.com/store/apps/details?id=cx.indianoil.in" target="_blank"><img src="images/playstore.png" /></a>
          </li></div>
        </ul>
      </div>
    </div>
	</div>
</body>
</html>