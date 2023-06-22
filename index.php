<?php

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username == "Joe" & $password == "Joe"){
    header("Location: newsfeed.html");
  }else{
    echo"
    <script>
    alert(`Wrong Username or Password! Please try again..`);
    </script>";
  }
}


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FB Lite Login | Clone</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="fbliteclonestyle.css">
    </head>
    <body>
      <div class="container">
          <form method="post">
            <div class="fb_title">
            <h4>Facebook</h4><hr>
            </div>
                <label for="email">Mobile number or email</label>
                <input type="text" name="username">
            
                <label for="password">Password</label>
                <input type="password" name="password">
            
                <button type="submit" name="submit" class="loginbtn">Login</button>
         
                <a href="#" class="fp">Forgot password?</a>
         
                <div class="or">or</div>

                <button type="submit" class="cnabtn">Create new account</button>

                <div class="lang">
                  <a href="#" class="mainlang">English (US)</a>
                  <a href="#">Filipino</a>
                  <a href="#">Bisaya</a>
                </div>

                <a href="#">More languages...</a>
          </form>
        </div>
    </body>
</html>

