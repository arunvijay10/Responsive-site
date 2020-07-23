<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tech-Hack</title>
    

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <!--End's Font    -->
  
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
    
    
<!-------------------------------------about---------------------------start's---------->
   
    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">About Us</h1>
        </div>
         <div class="container-fluid">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
            <img src="images/pp5.jpg" class="img-fluid imagechanger">
            </div>
            <div class="col-lg-6 col-md-6 col-12 aboutpara" >
            <h1 >Hacker Nation</h1>
            <p class="py-3"> This might be the most distinctive website we’ve come          across.
               Anton amd Irene is a design agency based in Manhattan.
               Why are they a distinctive web presence?
               Because their page takes parallax scrolling to the next level.
               The snowy effects, bold colors, and quirky visuals create a truly captivating experience
            </p>
            <a href="index.php" class="btn btn-outline-success btns">Hacker</a>
            
            </div>
        </div>
        </div>
        
    </section>
    
<!-------------------------------------about---------------------------end's------------>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>