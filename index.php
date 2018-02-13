<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  
</head>	

   <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar brand" href="#"><img src="img/w3newbie.png"></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
		 	<li ><a href="#">About</a></li>
		 	<li ><a href="#">Services</a></li>
		 	<li ><a href="#">Testimonials</a></li>
		 	<li ><a href="#">Contact</a></li>
           
          </ul>
         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/red.png" alt="First Slide">
                <div class="carousel-caption"><h1>get to know about bootsrap </h1>
                	<button type="button" class="btn btn-primary btn-lg">Get Started</button>
                </div>
            </div>
            <div class="item">
                <img src="img/mountains.png" alt="second Slide">
            </div>
             <div class="item">
                <img src="img/snow.png" alt="third Slide">
            </div>
            
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!-- end the slider -->


  <div class="container text-center">
    <h2>What we are using</h2>
    <div class="row">
        <div class="col-sm-4">
           <img src="img/html5.png" id="icon">
           <h4>Html 5</h4>
        </div>

        <div class="col-sm-4">
           <img src="img/bootstrap.png" id="icon">
           <h4>Bootstrap</h4>
        </div>

        <div class="col-sm-4">
           <img src="img/css3.png" id="icon">
           <h4>CSS3</h4>
        </div>
    </div>
   </div> 
    
  <div class="container">
   <div class="row">
       <div class="col-md-6">
        <h4>here's the cool things about bootstrap</h4>
         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
       </div>
   
       <div class="col-md-6">
         <img src="img/bootstrap2.jpg" class="img-responsive">
       </div>
   </div>

  </div>

  
   <div class="container">
   <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h4>Build with Sass</h4>
         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
         
       </div>
   
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <img src="img/sass.png" class="img-responsive">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h4>Build with Less</h4>
         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
       </div>
   
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
         <img src="img/less.png" class="img-responsive">
       </div>
   </div>
  <div>

  <div class="container">
   <div class="row">
     <h4><a href="#hidden" data-toggle="collapse">More about  about bootstrap</a></h4>
       <div id="hidden" class="collapse">
       
        <h4>here's the cool things about bootstrap</h4>
         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      </div>
    </div>
  </div>
   
      
</body>
</html>