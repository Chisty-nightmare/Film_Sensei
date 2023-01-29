<?php

include 'config.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

  <?php include "menubar.php"?>


	<div class="container-contact100">
		<div class="wrap-contact100">

		<div class="contact100-more flex-col-c-m">

				<h1 style="color:white;font-weight:bold">Don't Have an Account?</h1>


					<a href="http://localhost/Film_Sensei/signup.php">

					 	<h4 style="color:red;font-weight:bold">Sign Up</h4>

					</a>





			</div>

			<form action="signin.php" method="POST"class="contact100-form validate-form">
				<span class="contact100-form-title">
					Log In
				</span>




				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input name="email" id="email" class="input100" type="text"  placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Enter your password *</label>
				<div class="wrap-input100 validate-input" data-validate="Message is required">
					<input name="pass" id="password" class="input100" type="password" ></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn" >
					<button class="contact100-form-btn" name="signin">
						Log In
					</button>
				</div>
			</form>

      <?php
      if(isset($_POST['signin']))
      {
        $email=(string)$_POST['email'];
        $pass=(string)$_POST['pass'];
        $pass=md5($pass);
        $birthday="";
        $gender="";
        $phone="";
        $name="";
        $login=false;


        $query=mysqli_query($con,"select * from users where email='$email' AND pass='$pass'");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $_SESSION["email"] = $row['email'];
        $_SESSION["pass"] = $row['pass'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["birthday"] = $row['birthdate'];
        $_SESSION["gender"] = $row['gender'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["login"] = true;

    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Email or Password!");';
        echo 'window.location.href = "signin.php" ';
        echo '</script>';
    }
    }
    if(isset($_SESSION["email"])){
      echo '<script type = "text/javascript">';
      echo 'window.location.href = "index.php" ';
      echo '</script>';
    }



       ?>


		</div>
	</div>


<?php include "footer.php"?>

	<div id="dropDownSelect1"></div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>
	 
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
</body>

</html>