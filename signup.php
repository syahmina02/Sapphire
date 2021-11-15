<!-- <?php 
require_once('config.php');
?> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up Sapphire</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
  </head>
  <body>
  <div>
    <?php
    if(isset($_POST['submit'])){
      $userName    = $_POST['userName'];
      $password = $_POST['password'];
      $email    = $_POST['email'];
      $phoneNumber    = $_POST['phoneNumber'];
      
      $sql = "INSERT INTO users (userName, password, email, phoneNumber) VALUES (?, ?, ?, ?)";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([$userName, $password, $email, $phoneNumber]);
      if ($result) {
        echo 'User Registered';
      }else{
        echo 'There are errors while saving the data';
      }
      
    }
    ?>

  </div>

  <div>
    <form class="form" action="signup.php" method="post">
      <div class="container">

        

      
          <div class="header">
          <h1>Sign Up</h1>
          </div>
          <hr class="mb-3">

          <label for="userName"><b>Username</b></label>
          <input class="form-control" type="text" name="userName" required>

          <label for="password"><b>Password</b></label>
          <input class="form-control" type="password" name="password" id="passwordInput" required>
          <input type="checkbox" onclick="myFunction()">Show Password

          <script>
            function myFunction() {
              var x = document.getElementById("passwordInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
                }
            }
          </script>

          <label for="email"><b>Email Address</b></label>
          <input class="form-control" type="email" name="email" required>

          <label for="phoneNumber"><b>Phone Number</b></label>
          <input class="form-control" type="number" name="phoneNumber" required>

          <hr class="mb-3">
          <input class="btn btn-primary" type="submit" name="submit" value="Register">
          

        
      </div>
    </form>

  </div>

  </body>
</html>
