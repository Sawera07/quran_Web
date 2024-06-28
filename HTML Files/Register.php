<?php
session_start(); // Start session at the beginning of your PHP script

// PHP script for handling form submissions and database operations

// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "quran_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
    $login_email = sanitize_input($_POST['login_email']);
    $login_password = sanitize_input($_POST['login_password']);

    // SQL query to check user credentials
    $sql = "SELECT * FROM register WHERE email='$login_email' AND password='$login_password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful
        $_SESSION['email'] = $login_email;
        header("Location: landing.php"); // Redirect to landing page
        exit();
    } else {
        // Authentication failed
        echo "<script>alert('Invalid email or password');</script>";
    }
}

// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_submit'])) {
    $register_email = sanitize_input($_POST['register_email']);
    $register_password = sanitize_input($_POST['register_password']);
    $register_phone = sanitize_input($_POST['register_phone']);

    // SQL query to insert new user into database
    $sql = "INSERT INTO register (email, password, phone) VALUES ('$register_email', '$register_password', '$register_phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful');</script>";
        // Redirect to landing page after successful registration
        header("Location: landing.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS Files/registerstyle.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<div class="main-header fixed-top" style="background-color: white;"> 
   <div class="head fs-5" >
     <div class="row">
       <div class="col-lg-2 col-md-6 col-12">  
          <i class="icon fa-solid fa-envelope"></i> 
            <span>alquran@gmail.com</span></div>
        <div class="col-lg-2 col-md-6">  
          <i class="icon fa-solid fa-location-dot"></i> 
            <span>Sahiwal  Pakistan</span></div>
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
                <li><a class="dropdown-item dropdown fs-5 fw-bold" href="#">FAQ's</a></li>
               
                
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
 <!-- section -->
<div class="carousel-inner">
        <div class="carousel-item active">
            <img alt="..." class="d-block w-100" height="700px" src="https://themazine.com/html/alquran/assets/images/background/page-title.jpg">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated bounceInRight" style="animation-delay: 1s">Login And Register</h5>
            <p class="animated bounceInLeft " style="animation-delay: 2s">Tailor your Quranic experience to your preferences with a registered account.</p>
          </div>
        </div>
      </div>
<!-- section -->

<div class="container">
    <h1 class="text-center p-5 m-3">Welcome To AlQuran Online! <br> Login NOW For an Amazing Quran Experience</h1>

    <!-- Login Section -->
    <div>
        <h3 class="ms-3">Login</h3>
    </div>

    <section class="login m-3">
        <form class="p-5" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <input type="email" class="form-control" id="validationDefault01" placeholder="Username or email address*" name="login_email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control my-4" id="validationDefault02" placeholder="Password*" name="login_password" required>
            </div>
            
            <div class="mb-3">
                <div class="form-check" style="font-size: 18px; font-weight: 700;">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" name="remember">
                    <label class="form-check-label" for="invalidCheck2">
                        Remember Me?
                    </label>
                </div>
            </div>
           
            <div>
                <button class="btn btn-success" type="submit" name="login_submit">Login</button>
            </div>
        </form>
    </section>

    <!-- Registration Section -->
    <div>
        <h3 class="ms-3">Register</h3>
    </div>

    <section class="login m-3">
        <form class="p-5" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <input type="email" class="form-control" id="validationDefault03" placeholder="Email address*" name="register_email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control my-4" id="validationDefault04" placeholder="Password*" name="register_password" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control my-4" id="validationDefault05" placeholder="Phone No" name="register_phone">
            </div>
            <div class="mb-3">
                <div class="form-check" style="font-size: 15px; font-weight: 700;">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        By Joining, you agree to the Terms and Privacy Policy
                    </label>
                </div>
            </div>
            <div>
                <button class="btn btn-success" type="submit" name="register_submit">Join</button>
            </div>
        </form>
    </section>
</div>

<!-- Footer -->
<div class="foot p-5">
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
    <!-- Section: Social media -->
  
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
            <p class="fs-5"><i class="fas fa-home  fs-4 me-3"></i>Sahiwal</p>
            <p class="fs-5">
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p class="fs-5"><i class="fas fa-phone fs-4  me-3"></i>123456</p>
            <pclass="fs-5"><i class="fas fa-print fs-4  me-3"></i> 1234569</p>
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

</body>
</html>
