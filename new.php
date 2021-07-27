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
	<h2 style = "color:green;text-align:center"><?php
			if(isset($_GET['bstatus'])){
				echo "Your Request of Applying for New Connection is Successful.\n";
			}
		?></h2>
		<h2 style = "color:green;text-align:center"><?php
			if(isset($_GET['bstatus'])){
				echo "Contact Your Near-By Indane office to get Your Indane Gas Book.\n";
			}
		?></h2>
		<h4 style = "color:green;text-align:center"><?php
			if(isset($_GET['bstatus'])){
				echo "Your Consumer-ID is   ";
				echo $_GET['bstatus'];
				echo "  Use this Id to Book your Cylinder Online after Receiving Your Indane Gas Book.";
				}
		?></h4>
	<div class = "container vh-100">
		<div class = "row justify-content-center h-100">
		<div class = "card text-center w-50 my-auto shadow">
			<div class = "card-header bg-primary text-white">
				ENTER THE REQUIRED DETAILS FOR NEW CONNECTION
			</div>
			<div class = "card-body">
				<form action = "new1.php" method = "post">
					<div class = "form-group">
						<label for = "box1" >CONSUMER NAME</label>
						<input type= "text" id = "box2" class = "form-control" name = "name" required />
					</div>
					<div class = "form-group">
						<label for = "box2" >DOB</label>
						<input type= "date" id = "box3" class = "form-control" name = "dob" required />
					</div>
					<div class = "form-group">
						<label for = "box3" >Agency Name</label>
						<input type= "text" id = "box3" class = "form-control" name = "agnname" required />
					</div>
					<div class = "form-group">
						<label for = "box4" >Address</label>
						<input type= "text" id = "box4" class = "form-control" name = "address" required />
					</div>
					<div class = "form-group">
						<label for = "box5" >Phone No.</label>
						<input type= "number" id = "box3" class = "form-control" name = "phone" required />
					</div>
				</div>
				<div class = "card-body">
					<input type = "submit" class = "btn btn-primary w-100" value = "Apply For New Connection" name = "" />
				</div>
			</form>
		</div> 
		<h6 style = "text-align:center">Note:Use Locate Distributer Option in Home Page to find the Distributer of Your Area</h6>
		</div>
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