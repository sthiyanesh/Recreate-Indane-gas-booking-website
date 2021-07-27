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
				echo "The Consumer Address changed Successfully.";
			}
		?></h2>
	<div class = "container vh-100">
		<div class = "row justify-content-center h-100">
		<div class = "card text-center w-25 my-auto shadow">
			<div class = "card-header bg-primary text-white">
				CHANGE YOUR ADDRESS
			</div>
			<div class = "card-body">
				<form action = "editaddress1.php" method = "post">
					<div class = "form-group">
						<label for = "box1" >CONSUMER ID</label>
						<input type= "number" id = "box1" class = "form-control" name = "id" required />
					</div>
					<div class = "form-group">
						<label for = "box2" >CONSUMER NAME</label>
						<input type= "text" id = "box2" class = "form-control" name = "name" required />
					</div>
					<div class = "form-group">
						<label for = "box3" >CONSUMER DOB</label>
						<input type= "date" id = "box3" class = "form-control" name = "dob" required />
					</div>
					<div class = "form-group">
						<label for = "box4" >NEW CONSUMER ADDRESS</label>
						<input type= "text" id = "box4" class = "form-control" name = "new" required />
					</div>
				</div>
				<div class = "card-body">
					<input type = "submit" class = "btn btn-primary w-100" value = "Change" name = "" />
				</div>
			</form>
		</div>
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