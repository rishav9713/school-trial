<?php  
$name=$_POST["name"];//receiving name field value in $name variable  
$password=$_POST["password"];//receiving password field value in $password variable  
  
echo "Welcome: $name, your password is: $password";  

firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {
    echo "Welcome: $name, your password is: $password";  
    // Signed in
    var user = userCredential.user;
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
  });

?>  
