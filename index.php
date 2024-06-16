<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

  <title>PetForAll</title> 
</head>

<body>
  <nav class="navbar navbar-expand-sm fixed-top" style="font-family: 'font-serif';">
    <a href="#home" class="navbar-brand">
      <img src="picture/logo.png" alt="Logo" class="logo-img"> 
      Pet For All</a>
    <div>
      <ul class="navbar-nav">
        <li class="nav-item"><a href="#home" class="nav-link aboutclick">Home</a>
        </li>
        <li class="nav-item"><a href="#aboutpfa" class="nav-link">About Us</a>
        </li>
        <li class="nav-item"><a href="#adopt" class="nav-link">Adopt</a>
        </li>
        <li class="nav-item"><a href="#shelter" class="nav-link">Donate</a>
        </li>
        <li class="nav-item"><a href="#home" class="nav-link aboutclick">Volunteer</a>
        </li>
        <li class="nav-item"><a href="#home" class="nav-link aboutclick">How to take care</a>
        </li>

      </ul>
    </div>
  </nav>


  <!-- Header-->
  <section id="home">
    <div class="header">
      <div>
        <div class="img">

          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="picture/bg.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="picture/3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="picture/2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>


        </div>

        <div style="position:absolute; top: 100px;">

          <div class="bgtext">
            <h1 style="color: white; margin-top: 30vh; margin-left: 10vh;">Not Only People <br>Need a House</h1>
            <p style="color: white; margin-left: 10vh;">Find your fur-ever friend! Explore our adorable pets waiting to
              bring love and joy into your home. <br> Each of our pets is eagerly looking for a loving family to call
              their own. <br>Adopt today and make a difference in the life of a furry companion while adding endless
              happiness to yours.</p>
          </div>

          <a href="user/login.php" class="btn1 bg-[#543310]">
            Get Started
          </a>

        </div>


      </div>
    </div>
  </section>


  <section id="aboutpfa">
    <div class="about">
      <img src="picture/about.png" alt="about" class="abouts">
    </div>
    <div class="abtxt">
      <h1> About Pet For All</h1>
      <p>
        Furry House Shelter provides a safe haven for animals in need, <br> offering compassionate care and dedicated
        support until <br> they find their forever families. Our team is committed to ensuring <br>
        every pet receives the attention, medical care, and love they deserve,<br> making us a trusted destination for
        adoption.

      </p>

    </div>


  </section>







  <!-- Adoptation -->
  <section id="adopt">
    <h1 class="text-center my-5" style="font-family: var(--font_family);"> Our Friends Who Are Looking For A House</h1>
    <div class="adopt flex-column container rounded-5">
    <div class="adopt container justify-content-evenly rounded-5">
        <div class="dog1 w-25 text-center bg-white p-5 rounded-5">
            <div class="align-items-center flex-column">
              <img src="picture/about.png" width="250" class="">
              <h5 class="mt-3">Honey</h5>
              <a href="#home" class="btn aboutclick">Learn More</a>
            </div>
        </div>
        <div class="dog1 w-25 text-center bg-white p-5 rounded-5">
          <div class="align-items-center flex-column">
            <img src="picture/about.png" width="250" class="">
            <h5 class="mt-3">Honey</h5>
            <a href="#home" id="aboutclick" class="btn aboutclick">Learn More</a>
          </div>
      </div>
      <div class="dog1 w-25 text-center bg-white p-5 rounded-5">
        <div class="align-items-center flex-column">
          <img src="picture/about.png" width="250" class="">
          <h5 class="mt-3">Honey</h5>
          <a href="#home" id="aboutclick" class="btn aboutclick">Learn More</a>
        </div>
    </div>
  </div>
  <center>
    <a href="#home" id="aboutclick" class="btn w-25 aboutclick bg-white"> Get to know More</a>
  </center>
    </div>
  </section>



  <section class="" id="shelter">
    <h1 class="text-center mt-5" style="font-family: var(--font_family);">You Can Help Our Shelter</h3>
    <div class="shelter">
      <img src="picture/selter.png" alt="">
      <h1>Make A <br>Donation <br> Now</h1>
      <span>
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=hybbybyn&amp;size=200x200" alt="" title="" />
      </span>
    </div>
    <div class="shel-bot">
      <div class="shel1">
        <h3>For Questions And Suggestion</h3>
        <a href="#home" style="color: black; text-decoration: none;"><i class="fa-brands fa-facebook"
            style="color: #3f3131;"></i>
          Furryshelter.email.com</a>
        <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-envelope"
            style="color: #3f3131;"></i>
          Furryshelter.email.com</a>
      </div>
      <div class="shel1">
        <h3>Visit</h3>
        <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-location-dot"
            style="color: #3f3131;"></i>
          General, St. Upper Lamac</a>
        <a href="#home" style="color: black; text-decoration: none;"><svg width="24" height="24" viewBox="0 0 24 24"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M20 10.4167C20 15.8445 13.6 21.5 12 21.5C10.4 21.5 4 15.8445 4 10.4167C4 6.04441 7.58172 2.5 12 2.5C16.4183 2.5 20 6.04441 20 10.4167Z"
              stroke="#717171" stroke-width="1.5" />
            <circle cx="3" cy="3" r="3" transform="matrix(-1 0 0 1 15 7)" stroke="#717171" stroke-width="1.5" />
          </svg>
          General, St. Upper Lamac</a>
      </div>

    </div>
  </section>


  <!-- Script for JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    

  <script>
    $(document).scroll(function () {
      $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(
        ".navbar").height())

    });

    $(document).ready(function () {
      $('#seemore').click(function () {
        $('.seemoredw').addClass('display-block');
        $('.seemore').addClass('display-none');
      });
    });

    $(document).ready(function () {
      $(window).scroll(function () {
        var scrollPosition = $(window).scrollTop();
        var imagePosition = $('.abouts').offset().top;

        // Check if the image is in view
        if (scrollPosition + $(window).height() > imagePosition) {
          $('.abouts').addClass('animate');
        }
      });
    });

    $(document).ready(function () {
      $('.aboutclick').click(function () {
        $('.btn1').addClass('btn2');
      });
    });

  </script>
</body>

</html>
