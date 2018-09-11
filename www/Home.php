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
				<li class="nav-item active" >
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item" >
					<a href="#" class="nav-link">Items</a>
				</li>
				<li class="nav-item ">
					<a href="Contact Us.php" class="nav-link">Contact Us</a>
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

	<div class="container-fluid" style="padding-left: 0px;padding-right:0px;">
		<div id="carouselIndicator" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li class="active" data-target="#carouselIndicator" data-slide-to="0" data-transition="slideoverhorizontal"></li>
					<li data-target="#carouselIndicator" data-slide-to="2" data-transition="slideoverhorizontal"></li>
					<li data-target="#carouselIndicator" data-slide-to="3" data-transition="slideoverhorizontal"></li>
			</ol>
			<!-- //Carousel Main -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="content/imgs/1.png" alt="first" class="d-block w-100">

					<!-- Adding Caption And Buttons -->
					<div class="container">
						<div class="carousel-caption">
							<h1>This is Caption 1</h1>
							<p><a href="#" class="btn btn-lg btn-outline-success" role="button" data-toggle="modal" data-target="#exampleModal">Button example 1</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="content/imgs/2.png" alt="first" class="d-block w-100">
					<div class="container">
						<div class="carousel-caption">
							<h1>This is Caption 2</h1>
							<p><a href="#" class="btn btn-lg btn-primary" role="button" data-toggle="modal" data-target="#exampleModal">Button example 2</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="content/imgs/3.png" alt="first" class="d-block w-100">
					<div class="container">
						<div class="carousel-caption">
							<h1>This is Caption 3</h1>
							<p><a href="#" class="btn btn-lg btn-primary" role="button" data-toggle="modal" data-target="#exampleModal">Button example 3</a></p>
						</div>
					</div>
				</div>
			</div>

			<!-- //Controls -->
			<a href="#carouselIndicator" class="carousel-control-prev" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a href="#carouselIndicator" class="carousel-control-next" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row text-center justify-content-center" >
				<div class="col-xs-12 col-sm-4 col-lg-3"><img src="content/imgs/4.png" alt="rew" class="w-100" style="padding-top: 20px"> 
					<h3>
						Lorem Ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi molestiae veniam in facilis, accusantium quidem.</p>
					</div>
				<div class="col-xs-12 col-sm-4 col-lg-3"><img src="content/imgs/4.png" alt="rew" class="w-100" style="padding-top: 20px"> 
					<h3>
						Lorem Ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, ut, eaque. Pariatur sequi ab suscipit.</p>
					</div>
				<div class="col-xs-12 col-sm-4 col-lg-3"><img src="content/imgs/4.png" alt="rew" class="w-100" style="padding-top: 20px"> 
					<h3>
						Lorem Ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sunt, error beatae, ex consectetur quod.</p>
					</div>
				<div class="col-xs-12 col-sm-4 col-lg-3"><img src="content/imgs/4.png" alt="rew" class="w-100" style="padding-top: 20px"> 
					<h3>
						Lorem Ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ut enim dolore possimus minima vero.</p>
					</div>
				<div class="col-xs-12 col-sm-4 col-lg-3"><img src="content/imgs/4.png" alt="rew" class="w-100" style="padding-top: 20px"> 
					<h3>
						Lorem Ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque unde, explicabo voluptatem accusantium enim, quaerat.</p>
					</div>
				<div class="col-xs-12 col-sm-4 col-lg-3"><img src="content/imgs/4.png" alt="rew" class="w-100" style="padding-top: 20px"> 
					<h3>
						Lorem Ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, debitis quisquam temporibus maxime reprehenderit, eligendi.</p>
					</div>
			</div>
		</div>
	</div>

	<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim magnam consequatur itaque, natus deleniti at nemo harum odio saepe facere laboriosam voluptates earum sequi recusandae odit similique, assumenda ab in, nisi doloribus qui porro. Cumque culpa sit, eaque veritatis aliquam sequi rerum! Quasi sequi reiciendis blanditiis, totam corrupti dignissimos! Aperiam numquam earum iste velit ea nemo sequi pariatur provident optio perspiciatis, natus minima nihil ad. Provident non fuga quas necessitatibus doloribus, animi illo, quod eum ea. Quam placeat deserunt ipsa beatae nemo. Quidem, dolores, impedit autem voluptate esse nihil blanditiis provident sapiente eveniet omnis, illum obcaecati vero, cum quasi cupiditate.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button class="btn btn-primary">Agree</button>
			</div>
		</div>
	</div>
</div>
<hr class="featurette-divider">
<div class="container">
<div class="row featurette">
	<div class="col-md-7">
		<h2 class="featurette-heading">Lorem ipsum dolor.
			</h2>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quae quas ipsum ex tempora illum repudiandae necessitatibus aperiam voluptatibus. Impedit nihil assumenda animi, dolorem nostrum deleniti, iusto. Corrupti, accusamus ut dolores dolorem! Earum, modi quis vitae maiores sapiente, reprehenderit voluptate labore, quos ut porro pariatur soluta veniam laudantium beatae perferendis recusandae molestias impedit possimus quo ullam, fugiat. Quae cumque repellendus rerum, error ab labore quis aliquid, quisquam expedita quaerat quasi accusantium facere voluptates. Deserunt molestias distinctio aut, reprehenderit dignissimos placeat doloremque corporis voluptas, delectus esse vel expedita suscipit nobis amet quaerat explicabo, doloribus dolor itaque saepe atque! Sunt, accusamus, ipsam!</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16507bcc3fa%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16507bcc3fa%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1984375%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
		</div>
</div>
<hr class="featurette-divider">
<div class="row featurette">
        
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16507c9b459%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16507c9b459%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1984375%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
        <div class="col-md-7 push-md-5">
          <h2 class="featurette-heading">Lorem ipsum dolor sit amet. </h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore adipisci dolor facilis nesciunt magnam sequi libero quisquam! Corrupti explicabo laboriosam, rem magni reprehenderit eos quisquam ipsam, beatae sed id aut assumenda incidunt debitis ratione earum voluptate, ex excepturi iusto. Aut explicabo sed deleniti ab rerum tempore aliquid laboriosam facilis ex corrupti voluptatum labore officia numquam voluptas laudantium reprehenderit consequuntur, quod in officiis. Sapiente pariatur molestiae ipsum dolore atque, quibusdam molestias. Laborum accusantium quos sint!</p>
        </div>
      </div>
      <hr class="featurette-divider">
<div class="container">
<div class="row featurette">
	<div class="col-md-7">
		<h2 class="featurette-heading">Lorem ipsum dolor.
			</h2>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quae quas ipsum ex tempora illum repudiandae necessitatibus aperiam voluptatibus. Impedit nihil assumenda animi, dolorem nostrum deleniti, iusto. Corrupti, accusamus ut dolores dolorem! Earum, modi quis vitae maiores sapiente, reprehenderit voluptate labore, quos ut porro pariatur soluta veniam laudantium beatae perferendis recusandae molestias impedit possimus quo ullam, fugiat. Quae cumque repellendus rerum, error ab labore quis aliquid, quisquam expedita quaerat quasi accusantium facere voluptates. Deserunt molestias distinctio aut, reprehenderit dignissimos placeat doloremque corporis voluptas, delectus esse vel expedita suscipit nobis amet quaerat explicabo, doloribus dolor itaque saepe atque! Sunt, accusamus, ipsam!</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16507bcc3fa%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16507bcc3fa%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1984375%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
		</div>
</div>
</div>
<hr class="featurette-divider" >


<footer style="padding: 30px">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2018 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
  </div>

	<!-- Optional Javascript-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>

</body>
</html>