
<?php
session_start();
//  echo $_SESSION['login'];
 ?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">






    <title></title>
  </head>
  <body>


<div class="index_upper">


		<div class="container" >


        <ul class="upper_menu" >

		<li><div class="home_logo">
		<a href="http://localhost/Film_Sensei/index.php">
		<img id="logo" src="images/logo2.png" alt="logo" style="width:70%; border:2px solid #000   ">
		</a>
		</div></li>


		<li><div class="menu" style="margin-right:30px">
        <h6 id="menutext" style="color:white">MENU</h6>
		<div class="sub_menu">
		<ul>
		<li><div class="films" style="width:170px; height:60px;">
		<a href="http://localhost/Film_Sensei/allfilms.php">
		<h6 style="color:white;padding-top:20px">FILMS</h6>
		</a>
		</div></li>


		<li><div class="about_us" style="width:170px; height:60px">
		<a href="http://localhost/Film_Sensei/aboutus.php">
		<h6 style="color:white;padding-top:20px">ABOUT US</h6>
		</a>
		</div></li>

	    <li><div class="team" style="width:170px; height:60px">
		<a href="http://localhost/Film_Sensei/team.php">
		<h6 style="color:white;padding-top:20px">MEET THE TEAM</h6>
		</a>
		</div></li>


		<li><div class="contact_us_bar" style="width:170px; height:60px">
		<a href="http://localhost/Film_Sensei/contact.php">
		<h6 style="color:white;padding-top:20px">CONTACT US</h6>
		</a>
		</div></li>




		</ul> </div>


		</div></li>


		<li><div class="search_bar">
        <input type="text" placeholder="Search" name="search_movie" value="" class="form-control" />
		</div></li>


		<li><div class="contact_bar" style="margin-right:30px">
		<a href="http://localhost/Film_Sensei/contact.php">
		<h6 style="color:white">CONTACT US</h6>
		</a>
		</div></li>

    <?php if($_SESSION){ ?>
    <li><div class="sign_out">
		<a href="http://localhost/Film_Sensei/profile.php">
		<img src="https://img.icons8.com/bubbles/100/000000/user.png" style="border-readius:5px;width:50%">
		</a>
		</div></li>
  <?php }
  else{ ?>

		<li><div class="sign_in">
		<a href="http://localhost/Film_Sensei/signin.php">
		<h6 style="color:white">SIGN IN</h6>
		</a>
		</div></li>
  <?php } ?>

	</ul>


	</div>

	</div>


 



  </body>
</html>
