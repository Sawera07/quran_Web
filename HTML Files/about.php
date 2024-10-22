<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS Files/aboutstyle.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
    body{
        background-position: center;
    background-image: url("https://themazine.com/html/alquran/assets/images/icons/featured.png");
    }
.btn-login{
    background-color: white;
    font-size: 14px;
    width: 150px;
    
    color: green;
    padding: 20px;
    border-radius: 50px;
    text-decoration: none;
    transition: 0.3s background-color;
    margin-left: 5px;
    margin-right: 5px;
    font-size: 18px;
    font-weight: bold
    }
    .btn-login:hover{
        background-color:green;
        color: white;
        font-weight: bold;
    }
    
    .navbar-toggler{
      border: none;
      font-size: 1.25rem;
    }
    .navbar-toggler:focus,btn-close:focus{
        box-shadow: none;
        outline: none;
    }
    .nav-link{
        color: rgba(0, 0, 0, 0.692);
        font-weight: 500;
        font-size: 24px;
      
    }
    .nav-link:hover, .nav-link.active{
        color: black;
    }
     .nav-link::before,.dropdown-item::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background-color: white;
        visibility: hidden;
        transform: translateX(-50%);
        transition: width 0.3s ease-in-out;
    }
    
     .nav-link:hover::before,.dropdown-item:hover::before {
        width: 100%;
        visibility: visible;}
</style>
</head>
<body>
    <div class="main-header " style="background-color: white;"> 

       
         <nav class="navbar navbar-expand-lg p-4 " style="background-color:  rgb(103, 69, 27);" >
            <div class="container-fluid">
               <img class="navbar-brand me-auto" src="https://themazine.com/html/alquran/assets/images/footer-logo.svg" alt="" srcset="">
                 
                 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                   <div class="offcanvas-header">
                     <img src="https://themazine.com/html/alquran/assets/images/logo.svg" class="offcanvas-title" id="offcanvasNavbarLabel">
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                   </div>
                   <div class="offcanvas-body">
                     <ul class="navbar-nav justify-content-center  flex-grow-1 pe-3 ">
                       <li class="nav-item dropdown">
                         <a class=" text-white nav-link mx-lg-2 active " aria-current="page" href="landing.php">Home</a>
                       </li>
                       <li class="nav-item dropdown">
                         <a class=" text-white nav-link mx-lg-2" href="surahs.php">Surahs</a>
                       </li>
                       <li class="nav-item dropdown">
                        <a class=" text-white nav-link mx-lg-2" href="audio.php">Recitation
                        </a>
                      </li>

                       <li class="nav-item dropdown">
                         <a class=" text-white nav-link mx-lg-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                         <ul class="dropdown-menu p-4">
                           <li><a class="  dropdown-item dropdown fs-5 fw-bold" href="#">Register</a></li>
                           <li><a class="  dropdown-item dropdown fs-5 fw-bold" href="#">Prayer time</a></li>
                        
                          
                           
                         </ul>
                       </li>
                       <li class="nav-item dropdown">
                        <a class=" text-white nav-link mx-lg-2" href="AllahsName.php">Recitation
                        </a>
                      </li>
                       <li class="nav-item dropdown">
                           <a class=" text-white nav-link mx-lg-2" href="about.php">Abouts us</a>
                         </li>
                        
                         <li class="nav-item dropdown">
                           <a class=" text-white nav-link mx-lg-2" href="contact.php">Contact</a>
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
     </div>>

    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
          <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
              <img class="img-fluid w-100" style="border-radius: 50px;"   loading="lazy" src="../Images/aboutimg.jpeg" alt="">
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
              <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                    <h2 class="h1 mb-3 fw-bold">Who Are We?</h2>
                    <p class="lead fs-4  mb-3">We aim to facilitate the reading and understanding of the Holy Quran, providing a platform for listening to its recitations and exploring its teachings.</p>
                    <p class="mb-5">Our mission is to make the profound wisdom and guidance of the Quran accessible to all. Through our app, users can delve into the verses of the Quran, reflecting on its timeless message and finding solace in its words.</p>
                    <div class="row gy-4 gy-md-0 gx-xxl-5X">
                        <div class="col-12 col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3">Quranic Excellence</h4>
                                    <p class="text-secondary mb-0">We are committed to delivering a seamless digital experience that enhances Quranic exploration and understanding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3">Spiritual Innovation</h4>
                                    <p class="text-secondary mb-0">We strive to innovate spiritual experiences by blending traditional wisdom with modern technology.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Quran wisdom -->
        
    <section class="image wisdom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-6 image-container">
                        <img style="border-radius: 70px;" class="w-100" src="../Images/quranabout.jpeg">
                    </div>
                    <div class="col-12 col-md-12 col-lg">
                        <div class="align-left">
                            <h1 class="d_title mb-4 display-2">
                                <strong>Discover Quranic Wisdom</strong>
                            </h1>
                            <p class="section-text mb-3 display-7">Embark on a journey of enlightenment and knowledge as you delve into the profound teachings of the Quran.</p>
                  <p class="section-text mb-3 display-7">Immerse yourself in a world of spiritual growth and understanding with our vast collection of Quranic audios and resources.</p>
                  <p class="section-text mb-3 display-7">Join us in exploring the beauty and depth of the Quran, where every verse holds a treasure waiting to be discovered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video  -->
<section>>
        <iframe class="mbr-embedded-video my-4"
        src="https://www.youtube.com/embed/DB-xMMKQWl8?autoplay=1&amp;loop=1&amp;playlist=DB-xMMKQWl8&amp;t=20&amp;playsinline=1&amp;controls=0&amp;showinfo=0&amp;autohide=1&amp;allowfullscreen=true&amp;mode=transparent"
        id="video-5-u7zSWpbwt3"
        width="100%" height="620" frameborder="0" allowfullscreen ></iframe>
</section> 
<div style="overflow-x: hidden;">
 <div class="quest row justify-content-center " >
    <div class="col-12 col-md-12 col-lg-10 ">
        <h4 class="text-center m-5">Quran Quest</h4>
        <div class="card mb-3">
  <div class="question-block" data-question="question1">How can I access Quran audios?</div></div>
  <div class="card mb-3">
  <div class="question-block" data-question="question2">Are there interactive tools available?</div></div>

<div class="card mb-3"><div class="question-block" data-question="question3">Can I read the entire Quran on the website?</div></div>
<div class="card mb-3"><div class="question-block" data-question="question4">Is the website responsive for all devices?</div></div>

<div class="card mb-3"><div class="question-block" data-question="question5">How can I enhance my Quranic learning?</div></div>


</div>
</div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="modalTitle"></h2>
      <p id="modalAnswer"></p>
    </div>
  </div>
</div>
  <section>
    <div class="reviews">
      <div class="row justify-content-center">
        <div class="text-center  col-12 col-md-6 col-lg-4"> 
          <h5 class="card-title ">
          <strong>100K+</strong>
        </h5>
        <p class="card-text  mb-3 ">Happy Learners
        </p> </div>
        <div class="text-center  col-12 col-md-6 col-lg-4"> <h5 class="card-title  ">
          <strong>500+</strong>
        </h5>
        <p class="card-text  mb-3 ">
          Quranic Audios Available
        </p>   </div>
        <div class="text-center  col-12 col-md-6 col-lg-4">  <h5 class="card-title  ">
          <strong>24/7</strong>
        </h5>
        <p class="card-text  mb-3">
          Access to the Whole Quran
        </p>             </div>

      </div>
    </div>
  </section>
  <div class="foot p-5 mt-5">
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


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".question-block").click(function(){
      var questionId = $(this).data('question');
      var question = getQuestion(questionId);
      $("#modalTitle").text(question.title);
      $("#modalAnswer").text(question.answer);
      $("#myModal").css("display", "block");
    });
    
    $(".close").click(function(){
      $("#myModal").css("display", "none");
    });
  });
  
  // Function to get question and answer
  function getQuestion(questionId) {
    var questions = {
      "question1": {
        "title": "How can I access Quran audios?",
        "answer": "You can easily access a wide range of Quranic audios through our user-friendly platform."
      },
      "question2": {
        "title": "Are there interactive tools available?",
        "answer": "Yes, engage with interactive tools and quizzes to deepen your understanding of the Quran."
      },
      "question3": {
        "title": "Can I read the entire Quran on the website?",
        "answer": "Absolutely! The complete Quran is available for you to read and explore at your convenience."
      },
      "question4": {
        "title": "Is the website responsive for all devices?",
        "answer": "Yes, our website is fully responsive, ensuring a seamless experience across all devices."
      },
      "question5": {
        "title": "How can I enhance my Quranic learning?",
        "answer": "Explore our innovative resources and empower yourself to connect with the teachings of the Quran."
      }
      // Add more questions here
    };
    
    return questions[questionId];
  }
  </script>
  

</body>
</html>