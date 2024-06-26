<?php 
session_start();
if(!isset($_SESSION['admin_id'])){
header('location: ../logout');
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="retro">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Pet For All</title> 
</head>

<body class="relative bg-yellow-50 overflow-hidden max-h-screen">
  <header class="fixed right-0 top-0 left-60 bg-yellow-50 py-3 px-4 h-16">
    <div class="max-w-4xl mx-auto">
      <div class="flex items-center justify-between">
        <div>
          <button type="button"
            class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
            <span
              class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
              </svg>
            </span>
            <span class="text-sm">Archive</span>
          </button>
        </div>
        <div class="text-lg font-bold">Admin Panel</div>
        <div>
          <button type="button"
            class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
            <span class="text-sm">This week</span>
            <span
              class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </span>
          </button>
        </div>
      </div>
    </div>
  </header>

  <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
      <div class="flex-grow">
        <div class="px-4 py-6 text-center border-b">
          <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">PET FOR ALL</h1>
        </div>
        <div class="p-4">
          <ul class="space-y-1">
            <li>
              <button onclick="showTab('tab1')"
                class="flex items-center hover:bg-yellow-50 rounded-xl font-bold text-sm text-yellow-900 bg-yellow-200 py-3 px-4 gap-4 w-full"
                id="route1">
                <i class="fa-solid fa-gauge"></i>Dashboard
              </button>
            </li>
            <li>
              <button onclick="showTab('tab2')"
                class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4 gap-4 w-full"
                id="route2">
                <i class="fa-solid fa-dog"></i>All pets
              </button>
            </li>
            <li>
              <button onclick="showTab('tab3')"
                class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4 gap-4 w-full"
                id="route3">
                <i class="fa-solid fa-igloo"></i>Adoption
              </button>
            </li>
            <li>
              <button onclick="showTab('tab4')"
                class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4 gap-4 w-full"
                id="route4">
                <i class="fa-solid fa-chalkboard"></i>Learnings
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="p-4">
        <button type="button"
          class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class=""
            viewBox="0 0 16 16">
            <path
              d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
          </svg>
        </button> <a href="../logout" class="font-bold text-sm ml-2">Logout</a>
      </div>
    </div>
  </aside>

  <main class="hide ml-60 pt-16 max-h-screen overflow-auto hidden" id="tab1">
    <div class="px-6 py-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl p-8 mb-5">
          <h1 class="text-3xl font-bold mb-10">Pets for All is a comprehensive guide to selecting, caring for, and
            enjoying a variety of pets, tailored to fit different lifestyles and preferences.</h1>
          <div class="flex items-center justify-between">
            <div class="flex items-stretch">
              <div class="text-gray-400 text-xs">Members<br>connected</div>
              <div class="h-100 border-l mx-4"></div>
              <div class="flex flex-nowrap -space-x-3">
                <div class="h-9 w-9">
                  <img class="object-cover w-full h-full rounded-full"
                    src="https://ui-avatars.com/api/?background=random">
                </div>
                <div class="h-9 w-9">
                  <img class="object-cover w-full h-full rounded-full"
                    src="https://ui-avatars.com/api/?background=random">
                </div>
              </div>
            </div>
            <div class="flex items-center gap-x-2">
              <button type="button"
                class="inline-flex items-center justify-center h-9 px-3 rounded-xl border hover:border-gray-400 text-gray-800 hover:text-gray-900 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                  class="bi bi-chat-fill" viewBox="0 0 16 16">
                  <path
                    d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                </svg>
              </button>
              <button type="button"
                class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                Open
              </button>
            </div>
          </div>

          <hr class="my-10">

          <div class="grid grid-cols-2 gap-x-20">
            <div>
              <h2 class="text-2xl font-bold mb-4">Status</h2>
              <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                  <div class="p-4 bg-green-100 rounded-xl">
                    <div class="font-bold text-xl text-gray-800 leading-none">Adoption Area</div>
                    <div class="mt-5">
                      <button type="button"
                        class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                        Quick Access
                      </button>
                    </div>
                  </div>
                </div>
                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <div class="font-bold text-2xl leading-none">20</div>
                  <div class="mt-2">Total Users</div>
                </div>
                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <div class="font-bold text-2xl leading-none">23</div>
                  <div class="mt-2">Total Pets</div>
                </div>
                <div class="col-span-2">
                  <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                    <div class="font-bold text-xl leading-none">Total Adoptions</div>
                    <div class="mt-2">685</div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h2 class="text-2xl font-bold mb-4">Admin Panel</h2>
              <div class="space-y-4">
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                  <div class="flex justify-between">
                    <div class="text-gray-400 text-xs">Mommy Elsie</div>
                    <div class="text-gray-400 text-xs">4h</div>
                  </div>
                  <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Blog and social
                    posts</a>
                  <div class="text-sm text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                      class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                      <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>Adapted
                  </div>
                </div>
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                  <div class="flex justify-between">
                    <div class="text-gray-400 text-xs">Grace Aroma</div>
                    <div class="text-gray-400 text-xs">7d</div>
                  </div>
                  <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Stray Dogs</a>
                  <div class="text-sm text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                      class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                      <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>Switzu
                  </div>
                </div>
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                  <div class="flex justify-between">
                    <div class="text-gray-400 text-xs">Pet App</div>
                    <div class="text-gray-400 text-xs">2h</div>
                  </div>
                  <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Show tracking PET
                    for ALL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <main class="hide ml-60 pt-16 max-h-screen overflow-auto hidden" id="tab2">
    <div class="px-6 py-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl mb-5">
          <h1 class="text-3xl font-bold mb-10">All Pets</h1>
          <div class="p-4" id="pending-pets-container"></div>
        </div>
      </div>
    </div>
  </main>

  <div id="message-container" class="fixed top-5 right-5 p-4 border-l-4 hidden">
    <p id="message" class="text-sm"></p>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      showTab('tab1');
    });

    function fetchPendingPets() {
      fetch('get_pending_pets.php')
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            displayPendingPets(data.pets);
          } else {
            displayMessage('Error fetching pending pets: ' + data.message, 'error');
          }
        })
        .catch(error => {
          displayMessage('Error fetching pending pets: ' + error.message, 'error');
        });
    }

    function displayPendingPets(pets) {
      const container = document.getElementById('pending-pets-container');
      container.innerHTML = '';

      if (pets.length === 0) {
        container.innerHTML = '<p>No pending pets found.</p>';
        return;
      }

      pets.forEach(pet => {
        const petCard = document.createElement('div');
        petCard.classList.add('bg-gray-100', 'rounded-lg', 'p-4', 'mb-4');
        petCard.innerHTML = `
          <h2 class="text-2xl font-bold mb-2">${pet.pet_name}</h2>
          <p><strong>Breed:</strong> ${pet.breed}</p>
          <p><strong>Age:</strong> ${pet.age}</p>
          <p><strong>Gender:</strong> ${pet.gender}</p>
          <p><strong>Weight:</strong> ${pet.weight}</p>
          <p><strong>Color:</strong> ${pet.color}</p>
          <p><strong>Personality:</strong> ${pet.personality}</p>
          <p><strong>Status:</strong> ${pet.status}</p>
          <img src="data:image/jpeg;base64,${pet.pet_pic}" alt="${pet.pet_name}" class="w-32 h-32 object-cover rounded mt-4">
          <div class="flex justify-around mt-4">
            <button class="bg-green-500 text-white px-4 py-2 rounded" onclick="updateRequestStatus(${pet.adopt_id}, 'approved')">Approve</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded" onclick="updateRequestStatus(${pet.adopt_id}, 'declined')">Decline</button>
          </div>
        `;
        container.appendChild(petCard);
      });
    }

    function updateRequestStatus(adopt_id, status) {
      fetch('update_request_status.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ adopt_id: adopt_id, status: status })
      })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            displayMessage(data.message, 'success');
            fetchPendingPets(); // Refresh the list of pending pets
          } else {
            displayMessage(data.message, 'error');
          }
        })
        .catch(error => {
          displayMessage('Error updating request status: ' + error.message, 'error');
        });
    }

    function displayMessage(message, type) {
      const messageContainer = document.getElementById('message-container');
      const messageText = document.getElementById('message');

      messageText.textContent = message;
      messageContainer.className = `fixed top-5 right-5 p-4 border-l-4 ${type === 'success' ? 'bg-green-100 border-green-500 text-green-700' : 'bg-red-100 border-red-500 text-red-700'}`;
      messageContainer.style.display = 'block';

      setTimeout(() => {
        messageContainer.style.display = 'none';
      }, 3000);
    }

    function showTab(tabId) {
      // Hide all tab content
      const tabContents = document.querySelectorAll('.hide');
      tabContents.forEach(tabContent => {
        tabContent.classList.add('hidden');
      });

      // Show the selected tab content
      const selectedTabContent = document.getElementById(tabId);
      selectedTabContent.classList.remove('hidden');

      // Fetch pending pets data if "All Pets" tab is selected
      if (tabId === 'tab2') {
        fetchPendingPets();
      }
    }

    const routes = document.querySelectorAll('#route1, #route2, #route3, #route4');

    routes.forEach(route => {
      route.addEventListener('click', function () {
        // Remove the class from all routes
        routes.forEach(r => r.classList.remove('bg-yellow-200'));

        // Add the class to the clicked route
        this.classList.add('bg-yellow-200');
      });
    });

  </script>
</body>

</html>
