
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./signinglobal.css" />
  <link rel="stylesheet" href="./signin.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source Sans 3:wght@400;600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Metal Mania:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gilroy:wght@500&display=swap" />
</head>

<body>

  <div class="sign-in">
    <div class="sign-in-child"></div>
    <div class="nav-bar">
      <div class="home-parent">
        <div class="home" id="homeText">Home</div>
        <div class="about">About</div>
        <div class="about">Contact us</div>
      </div>
    </div>
    <div class="if-you-dont-container" id="ifYouDont">
      <span>if you don’t an account you can </span>
      <b class="register-here">
        <a href="register.html">Register here!</a> </b>
    </div>
    <div class="text"></div>
    <div class="sign-in-to-container">
      <p class="sign-in-to">Sign In to</p>
      <p class="access-exclusive-travel">
        access exclusive travel deals and<br>
        <span>personalized experiences.</span>
      </p>
    </div>
    <div class="tree">
      <div class="tree-icon">
        <img class="bg-icon" alt="bg-icon" src="./public/tree-icon.png.jpg" />
      </div>
      
    </div>
    
    <div class="sign-in1">Sign In</div>
    <form action="connect.php" method="post">
      <div class="credentials">
        <div class="enter-name">
          <div class="enter-name-child"></div>
          <div class="enter-email">
            <input type="email" id="emailid" placeholder="Enter Email" name="email">
          </div>

        </div>
      </div>
      <div class="credentials1">
        <div class="enter-name">
          <div class="enter-name-child"></div>
          <div class="enter-password">
            <input type="password" id="password" placeholder="Enter Password" name="password">
          </div>

        </div>
      </div>
      <div class="create-an-account">
     <label for="signinbutton"></label>
        <input type="submit" value="Sign In" id="signinbutton" name="SignIN">
      </div>
    </form>
    
    <div class="trippingcom">tripping.com</div>
  </div>

  <script>
    var homeText = document.getElementById("homeText");
    if (homeText) {
      homeText.addEventListener("click", function (e) {
        // Please sync "Desktop - 1" to the project
      });
    }

    var ifYouDont = document.getElementById("ifYouDont");
    if (ifYouDont) {
      ifYouDont.addEventListener("click", function (e) {
        // Please sync "Create account " to the project
      });
    }
  </script>
</body>

</html>