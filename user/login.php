<?php
// session_start();
// $_SESSION['user_id'] = $user_id_from_database;
?>
<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
  <title>Login</title>
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

      const emailInput = document.getElementById('email');
      const passwordInput = document.getElementById('password');
      const signinButton = document.getElementById('signin');
      const togglePasswordButton = document.getElementById('togglePassword');
      const passwordIcon = document.getElementById('passwordIcon');
      const errorMessage = document.getElementById('error-message');

      function validateInputs() {
        if (emailInput.value.trim() && passwordInput.value.trim()) {
          signinButton.disabled = false;
          signinButton.classList.remove('bg-gray-500', 'cursor-not-allowed');
          signinButton.classList.add('bg-[#cfb28a]', 'hover:bg-[#F8F4E1]', 'cursor-pointer');
        } else {
          signinButton.disabled = true;
          signinButton.classList.remove('bg-[#cfb28a]', 'hover:bg-[#F8F4E1]', 'cursor-pointer');
          signinButton.classList.add('bg-gray-500', 'cursor-not-allowed');
        }
      }

      function togglePasswordVisibility() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        passwordIcon.classList.toggle('fa-eye');
        passwordIcon.classList.toggle('fa-eye-slash');
      }

      emailInput.addEventListener('input', validateInputs);
      passwordInput.addEventListener('input', validateInputs);
      togglePasswordButton.addEventListener('click', togglePasswordVisibility);

      signinButton.addEventListener('click', function(event) {
        event.preventDefault();
        fetch('check_user.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            username: emailInput.value,
            password: passwordInput.value
          })
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            window.location.href = data.redirect;
          } else {
            errorMessage.textContent = data.message;
          }
        })
        .catch(error => {
          errorMessage.textContent = 'An error occurred: ' + error.message;
        });
      });
    });
  </script>
</head>
<body class="font-serif bg-[#cfb28a]">
  <div class="login h-[100vh] flex flex-row justify-center items-center">
    <div class="bg-[#ccb087] h-[98vh] flex flex-col w-full justify-center items-center">
      <h1 class="text-4xl">Not Only People <br> Need A House</h1>
      <img src="../picture/login.png" alt="" width="500px" style="filter: drop-shadow(1px 1px 80px #3F2305) !important">
      <p>Find your purr-fect match – sign up now and give a furry friend their forever homes</p>
      <a href="signup" class="btn bg-[#E8ECF1] w-[150px] rounded-3xl mt-5" id="register">Sign up</a>
    </div>
    <div class="bg-[#E8ECF1] h-[100vh] w-full rounded-l-[9%]">
      <div class="mx-[15vh] mt-[28vh]">
        <h1 class="text-4xl"><b>Sign in</b></h1>
        <div class="mt-[3vh] gap-20">
          <p>User name or email address</p>
          <input type="text" id="email" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
          <p class="mt-4">Your password</p>
          <div class="relative">
            <input type="password" id="password" class="indent-4 w-full h-12 bg-[#E8ECF1] border-solid border-[1px] rounded-xl border-gray-700">
            <button id="togglePassword" class="absolute top-1/2 transform -translate-y-1/2 right-3 focus:outline-none">
              <i id="passwordIcon" class="fa-solid fa-eye fa-fade w-10" style="color: #af8f6f; font-size: larger;"></i>
            </button>
          </div>
        </div>
        <div class="flex flex-col mt-5">
          <button type="button" class="btn float-start w-[304px] rounded-full bg-gray-500 cursor-not-allowed" id="signin" disabled>S1ign in</button>
        </div>
        <div id="error-message" class="text-red-500 mt-2"></div>
      </div>
    </div>
  </div>
</body>
</html>
