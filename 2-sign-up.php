<?php

//sign up

//redirect to landind page.php

session_start();
//check if the form is submitted
if ($_SERVER["REQUEST_METHOD"]=="POST" &&isset($_POST["signupButton"])){

//sign up logic

//Assuming sign up is successful st a session variable

$_SESSION["sign up"] = true;

//Redirect to landing page.php

header("location: landingpage.php");
exit();
}

?>





<!Doctype html>

<html>
  <head>
    <style>
      .placeholders-inpu{
        text-align:center;
      }

    </style>

  </head>
  <body>
    <form class="placehoders-input" style="text-align:center;padding-top:180px; background-color:blue;margin-left:200px;margin-right:200px;margin-top:80px;padding-bottom:30px;parding-top:30px;" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input  type="margin-bottom:10px;"class="put first name" style="text" placeholder="first name"><br></br>
      <input type="text" placeholder="last name"><br></br>
      <input type="text" placeholder="Email"><br></br>
      <input type="text" placeholder="password"><br></br>
      <p>dont have an account?</p>
      <input type="submit" name="signupButton" value="sign up">
    </form>
  </body>
</html>

  
