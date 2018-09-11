<?php
session_start();
if (isset($_POST["send"])) {
	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
	$phone = htmlspecialchars($_POST["phone"]);
	$message = htmlspecialchars($_POST["message"]);
	$_SESSION["name"] = $name;
	$_SESSION["email"] = $email;
	$_SESSION["phone"] = $phone;
	$_SESSION["message"] = $message;
	$error_name = "";
	$error_email = "";
	$error_phone = "";
	$error_message = "";
	$error = false;
	if (strlen($name)<=3) {
		$error_name = "Please Write Your Name";
		$error = true;
			}
			if (strlen($phone)<=3) {
		$error_phone = "Please Write Your Phone number";
		$error=true;
			}
			if (strlen($message)<=3) {
		$error_message = "Please Write Your Feedback";
		$error=true;
			}
			if ($email==""|| !preg_match("/@/", $email)) {
				$error_email = "Please write correct Email";
				$error=true;

			}
			if (!$error) {
			$name="=?utf-8?B?".base64_encode($name)."?=";
			$headers="From: $email\r\nReply-to: $email\r\nContent-type:text/plain; charset=utf-8\r\n";
			mail($email, $name, $message, $headers);
			header("Location:Home.php");
			exit;
		}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>BootStrap SiteExample</title>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  sticky-top" style="background-color: black">
	<div class="container">
	<a href="Home.php" class="navbar-brand">
		<img src="content/imgs/main3.jpg" alt="logo" width="30" height="30" ></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#content" aria-contorls="content" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="content">
			<ul class="navbar-nav mr-auto" >
				<li class="nav-item" >
					<a href="Home.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item" >
					<a href="#" class="nav-link">Items</a>
				</li>
				<li class="nav-item active ">
					<a href="#" class="nav-link">Contact Us</a>
				</li>
				<li class="nav-item ">
					<a href="#" class="nav-link">FAQ</a>
				</li>
			</ul>
			<form action="" class="form-inline my-2 my-lg-0">
				<input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0">Search</button>
			</form>
		</div>
	</div>
</nav>
<div>
<div class="container">
	<div class="text-center justify-content-center " style="padding:100px">
	<h1 class="text-uppercase" >Contact Form Template</h1>
	<p class="lead text-capitalize">Subscribe to our newsletter</p>
</div>
	<div class="row justify-content-center" style="padding-bottom:100px">
	<div class="col-sm-4">
      <input type="text" class="form-control" id="emailSubscribe" placeholder="Email">
    </div>
    	      <button class="btn btn-primary float-right col-sm-3">Subscribe</button>
</div>

</div>
</div>
<div style="background-color: rgb(40, 167, 69)">
	<div class="container">
		<div class="text-center justify-content-center" style="padding: 20px">
		<h1 class="text-uppercase">Contact form template</h2>
			<p class="lead text-capitalize">Please Give your feedback</p>
	<form name="feedback" action="" method="post">
<div class="row">
	<div class="form-group col-sm-4">
		<label for="name" style="float: left">Name</label>
		<span style="color: red"><?=$error_name?></span><br/>
		<input type="text" name="name" placeholder="Name" class="form-control" id="name" value="<?=$_SESSION["name"] ?> "/>
	</div>
		<div class="form-group col-sm-4">
		<label for="email" style="float: left">Email</label>
		<span style="color: red"><?=$error_email?></span><br/>
		<input type="Email" name="email" placeholder="Email" class="form-control" id="email" value="<?=$_SESSION["email"] ?> "/>
	</div>
	<div class="form-group col-sm-4">
		<label for="phone" style="float: left">Phone</label>
		<span style="color: red"><?=$error_phone?></span><br/>
		<input type="text" name="phone" placeholder="Phone" class="form-control" id="phone" value="<?=$_SESSION["phone"] ?> "/>
	</div>

	<div class="row">
		<div class="form-group col-sm-12">
			<label for="message" style="float: left">Message</label>
			<span style="color: red"><?=$error_message?></span><br/>
			<textarea type="text" name="message"  class="form-control" placeholder="Please Give Your Feedback" id="message" cols="150" rows="10"><?=$_SESSION["message"] ?></textarea>
		</div>
	</div>
	
		<div class="col-lg-12 justify-content-center" style="padding: 20px">
		 <button class="btn btn-outline-success col-sm-4" name="send" value="Send" style="background-color: black">Send</button>
		</div>

</div>
	</form>
</div>
	</div>
</div>







<hr class="featurette-divider" >


<footer style="padding: 30px">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2018 Company, Inc. <a href="#">Privacy</a> <a href="#">Terms</a></p>
      </footer>
  </div>

	<!-- Optional Javascript-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>


</body>
</html>