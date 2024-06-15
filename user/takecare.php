<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>

    


    <title>How to take care</title> 
</head>
<body class="font-serif" id="home">
    <nav class="navbar navbar-expand-sm fixed top-0 items-center justify-between gap-4 text-white bg-[#b08f6f] z-50 pr-7">
        <div class="flex justify-center items-center">
            <img src="../picture/logo.png" class="ml-10" width="110px">
            <h1 class="text-5xl">Pet For All</h1>
        </div>
        <ul class="flex gap-5 mr-10 w-[larger]">
            <li><a href="../user/index.php" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Home</a></li>
            <li><a href="../user/index.php#adopt" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Adopt</a></li>
            <li><a href="../user/index.php#about" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">About us</a></li>
            <li><a href="../user/index.php#donation" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Donate</a></li>
            <li><a href="volunteer" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Volunteer</a></li>
            <li><a href="takecare" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">How to take care</a></li>
        </ul>
    </nav>

    <section class="flex flex-col  mt-8 " style="background-color: #F8F4E1;">
        <div class="mt-32 justify-center items-center flex  flex-row-reverse gap-40">
        <img src="../picture/care.png" alt="" class="w-[55vh]" style="filter: drop-shadow(1px 1px 40px #6C5F5B);">
        <div class="text-center">
        <h1 class="text-[50px]">Not Only People <br> Need A House
        </h1>
        <p class="text-[20px] indent-14">Find your fur-ever friend! Explore our adorable pets <br> waiting to bring love and joy into your home.</p>
    </div>
        </div>
    </section>


</div>
<section class="justify-center items-center flex flex-col">
<div class="flex justify-center my-24">
<h1 class="text-[60px]">Learn More About Your Pet</h1>
</div>

<div class="justify-center flex items-center gap-[20vh]">

    <div class="flex flex-col gap-10 w-[590px]">
    <img src="../picture/care1.jpg" alt="" class="w-[590px] h-[351px] rounded-md" style="filter: drop-shadow(1px 1px 10px black);">
    <h1 class="text-3xl">The Basic Necessities of Proper Pet Care</h1>
    <p>The Basic Necessities of Proper Pet Care outlines essential guidelines for pet owners, including nutrition, exercise, grooming, and veterinary care, to ensure the well-being and happiness of their pets.</p>
    <a href="care1.html" class="btn btn-outline">Continue Reading</a>
    </div>

    <div class="flex flex-col gap-10 w-[590px]">
        <img src="../picture/care2.jpg" alt="" class="w-[590px] h-[351px] rounded-md" style="filter: drop-shadow(1px 1px 10px black);">
        <h1 class="text-3xl">10 Everyday Helpful Pet Care Tips</h1>
        <p>10 Everyday Helpful Pet Care Tips provides concise and actionable advice for pet owners to enhance their daily care routines. These tips promote the health and well-being of pets, creating a happy and thriving environment.</p>
        <a href="care2.html" class="btn btn-outline">Continue Reading</a>
        </div>
</div>
</section>


<footer class="p-20">
    <div class="container flex  items-center  bg-[#cfb28a] rounded-md px-20 mt-28">
        
         <div class="flex flex-col py-20 gap-3">
            <h1 class="text-2xl">For Questions And Suggestions</h1>
            <div class="mt-3 flex flex-col gap-3">
              <a href="#home" style="color: black; text-decoration: none;"><i class="fa-brands fa-facebook"
                style="color: #3f3131;"></i>
              Furryshelter.email.com</a>

              <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-envelope"
                style="color: #3f3131;"></i>
              Furryshelter.email.com</a>
            </div>
        </div> 
        
        
        <div class="flex flex-col ml-72 gap-3">
            <h1 class="text-2xl">Visit Now</h1>
            <div class="mt-3 flex flex-col gap-3">
              <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-location-dot"
                style="color: #3f3131;"></i>
              General, St. Upper Lamac</a>

              <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-envelope"
                style="color: #3f3131;"></i>
              Furryshelter.email.com</a>




              </div>
        </div>
    </div>
</div>
</footer>






</body>
</html>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script>
    $(document).scroll(function () {
      $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(
        ".navbar").height())

    });
    </script>

    <style>
    .navbar {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    transition: 0.3s;
    font-family: var(--font_family) !important;
    font-size: 18px;
}

.navbar.scroll{
    padding: 5px;
    background-color: #b08f6f;

}
html::-webkit-scrollbar {
    width: 10px;
}
html::-webkit-scrollbar-track{
    background-color: #333;
}
html::-webkit-scrollbar-thumb{
    background:#AF8F6F;
}
    </style>
