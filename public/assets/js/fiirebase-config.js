
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAJqdmkRI8Q3FeVCkfGeqgmNxQ1435QlFU",
    authDomain: "edvote-50551.firebaseapp.com",
    databaseURL: "https://edvote-50551-default-rtdb.firebaseio.com",
    projectId: "edvote-50551",
    storageBucket: "edvote-50551.appspot.com",
    messagingSenderId: "583751787199",
    appId: "1:583751787199:web:4f59fa95a8383827475c0a",
    measurementId: "G-LE54GQ7ZFN"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);




function login(){
    var email = document.getElementById('email1').value;
    var password = document.getElementById('password1').value;
    
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
       console.log(error.code);
       console.log(error.message);
    });
}
