<?php 
session_start();
if(!isset($_SESSION['user_id'])){
header('location: ../logout');
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
  <title>Pet For All</title>
  <style>
    .navbar {
      padding: 5px;
      display: flex;
      justify-content: space-between;
      transition: 0.3s;
      font-size: 18px;
      z-index: 50;
    }
    .navbar.scroll {
      padding: 5px;
      background-color: #b08f6f;
    }
    html::-webkit-scrollbar {
      width: 10px;
    }
    html::-webkit-scrollbar-track {
      background-color: #333;
    }
    html::-webkit-scrollbar-thumb {
      background: #AF8F6F;
    }
    .transition-max-height {
      transition: max-height 0.5s ease-in-out;
    }
    .max-h-0 {
      max-height: 0;
    }
    .max-h-full {
      max-height: 1000px;
    }
    .custom-card {
      height: 500px;
    }
    .custom-img {
      height: 250px;
      object-fit: cover;
      margin-top: 120px;
    }
    #extra-section {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-in-out;
    }
    #extra-section.max-h-full {
      max-height: 500px;
    }
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="font-serif" id="home">
  <nav class="navbar navbar-expand-sm fixed top-0 items-center justify-between gap-4 text-white bg-[#b08f6f] z-50 p-[10px]">
    <div class="flex justify-center items-center">
      <img src="../picture/logo.png" class="ml-10" width="110px">
      <h1 class="text-5xl">Pet For All</h1>
    </div>
    <ul class="flex flex-row gap-2 mr-10 w-[larger]">
      <li><a href="#home" class="p-3 font-bold rounded-md hover:bg-[#74512D]">Home</a></li>
      <li><a href="#adopt" class="p-3 font-bold rounded-md hover:bg-[#74512D]">Adopt</a></li>
      <li><a href="#about" class="p-3 font-bold rounded-md hover:bg-[#74512D]">About us</a></li>
      <li><a href="#donation" class="p-3 font-bold rounded-md hover:bg-[#74512D]">Donate</a></li>
      <li><a href="volunteer" class="p-3 font-bold rounded-md hover:bg-[#74512D]">Volunteer</a></li>
      <li><a href="takecare" class="p-3 font-bold rounded-md hover:bg-[#74512D]">How to take care</a></li>
      <div class="dropdown dropdown-hover">
        <div tabindex="0" role="button" class="btn m-1 bg-transparent border-none text-white hover:bg-[#74512D]">
          <i class="fa-solid fa-bars"></i>
        </div>
        <ul tabindex="0" class="dropdown-content border z-[1] menu p-2 bg-base-100 rounded-box w-52 right-1 font-bold bg-[#b08f6f]">
          <li><a href="#" class="hover:bg-[#74512D]" onclick="openInbox()">Inbox</a></li>
          <li><a href="../logout" class="hover:bg-[#74512D]">Log out</a></li>
        </ul>
      </div>
    </ul>
  </nav>

  <section id="home" class="relative h-screen items-center justify-center">
    <img src="../picture/login.png" alt="Dog" class="absolute inset-0 w-1/2 h-auto" style="margin-left: 600px; margin-top: 185px;">
    <div class="relative z-10 text-gray-800 pt-80 ml-[120px]">
      <h1 class="text-5xl font-bold mb-4">Not Only People<br> Need A House</h1>
      <p class="text-xl mb-8">Find your fur-ever friend! Explore our<br> adorable pets waiting to bring love<br> and joy into your home.</p>
    </div>
  </section>

  <section class="p-20" id="adopt">
    <div id="adopt" class="py-10 bg-[#b08f6f] rounded-2xl">
      <h1 class="text-center my-5 font-serif text-[45px] text-white"><b>Our Friends Who Are Looking For A House</b></h1>
      <div class="flex flex-wrap justify-center">
        <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
          <div class="flex flex-col items-center gap-2">
            <img src="../picture/pet1.png" class="custom-img">
            <h5 class="font-bold text-xl">Bogart</h5>
            <button class="btn mt-auto" onclick="openModal('Bogart')">Learn More</button>
          </div>
        </div>
        <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
          <div class="flex flex-col items-center gap-2">
            <img src="../picture/pet2.png" class="custom-img">
            <h5 class="font-bold text-xl">Zyrk</h5>
            <button class="btn mt-auto" onclick="openModal('Zyrk')">Learn More</button>
          </div>
        </div>
        <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
          <div class="flex flex-col items-center gap-2">
            <img src="../picture/pet3.png" class="custom-img">
            <h5 class="font-bold text-xl">Honey</h5>
            <button class="btn mt-auto" onclick="openModal('Honey')">Learn More</button>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
          <div class="flex flex-col items-center gap-2">
            <img src="../picture/pet4.png" class="custom-img">
            <h5 class="font-bold text-xl">Casque</h5>
            <button class="btn mt-auto" onclick="openModal('Casque')">Learn More</button>
          </div>
        </div>
        <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
          <div class="flex flex-col items-center gap-2">
            <img src="../picture/pet5.png" class="custom-img">
            <h5 class="font-bold text-xl">Jeffqt</h5>
            <button class="btn mt-auto" onclick="openModal('Jeffqt')">Learn More</button>
          </div>
        </div>
        <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
          <div class="flex flex-col items-center gap-2">
            <img src="../picture/pet6.png" class="custom-img">
            <h5 class="font-bold text-xl">Freeza</h5>
            <button class="btn mt-auto" onclick="openModal('Freeza')">Learn More</button>
          </div>
        </div>
      </div>
      <div id="extra-section" class="max-h-0 overflow-hidden transition-max-height">
        <div class="flex flex-wrap justify-center">
          <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
            <div class="flex flex-col items-center gap-2">
              <img src="../picture/pet7.png" class="custom-img mt-[88px]">
              <h5 class="font-bold text-xl mt-4">Kevin</h5>
              <button class="btn mt-auto" onclick="openModal('Kevin')">Learn More</button>
            </div>
          </div>
          <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
            <div class="flex flex-col items-center gap-2">
              <img src="../picture/pet8.png" class="custom-img mt-[88px]">
              <h5 class="font-bold text-xl mt-4">Chihuahua</h5>
              <button class="btn mt-auto" onclick="openModal('Chihuahua')">Learn More</button>
            </div>
          </div>
          <div class="w-1/4 text-center bg-white p-5 rounded-md mx-2 my-4 custom-card">
            <div class="flex flex-col items-center gap-2">
              <img src="../picture/pet9.png" class="custom-img mt-[88px]">
              <h5 class="font-bold text-xl mt-4">Mouse</h5>
              <button class="btn mt-auto" onclick="openModal('Mouse')">Learn More</button>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-5">
        <button id="see-more" class="btn w-1/4 bg-white btn-outline text-[18px]" onclick="toggleExtraSection()">See More</button>
      </div>
    </div>
  </section>

  <dialog id="my_modal_1" class="bg-white rounded-lg p-6 shadow-lg">
    <div class="flex font-serif">
      <img id="modalImage" src="" alt="" class="w-[220px] object-cover rounded mr-6 mt-7">
      <div>
        <h2 id="modalTitle" class="text-[45px] font-bold mb-4"></h2>
        <div id="modalContent" class="text-black"></div>
        <button class="adopt-button bg-green-500 text-white py-2 px-4 rounded mt-[15vh]" onclick="adoptPet()">Adopt</button>
      </div>
    </div>
  </dialog>

  <section class="p-20 relative" id="about">
    <h1 class="text-left ml-24 text-5xl font-bold">About Pet For All</h1>
    <div class="about flex flex-col mt-10 justify-center items-center gap-10 lg:flex-row-reverse">
      <div>
        <img src="../picture/about.png" alt="about" class="w-[85vh] mb[50vh]" style="filter: drop-shadow(1px 1px 20px black);">
      </div>
      <div class="flex flex-col">
        <p class="text-lg text-wrap w-[70vh]">
          At Pet For All, your satisfaction is our top priority. We are constantly striving to improve our products and
          services to better meet the needs of you and your beloved pets. Your feedback is essential in helping us
          achieve this goal. We would love to hear about your experiences, suggestions, and any concerns you may have.
          Whether it’s a product you adore, a service that exceeded your expectations, or an area where we can improve,
          your input is invaluable. Please take a moment to share your thoughts with us. Together, we can continue to
          provide the best for our furry friends and their families. Thank you for helping us make Pet For All the best
          it can be!
        </p>
      </div>
    </div>
  </section>

  <section id="donation" class="">
    <h1 class="text-center mt-20 text-[10vh]">You Can Help Our Shelter</h1>
    <div class="flex justify-center items-center gap-12 border border-gray-400 outline outline-1 outline-gray-400 outline-offset-10 mx-10 mt-10">
      <img src="../picture/selter.png" alt="">
      <h1 class="text-center text-[40px]">Make A <br>Donation <br> Now</h1>
      <span>
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=hybbybyn&amp;size=200x200" alt="" title="" />
      </span>
    </div>
  </section>

  <footer class="p-20">
    <div class="container flex items-center bg-[#cfb28a] rounded-md px-20 mt-10">
      <div class="flex flex-col py-20 gap-3">
        <h1 class="text-2xl">For Questions And Suggestions</h1>
        <div class="mt-3 flex flex-col gap-3">
          <a href="#home" style="color: black; text-decoration: none;"><i class="fa-brands fa-facebook" style="color: #3f3131;"></i> Furryshelter.email.com</a>
          <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-envelope" style="color: #3f3131;"></i> Furryshelter.email.com</a>
        </div>
      </div>
      <div class="flex flex-col ml-72 gap-3">
        <h1 class="text-2xl">Visit Now</h1>
        <div class="mt-3 flex flex-col gap-3">
          <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-location-dot" style="color: #3f3131;"></i> General, St. Upper Lamac</a>
          <a href="#home" style="color: black; text-decoration: none;"><i class="fa-solid fa-envelope" style="color: #3f3131;"></i> Furryshelter.email.com</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    const petImages = {
      'Bogart': '../picture/pet1.png',
      'Zyrk': '../picture/pet2.png',
      'Honey': '../picture/pet3.png',
      'Casque': '../picture/pet4.png',
      'Jeffqt': '../picture/pet5.png',
      'Freeza': '../picture/pet6.png',
      'Kevin': '../picture/pet7.png',
      'Chihuahua': '../picture/pet8.png',
      'Mouse': '../picture/pet9.png'
    };

    const petDetails = {
      'Bogart': {
        breed: 'Border Collie',
        age: '3 years',
        gender: 'Male',
        weight: '45 lbs',
        color: 'Black with white markings',
        personality: 'Bogart is energetic, intelligent, and friendly. He loves to play fetch and is great with kids. Bogart is very loyal and enjoys being active outdoors.'
      },
      'Zyrk': {
        breed: 'Dachshund',
        age: '4 years',
        gender: 'Male',
        weight: '20 lbs',
        color: 'Black and tan',
        personality: 'Zyrk is playful and curious. He loves to make people laugh and is very affectionate, enjoying snuggling up on the couch.'
      },
      'Honey': {
        breed: 'Domestic Shorthair',
        age: '2 years',
        gender: 'Female',
        weight: '8 lbs',
        color: 'Calico (white, orange, and gray)',
        personality: 'Honey is sweet and gentle. She loves to be petted and is very friendly with other pets. Honey enjoys lounging in sunny spots and is very easy-going.'
      },
      'Casque': {
        breed: 'Shiba Inu',
        age: '1 year',
        gender: 'Female',
        weight: '8 lbs',
        color: 'Cream',
        personality: 'Casque is independent and alert. She is very intelligent and enjoys exploring her surroundings. Casque can be a bit stubborn but is very loyal to her family.'
      },
      'Jeffqt': {
        breed: 'Domestic Shorthair',
        age: '6 months',
        gender: 'Male',
        weight: '6 lbs',
        color: 'Orange tabby with white',
        personality: 'Jeffqt is playful and mischievous. He is always on the move, playing with toys and exploring every corner. Jeffqt is very curious and loves to interact with people.'
      },
      'Freeza': {
        breed: 'Sphynx',
        age: '3 years',
        gender: 'Male',
        weight: '10 lbs',
        color: 'Hairless with a pinkish hue',
        personality: 'Freeza is affectionate and social. He loves to be around people and is very friendly. Freeza enjoys being the center of attention and is very playful.'
      },
      'Kevin': {
        breed: 'Chihuahua',
        age: '5 years',
        gender: 'Male',
        weight: '6 lbs',
        color: 'Tan and White',
        personality: 'Kevin is bold and confident. He may be small, but he has a big personality. Kevin is very loyal and protective of his family. He enjoys cuddling and is very affectionate.'
      },
      'Chihuahua': {
        breed: 'Domestic Shorthair',
        age: '4 years',
        gender: 'Male',
        weight: '15 lbs',
        color: 'Tan and White',
        personality: 'Chihuahua is calm and friendly. He is very laid-back and loves to relax. Chihuahua is great with kids and other pets. He enjoys being petted and is very gentle.'
      },
      'Mouse': {
        breed: 'Domestic Shorthair',
        age: '1 year',
        gender: 'Female',
        weight: '7 lbs',
        color: 'Orange tabby',
        personality: 'Mouse is energetic and playful. She is full of energy and loves to chase after toys. Mouse is very curious and enjoys exploring. She is also very affectionate and loves attention.'
      }
    };

    function closeDescription() {
      const modal = document.getElementById('my_modal_1');
      modal.close();
    }

    function openModal(petName) {
      const modal = document.getElementById('my_modal_1');
      const modalTitle = document.getElementById('modalTitle');
      const modalContent = document.getElementById('modalContent');
      const modalImage = document.getElementById('modalImage');

      modalTitle.textContent = petName;
      modalContent.innerHTML = generatePetDetails(petName);
      modalImage.src = petImages[petName];
      modalImage.alt = petName;

      modal.showModal();
    }

    function generatePetDetails(petName) {
      const details = petDetails[petName];
      return `
        <p><strong>Breed:</strong> ${details.breed}</p>
        <p><strong>Age:</strong> ${details.age}</p>
        <p><strong>Gender:</strong> ${details.gender}</p>
        <p><strong>Weight:</strong> ${details.weight}</p>
        <p><strong>Color:</strong> ${details.color}</p>
        <p><strong>Personality:</strong> ${details.personality}</p>
      `;
    }

    function adoptPet() {
      const petName = document.getElementById('modalTitle').textContent;
      const pet = petDetails[petName];
      const petImage = document.getElementById('modalImage').src;

      // Fetch the image as a blob
      fetch(petImage)
        .then(response => response.blob())
        .then(blob => {
          const reader = new FileReader();
          reader.readAsDataURL(blob);
          reader.onloadend = () => {
            const base64data = reader.result.split(',')[1];

            fetch('insert_pet_info.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({
                pet_name: petName,
                breed: pet.breed,
                gender: pet.gender,
                weight: pet.weight,
                age: pet.age,
                color: pet.color,
                personality: pet.personality,
                pet_picture: base64data
              })
            })
              .then(response => response.json())
              .then(data => {
                if (data.success) {
                  fetch('insert_adopt.php', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                      pname: petName,
                      pet_id: data.pet_id,
                      status: 'pending'
                    })
                  })
                    .then(response => response.json())
                    .then(adoptData => {
                      if (adoptData.success) {
                        alert('Pet adoption request submitted successfully!');
                        closeDescription();
                      } else {
                        alert('Error submitting adoption request: ' + adoptData.message);
                      }
                    });
                } else {
                  alert('Error inserting pet information: ' + data.message);
                }
              });
          };
        });
    }

    document.addEventListener('click', function (event) {
      const modal = document.getElementById('my_modal_1');
      const rect = modal.getBoundingClientRect();
      if (modal.open &&
        (event.clientX < rect.left || event.clientX > rect.right ||
          event.clientY < rect.top || event.clientY > rect.bottom)) {
        modal.close();
      }
    });

    function toggleExtraSection() {
      const extraSection = document.getElementById('extra-section');
      const seeMoreButton = document.getElementById('see-more');
      if (extraSection.classList.contains('max-h-0')) {
        extraSection.classList.remove('max-h-0');
        extraSection.classList.add('max-h-full');
        seeMoreButton.innerText = 'See Less';
      } else {
        extraSection.classList.remove('max-h-full');
        extraSection.classList.add('max-h-0');
        seeMoreButton.innerText = 'See More';
      }
    }

    $(document).scroll(function () {
      $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height())
    });

    function openInbox() {
      fetchNotifications();
      document.getElementById('inboxModal').showModal();
    }

    function fetchNotifications() {
      const user_id = 1; // Replace with the actual user ID
      fetch(`get_notifications.php?user_id=${user_id}`)
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            displayNotifications(data.notifications);
          } else {
            document.getElementById('notifications').innerHTML = '<p>No notifications found.</p>';
          }
        })
        .catch(error => {
          document.getElementById('notifications').innerHTML = `<p>Error fetching notifications: ${error.message}</p>`;
        });
    }

    function displayNotifications(notifications) {
      const container = document.getElementById('notifications');
      container.innerHTML = '';

      notifications.forEach(notification => {
        const notificationCard = document.createElement('div');
        notificationCard.classList.add('bg-gray-100', 'rounded-lg', 'p-4', 'mb-4');
        notificationCard.innerHTML = `<p>${notification.message}</p>`;
        container.appendChild(notificationCard);
      });
    }
  </script>
</body>

<!-- Inbox Modal -->
<dialog id="inboxModal" class="bg-white rounded-lg p-6 shadow-lg w-1/2">
  <h2 class="text-2xl font-bold mb-4">Inbox</h2>
  <div id="notifications" class="flex flex-col gap-4">
    <!-- Notifications will be displayed here -->
  </div>
  <button class="mt-4 bg-red-500 text-white py-2 px-4 rounded" onclick="document.getElementById('inboxModal').close()">Close</button>
</dialog>
</html>
