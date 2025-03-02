<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/connect.php';
    $EmailId = $_POST["EmailId"];
    $Password = $_POST["Password"];
   
    $exists=false;
   
        $sql = "INSERT INTO `signintable` ( `id`, `EmailId`, `Password`) VALUES (Null, '$EmailId', '$Password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    
    else{
        $showError = "Retry Again";
    }
}
    
?>



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
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
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
        <a href="register.php">Register here!</a> </b>
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
      <b class="recover-password">Recover Password ?</b>
      
    </div>
    <div class="line-parent">
      <div class="frame-child"></div>
      <b class="or-continue-with">Or continue with</b>
      <div class="frame-child"></div>
    </div>
    <div class="sign-in1">Sign In</div>
    <form action="connect.php" method="post">
      <div class="credentials">
        <div class="enter-name">
          <div class="enter-name-child"></div>
          <div class="enter-email">
            <input type="email" id="emailid" placeholder="Enter Email" name="EmailId">
          </div>

        </div>
      </div>
      <div class="credentials1">
        <div class="enter-name">
          <div class="enter-name-child"></div>
          <div class="enter-password">
            <input type="password" id="password" placeholder="Enter Password" name="Password">
          </div>

        </div>
      </div>
      <div class="create-an-account">
     <label for="signinbutton"></label>
        <input type="submit" value="Sign In" id="signinbutton" name="SignIN">
      </div>
    </form>
    <div class="sign-up">
      <div class="search-1-parent">
        <img class="search-1-icon" alt="" src="./public/search-1@2x.png" />

        <div class="sign-up-with">Sign up with Google</div>
      </div>
      <div class="search-1-parent">
        <img class="search-1-icon" alt="" src="./public/facebook-1@2x.png" />

        <div class="sign-up-with1">Sign up with Facebook</div>
      </div>
    </div>
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