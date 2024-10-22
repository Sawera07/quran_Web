<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS Files/landingstyle.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
  <div class="main-header fixed-top" style="background-color: white;"> 
    <div class="head " >
      <div class="row">
       <div class="col-lg-2 col-md-6 col-12">  
    <i class="icon fa-solid fa-envelope"></i> 
    <span>alquran@gmail.com</span></div>
    <div class="col-lg-2 col-md-6">  
    <i class="icon fa-solid fa-location-dot"></i> 
    <span> Pakistan</span></div>
    <div class="col-lg-2 "></div>
    <div class="col-lg-2 col-md-6"><i class="icon fa-regular fa-sun fa-fw"></i>
      <span>Sunrise At 5:15 AM</span></div>
    <div class="col-lg-2 col-md-6"> <i class="icon fa-solid fa-moon fa-fw"></i> 
      <span>Sunset 6:20 PM</span></div>
    <div class="col-lg-2 col-md-6"><i class="icon fa-solid fa-phone fa-fw"></i> 
      <span>Let's talk 044-234069</span></div>
      
    </div>
    </div>
  
       <nav class="navbar navbar-expand-lg p-4" >
          <div class="container-fluid">
          <img class="navbar-brand me-auto" src="https://themazine.com/html/alquran/assets/images/logo.svg" alt="" srcset="">
            
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <img src="https://themazine.com/html/alquran/assets/images/logo.svg" class="offcanvas-title" id="offcanvasNavbarLabel">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center  flex-grow-1 pe-3 ">
                  <li class="nav-item dropdown">
                    <a class="nav-link mx-lg-2 active " aria-current="page" href="../HTML Files/landing.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link mx-lg-2" href="../HTML Files/surahlist.php">Surahs</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link mx-lg-2" href="../HTML Files/audio.php">Recitation</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link mx-lg-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu p-4">
                      <li><a class="dropdown-item dropdown fs-5 fw-bold" href="../HTML Files/Register.php">Register</a></li>
                      <li><a class="dropdown-item dropdown fs-5 fw-bold" href="../HTML Files/Azan.php">Prayer time</a></li>
                     
                      
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link mx-lg-2" href="../HTML Files/AllahsName.php">Asma ul Husna</a>
                    </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link mx-lg-2" href="../HTML Files/about.php">Abouts us</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                      <a class="nav-link mx-lg-2" href="../HTML Files/contact.php">Contact</a>
                    </li>
                </ul>
               
              </div>
            </div>
            <a href="Register.php">
            <button type=" button" class=" btn-login btn btn-success p-2 fs-5" >Login</button> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </nav>
       </div>

    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img alt="..." class="d-block w-100" src="https://themazine.com/html/alquran/assets/images/main-slider/1.jpg">

          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated bounceInRight" style="animation-delay: 1s">Explore the Holy Quran</h5>
            <p class="animated bounceInLeft " style="animation-delay: 2s">Delve into the timeless wisdom and guidance of the Quran. Discover its profound teachings and enrich your soul with its divine message.</p>
            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Let's Start</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="..." class="d-block w-100"  src="https://themazine.com/html/alquran/assets/images/main-slider/3.jpg">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated bounceInRight" style="animation-delay: 1s">Listen to Quranic Recitations</h5>
            <p class="animated bounceInLeft " style="animation-delay: 2s">Experience the mesmerizing beauty of Quranic recitations. Immerse yourself in the soothing melodies and elevate your spirituality.</p>
            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Let's Start</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="..." class="d-block w-100"  src="https://themazine.com/html/alquran/assets/images/main-slider/2.jpg">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated bounceInRight" style="animation-delay: 1s">Read and Reflect</h5>
            <p class="animated bounceInLeft " style="animation-delay: 2s">Engage in contemplation as you read the sacred verses of the Quran. Let its words inspire you, guide you, and illuminate your path.</p>
            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Let's Start</a></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   <!-- section -->
   <section class="section1 p-5 mx-5 animated slideInDown" style="animation-delay: 500ms">
  <div class="block row">
<div class="block1 col-lg-4 col-md-6 col-sm-12">
  
  <div class="row mt-1" >
  <i class="icon1 icon fa-light fas fa-book-open text-dark col-6 animated flipInY " style="animation-iteration-count: infinite;animation-duration: 5s;"></i>
  <span class="fw-normal fs-5 col-6 mt-2">Learn and Read <br>Quick Quran</span></div>
</div>
<div class="block1 col-lg-4 col-md-6 col-sm-12">
  <div class="row mt-1" >
    <i class="icon1 icon fa-light fas fas fa-mosque text-dark text-center col-6 animated flipInY " style="animation-iteration-count: infinite;animation-duration: 5s;" ></i>
    <span class="fw-normal fs-5 col-6 mt-2">Illuminate your <br> soul with  Quran</span></div>
  </div>

<div class="block1 col-lg-4 col-md-6 col-sm-12">
  <div class="row mt-1" >
    <i class="icon1 icon fa-light fas fa-kaaba text-dark col-6 animated flipInY " style="animation-iteration-count: infinite;animation-duration: 5s;"></i>
    <span class="fw-normal fs-5 col-6 mt-2">Quran is light for <br>dark times</span></div>
  </div>
</div>

   </section>
 
<section class="video04 vid" id="video-6-u7zSWp6wW6">
  <div class="container">
    <div class="mbr-section-head mb-5">
      <h4 class="mbr-section-title mbr-fonts-style mb-0 mt-0 display-2">
        <strong>Dive into Quranic Wisdom</strong>
      </h4>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 video-block">
        <div class="video-wrapper">
          <iframe class="mbr-embedded-video"
            src="https://www.youtube.com/embed/0nvnS_YoUnM?autoplay&#x3D;1&amp;loop&#x3D;1&amp;playlist&#x3D;0nvnS_YoUnM&amp;t&#x3D;20&amp;mute&#x3D;1&amp;playsinline&#x3D;1&amp;controls&#x3D;0&amp;showinfo&#x3D;0&amp;autohide&#x3D;1&amp;allowfullscreen&#x3D;true&amp;mode&#x3D;transparent"
            width="1280" height="620" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
   <!-- Footer -->
<div class="foot p-5 mt-5" >
  <footer class="text-center text-lg-start bg-body-tertiary text-light ">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block fs-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div class="fs-5">
          <a href="" class="me-4 text-reset ">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
   
    
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fs-2 fw-bold mb-4">
                  <img class="navbar-brand me-auto" src="https://themazine.com/html/alquran/assets/images/footer-logo.svg" alt="" srcset="">
              </h6>
              <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4 fs-3">
               Links
              </h6>
              <p class="fs-5">
                <a href="#!" class="text-reset">About us</a>
              </p>
              <p class="fs-5">
                <a href="#!" class="text-reset">Scholors</a>
              </p>
              <p class="fs-5">
                <a href="#!" class="text-reset">Latest News</a>
              </p>
              <p class="fs-5">
                <a href="#!" class="text-reset">Contact</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4 fs-3">
               Other links
              </h6>
              <p class="fs-5">
                <a href="#!" class="text-reset">Audio Listening</a>
              </p>
              <pclass="fs-5">
                <a href="#!" class="text-reset">Juzz</a>
              </p>
              <p class="fs-5">
                <a href="#!" class="text-reset">Surah's</a>
              </p>
              <p class="fs-5">
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4 fs-3">Contact</h6>
              <p class="fs-5"><i class="fas fa-home  fs-4 me-3"></i> New York, NY 10012, US</p>
              <p class="fs-5">
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p class="fs-5"><i class="fas fa-phone fs-4  me-3"></i> + 01 234 567 88</p>
              <pclass="fs-5"><i class="fas fa-print fs-4  me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">AlQuran</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>
    <!-- Footer -->
</body>
</html>