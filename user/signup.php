<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
  <title>Sign Up</title>
  <style>
    /* CSS for fade-in transition */
    body {
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    } 
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.body.style.opacity = 1;
      document.querySelectorAll("a").forEach(function (anchor) {
        anchor.addEventListener("click", function (event) {
          event.preventDefault();
          document.body.style.opacity = 0;
          setTimeout(function () {
            window.location.href = anchor.href;
          }, 500);
        });
      });
    });

    function submitForm() {
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm_password').value;
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const address = document.getElementById('address').value;
      const phoneNumber = document.getElementById('phone_number').value;

      const errorMessage = document.getElementById('error-message');
      const successMessage = document.getElementById('success-message');

      errorMessage.textContent = '';
      successMessage.textContent = '';

      if (!username || !password || !confirmPassword || !name || !email || !address || !phoneNumber) {
        errorMessage.textContent = 'All fields are required.';
        return;
      }

      if (password !== confirmPassword) {
        errorMessage.textContent = 'Passwords do not match.';
        return;
      }

      fetch('insert_user.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          username,
          password,
          name,
          email,
          address,
          phone_number: phoneNumber
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          successMessage.textContent = 'User successfully registered.';
        } else {
          errorMessage.textContent = 'Error registering user: ' + data.message;
        }
      })
      .catch(error => {
        errorMessage.textContent = 'An error occurred: ' + error.message;
      });
    }
  </script>
</head>
<body class="font-serif bg-[#cfb28a]">
  <div class="flex flex-row h-[100vh]" id="container">
    <!-- Sign Up Form -->
    <div class="bg-[#E8ECF1] w-1/2 flex flex-col justify-center items-center rounded-r-[10%]">
      <div class="w-4/5">
        <h1 class="text-4xl"><b>Sign up</b></h1>
        <div class="mt-5 gap-12">
          <p>Username</p>
          <input type="text" name="username" id="username" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
          <p class="mt-4">Your password</p>
          <div class="relative">
            <input type="password" name="password" id="password" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
            <button id="togglePassword" class="absolute top-1/2 transform -translate-y-1/2 right-3 focus:outline-none">
              <i id="passwordIcon" class="fa-solid fa-eye-slash fa-fade w-10" style="color: #af8f6f; font-size: larger;"></i>
            </button>
          </div>
          <p class="mt-4">Confirm password</p>
          <div class="relative">
            <input type="password" name="confirm_password" id="confirm_password" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
            <button id="toggleConfirmPassword" class="absolute top-1/2 transform -translate-y-1/2 right-3 focus:outline-none">
              <i id="confirmPasswordIcon" class="fa-solid fa-eye-slash fa-fade w-10" style="color: #af8f6f; font-size: larger;"></i>
            </button>
          </div>
          <p class="mt-4">Name</p>
          <input type="text" name="name" id="name" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
          <p class="mt-4">Email Address</p>
          <input type="text" name="email" id="email" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
          <p class="mt-4">Address</p>
          <input type="text" name="address" id="address" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
          <p class="mt-4">Phone Number</p>
          <input type="text" name="phone_number" id="phone_number" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
          <button onclick="submitForm()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-xl">Submit</button>
          <div id="error-message" class="text-red-500 mt-2"></div>
          <div id="success-message" class="text-green-500 mt-2"></div>
        </div>
      </div>
    </div>
    <!-- Promotional Panel -->
    <div class="bg-[#cfb28a] w-1/2 flex flex-col justify-center items-center text-center">
      <h1 class="text-4xl">Not Only People <br> Need A House</h1>
      <img src="../picture/login.png" alt="" width="500px" style="filter: drop-shadow(1px 1px 80px #3F2305) !important">
      <p class="mt-5">Discover your purr-fect companion – sign in now and give a furry friend their forever home</p>
      <a href="login" class="btn  bg-[#E8ECF1] w-[150px] rounded-3xl mt-5">Sign in</a>
    </div>
  </div>
</body>
</html>
