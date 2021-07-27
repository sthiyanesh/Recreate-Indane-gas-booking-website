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
		<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Welcome to Indane Gas Service</h5>
		<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Hello 
		<?php
			$id = $_GET['id'];
			$con = new mysqli("localhost","root","","gs_db");
			if($con->connect_error){
				die("Failed to connect:".$con->connect_error);
			}else {
				$stmt = $con->prepare("select*from agn_login where Agn_ID=?");
				$stmt->bind_param("s", $id);
				$stmt->execute();
				$stmt_result  = $stmt->get_result();
				if($stmt_result -> num_rows > 0){
					$row = $stmt_result->fetch_assoc();
					echo $row['Agn_Name'];
				}
			}
		?></h5>
	</div>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th scope= "col">Booking_ID</th>
				<th scope="col">Cn_ID</th>
				<th scope="col">Cn_Name</th>
				<th scope="col">Address</th>
				<th scope="col">Phone No.</th>
				<th scope="col">DAC No.</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$id = $_GET['id'];
				$con = new mysqli("localhost","root","","gs_db");
				if($con->connect_error){
					die("Failed to connect:".$con->connect_error);
				}else {
					$stmt = $con->prepare("select*from cn_booking where Agn_ID=?");
					$stmt->bind_param("s", $id);
					$stmt->execute();
					$stmt_result  = $stmt->get_result();
					if($stmt_result -> num_rows > 0){
						while ($row = $stmt_result->fetch_assoc()) {
							$field0name = $row["Booking_ID"];
							$field1name = $row["Cn_ID"];
							$field2name = $row["Cn_Name"];
							$field3name = $row["Address"];
							$field4name = $row["Phone"];
							$field5name = $row["DAC_No"];
							echo '<tr> 
								<td>'.$field0name.'</td>
								<td>'.$field1name.'</td> 
								<td>'.$field2name.'</td> 
								<td>'.$field3name.'</td> 
								<td>'.$field4name.'</td> 
								<td>'.$field5name.'</td>
								</tr>';
						}
					}
				}
			?>
		</tbody>
	</table>
	<div class = "card-body">
		<a href="http://localhost/miniproject/dac.php" class="btn btn-primary btn-lg btn-block" role="button">Enter DAC_No</a>
		<a href="http://localhost/miniproject/delivered.php" class="btn btn-primary btn-lg btn-block" role="button">Enter Delivered</a>
	</div>
	<h6>Note:After doing Any Changes refresh this Page to see the Changes</h6></div></div>
	
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
