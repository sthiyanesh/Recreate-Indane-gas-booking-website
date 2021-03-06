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
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Hello <?php $name = $_GET['name']; echo $name; ?></h5>
			</div>
			<div class = "card-body">
				<a href="http://petroleum.nic.in/dbt/index.php" target= "_blank" class="btn btn-default" role="button"><img src="images/pahal.png" /></a>
				<a href="http://localhost/miniproject/booking.php" class="btn btn-default " role="button"><img src="images/order.png" /></a>
				<a href="http://localhost/miniproject/bookstatus.php" class="btn btn-default " role="button"><img src="images/bstatus.png" /></a>
				<a href="http://localhost/miniproject/findht.html" class="btn btn-default" role="button"><img src="images/find_id.png"  /></a>
			</div>
			<div class = "card-body">
				<a href="http://localhost/miniproject/delete.php" class="btn btn-default " role="button"><img src="images/delete.png" /></a>
				<a href="http://localhost/miniproject/Locate.php" class="btn btn-default " role="button"><img src="images/find.png" /></a>
				<a href="http://localhost/miniproject/new.php" class="btn btn-default " role="button"><img src="images/new.png" /></a>
				<a href="http://localhost/miniproject/edit.php" class="btn btn-default " role="button"><img src="images/edit_pro.png" /></a>
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