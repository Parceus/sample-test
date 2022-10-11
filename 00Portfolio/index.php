<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel = "shortcut icon" type="image/x-icon" href="assets/images/Browser_Icon.jpg" />
<!-- CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/carousel.css">
    <link rel="stylesheet" href="assets/style.css">
    
    
</head>
<body>
<?php
        include("header.php")
?>
<main role="main">
    <!-- Carousel -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide bg-dark" src="" alt="First slide">
            <div class="row container">
              <div class="first_slide carousel-caption text-left" >
              <div class="typewriter">
                <h1>JOHN PATRICK LINGAHAN</h1>
                <p class="fade-in-text webdd">Web Designer/Developer</p>
                <p class="fade-in-text quote" style="color:#5ddadb">"I'll thrive to the greatest extent of my capability."</p>
              </div>
              </div>
              <div class="fade-in my_image carousel-caption text-right" style="z-index: 1;">
              <img src="assets/images/Patrick.png" width="360px" alt="Portfolio_Logo">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide bg-dark" alt="Second slide">
            <div class="container">
              <div class="second_slide carousel-caption text-right">
                <h1 class="fade-in-text">Website Samples</h1>
                <p class="fade-in-text">This includes working website systems, <br> web designs, and mockups.</p>
                <a class="fade-in-text btn btn-lg shadow text-white" style="background: #4e9e95" href="#" role="button">Browse Gallery</a>
              </div>
            </div>
            <div class="fade-in my_image carousel-caption text-left" style="z-index: 1;">
              <img src="assets/images/Sample Websites/SecSlide_img.png" width="395px" alt="Portfolio_Logo">
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide bg-dark" alt="Third slide">
            <div class="container d-flex">
              <div class="carousel-caption rounded text-left" >
              <h1 class="fade-in-text">More Details</h1>
              <p class="webdd fade-in-text">Attached here is my updated Resume.</p>
              <a class="fade-in-text btn btn-lg shadow text-white" style="background: #4e9e95" target=”_blank” href="assets/Final_Resume.pdf" role="button">Attachment</a>
              </div>
            </div>
            <div class="my_gif carousel-caption text-right" style="z-index: 1;">
                <img src="assets/images/ThirdSlide_GIF.gif" width="395px" alt="Gif">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>Heading</h2>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
<hr>
  <h1 style="color: #4e9e95">Web Technologies</h1>
    <div class="row text-center">
      <div class="col-lg-6">
        <img src="assets/images/web_tech.png" width="90%" alt="web_tech">
      </div>
      <div class="col-lg-6">
        <img src="assets/images/prog_tech.png" width="90%" alt="web_tech">
      </div>
    </div>  
<hr>
  <div id="aboutme" class="row text-center">
      <div class="col-lg-6">
        <img src="assets/images/Patrick2.png" width="90%" alt="AboutMe_Picture">
      </div>
      <div class="col-lg-6 text-center">
        <h1 style="color: #4e9e95">About Me</h1>
        <br>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am John Patrick Magsino Lingahan, currently taking Bachelor of Science in Information Technology at Cavite State University - Carmona Campus. As my years in academic gradually coming to an end, and the real world industry almost approaching my life, most of my time is dedicated on Website Development, focusing on Front-End or the User Interface and willing to take over the Back-End Side.
        </p>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is not that easy to "code" as basic fundamentals of programming because it is only the beginning, academic will ensure the knowledge and skills, however, keep in mind that not only your professors must engage to provide you a lesson. It will always be on us. The hardships, dedication, and the willingness to learn. I was a self taught to some web technologies too with the help of my skillful programming community.
        </p>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like I always said, <strong>"I'll thrive to the greatest extent of my capability"</strong> and so do you.
        </p>
      </div>
    </div>  
</main>
<?php
        include("footer.php")
?>
<!-- Javascript -->
    <script src="assets/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap.min.js" ></script>
    <script src="assets/font-awesome.js" crossorigin="anonymous"></script>
</body>
</html>