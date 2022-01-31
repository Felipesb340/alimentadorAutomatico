const firebaseConfig = {
  apiKey: "AIzaSyDSlqMVPtn4NNXYX2MWAHKj4Y-S9y-LTDk",
  authDomain: "fishmatic-16c25.firebaseapp.com",
  projectId: "fishmatic-16c25",
  storageBucket: "fishmatic-16c25.appspot.com",
  messagingSenderId: "500387787539",
  appId: "1:500387787539:web:4293be83b030371510a0e6",
  measurementId: "G-09EZF74EZ0"
};
firebase.initializeApp(firebaseConfig);
const db = firebase.firestore();

function createUser() {
  let newUserEmail = document.getElementById('newUserEmail').value;
  let newUserPassword = document.getElementById('newUserPassword').value;
  let res = document.getElementById('res');
  firebase.auth().createUserWithEmailAndPassword(newUserEmail, newUserPassword)
    .then((userCredential) => {
      // Signed in
      var user = userCredential.user;
      res.innerHTML = `<div class="alert alert-success mt-3" role="alert" >
                        Conta criada com sucesso
                        </div>`
      // ...
    })
    .catch((error) => {
      console.log(error);
      res.innerHTML = `<div class="alert alert-danger mt-3" role="alert ">
                        ${error}
                        </div>`
    });
}


firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {
    // Signed in
    var user = userCredential.user;
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
  });
