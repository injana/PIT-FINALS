const { initializeApp } = require("firebase/app");
const { default: firebase } = require("firebase/compat/app");
const { get } = require("firebase/database");

const firebaseConfig = {
    apiKey: "AIzaSyBq1yD7JJJ4WOVLM9VCDDI28GbtYwCE1Uo",
    authDomain: "pet-for-all-web-pit.firebaseapp.com",
    databaseURL: "https://pet-for-all-web-pit-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "pet-for-all-web-pit",
    storageBucket: "pet-for-all-web-pit.appspot.com",
    messagingSenderId: "1056748290107",
    appId: "1:1056748290107:web:21c22a8c0dc029f79d9c1e"
  };
firebase.initializeApp(firebaseConfig);

document.getElementById('signin').addEventListener('click', submitForm); 

function submitForm(e) {
    e.preventDefault();

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    console.log(email, password);

    // Perform login/authentication with Firebase
    // Example: firebase.auth().signInWithEmailAndPassword(email, password)
}

