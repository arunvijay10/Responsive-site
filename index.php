<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
</head>
<body>


<!--Navbar------------------------------------------starts------------------------------>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tech-Hack</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="news.php">News</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
        </li>
        
      
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
    
    
<!--Navbar------------------------------------------End's------------------------------->
   

<!--Carousel-----------------------------------------Start's---------------------------->
  



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pr1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/pr2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/pr3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    
<!--Carousel-----------------------------------------End's---------------------------->
    
    
<!--Sign in-----------------------------------------starts's---------------------------->

<section>
    <div class="my-5"></div>
    <h1 class="w-50 m-auto">Sign up</h1>
    <br>
        <div class="w-50 m-auto"> <!--width 50 margin auto-->
        <form action="infouser.php" method="post">
        <div class="form-group"> <!--class form group its a group of div-->
            <label>First Name</label>
            <input type="text" autocomplete="off" class="form-control" >
            <label class="my-1">Last Name</label>
            <input type="text" autocomplete="off" class="form-control" >
            <label class="my-1">Email</label>
            <input type="email" autocomplete="off" class="form-control" >
            <label class="my-1">Confirm Email</label>
            <input type="email" autocomplete="off" class="form-control" >
            <label class="my-1">Phone</label>
            <input type="phone" autocomplete="off" class="form-control" >
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
            </div>
            <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
            </div>
            <br>
            <input class="btn btn-outline-dark" type="submit" value="Submit">
    
        </div>
    </form>
    </div>
    
</section>
    
    
    
    
    
    
    
    
    
<!--Sign in-----------------------------------------End's---------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>