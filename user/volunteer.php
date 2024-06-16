<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>


    <title>Volunteer</title>
</head> 
<body class="font-serif" id="home">
    <nav class="navbar navbar-expand-sm fixed top-0 items-center justify-between gap-4 text-white bg-[#b08f6f] z-50 pr-28">
        <div class="flex justify-center items-center">
            <img src="../picture/logo.png" class="ml-10 " width="110px">
            <h1 class="text-5xl">Pet For All</h1> 
        </div>
        <ul class="flex gap-5 mr-10">
            <li><a href="./" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Home</a></li>
            <li><a href="../user/index.php#adopt" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Adopt</a></li>
            <li><a href="../user/index.php#about" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">About us</a></li>
            <li><a href="../user/index.php#donation" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Donate</a></li>
            <li><a href="#home" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">Volunteer</a></li>
            <li><a href="takecare" class=" p-5 font-bold rounded-md hover:bg-[#74512D]">How to take care</a></li>
        </ul>
    </nav>
    <div id="volunteer" style="margin-top: 220px;">
        <div class="container flex justify-between items-center">
        <img src="../picture/vol.jpg" alt="" class="w-[650px] ml-10 rounded-2xl">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-[80px] ml-18">BE PART OF US</h1>
            <p class="ml-[10svh] mr-[10vh] text-[20px] text-center">As a volunteer, you will be assigned various responsibilities, such as dog walking, kennel cleaning, and assisting with outreach programs. Many of our volunteers manage full-time jobs and families, bringing a diverse range of skills and interests. You, too, can contribute in your unique way. Please read further to discover how you can become a part of the PAWS family.</p>
 

            <!-- Open the modal using ID.showModal() method -->
<button class="btn btn-outline mt-10" onclick="my_modal_1.showModal()">Apply Now</button>
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>



    <!-----------------------FORM------------------------------>
    <h3 class="font-bold text-lg m-5">Personal Information</h3>
    <label class="input input-bordered flex items-center gap-2 mt-2">
      Full Name:
      <input type="text" class="grow" placeholder="Bogart D. Batumbakal" />
    </label>
    <label class="input input-bordered flex items-center gap-2 mt-2">
      Email:
      <input type="email" class="grow" placeholder="example@gmail.com" />
    </label>
    <label class="input input-bordered flex items-center gap-2 mt-2">
      Birthdate:
      <input type="date" class="grow" />
    </label>
    <label class="input input-bordered flex items-center gap-2 mt-2">
      Address:
      <input type="text" class="grow"/>
    </label><label class="input input-bordered flex items-center gap-2 mt-2">
      Contact Number:
      <input type="number" class="grow"/>
    </label>
    



    <!-----------------------FORM------------------------------>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn bg-[#543310] btn-outline text-white">Submit</button>
      </form>
    </div>
  </div>
</dialog>
<!-----------  END OF MODAL ----------->

        </div>
         </div>
         </div>

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
