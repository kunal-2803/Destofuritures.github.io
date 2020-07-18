<!DOCTYPE html>
<html>
<head>
<title></title>


<!--Links-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Destino Furnitures</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Services <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
      </li>
     
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<!--carosole-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Web 1920 – 1.jpg" alt="Los Angeles" width="1100" height="500">
      
    </div>
    <div class="carousel-item">
      <img src="images/DontMiss_1242x450_V4._SX1242_CB441797623_.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/HomeTown_1500x300.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


  
<!--About US-->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/curology-6CJg-fOTYs4-unsplash (1).jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">We are Destiono Furnitures</h2>
			<p class="py-3">The furniture you place in your house has a significant effect on the look and the comfort of your home. Whether you prefer traditional wooden furniture or designer furniture, it should be according to your preferences, available space and the interior of your home.</p>
			<a href="about.php" class="btn btn-success">Check More</a>
		</div>
	</div>
</div>
</section>



<!--Our Services-->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Collection</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
                       <img class="card-img-top" src="images/Bookshelves_420x420._CB443551095_.jpg" alt="Card image" >
                   <div class="card-body">
                        <h4 class="card-title">Bookshelves</h4>
                        
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-12">
            		<div class="card" style="width:400px">
                       <img class="card-img-top" src="images/Study_Tables_420x420._CB443551095_.jpg" alt="Card image" >
                   <div class="card-body">
                        <h4 class="card-title">Study Tables</h4>
                        
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-4 col-md-4 col-12">
            		<div class="card" style="width:400px">
                       <img class="card-img-top" src="images/Recliners-_420x420.jpg" alt="Card image" >
                   <div class="card-body">
                        <h4 class="card-title">Recliners</h4>
                       
                        <a href="#" class="btn btn-primary centre ">Shop Now</a>
                    </div>
                </div>
            </div>
            


            
        </div>
	</div>		
</section>


<!--form-->

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="Email" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Mobile NO.</label>
				<input type="text" name="Mobile" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" name="comments"></textarea>
			</div>

			 <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>


<!--Footer-->
<footer>
	<p class="p-3 bg-dark text-white text-center">@DestinoFurniture</p>
</footer>

<!--script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</body>
</html>