<?php
      include 'config.php';?>
	  
<?php

 
    	$tm_id=1 ;
		$profile_image="";
		$name="";	
		$para="";	
		$mail="";	
		$fbname="";	
		$fblink="";		
		$instaname="";		
		$instalink="";				


        $query=mysqli_query($con,"select * from team where t_id=$tm_id ");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
       $profile_image=$row['profile_image'];
	   $name=$row['name'];
	   $para=$row['para'];
	   $mail=$row['mail'];
	   $fbname=$row['fbname'];
	   $fblink=$row['fblink'];
	   $instaname=$row['instaname'];
	   $instalink=$row['instalink'];
		

    }   else {
     
    }

  



 ?>  

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
     <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/teamstyle.css" rel="stylesheet">
	
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	 
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  	

    <title>Meet The Team</title>
  </head>
  <body>
  
  <?php include "menubar.php"?>
  
  
<div class="contact-area">
  <div class="contact">
    <main>
      <section>
        <div class="content">
          <img src=<?php echo $profile_image; ?> alt="Profile Image">

          <aside>
            <h1 style="font-weight:bold"><?php echo $name; ?></h1>
            <p><?php echo $para; ?></p>
          </aside>
          
          <button id="firstbutton">
            <span>Contact Me</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M14.83 30.83L24 21.66l9.17 9.17L36 28 24 16 12 28z"></path> </g> </svg>
          </button>
        </div>

        <div class="firsttitle"><p>Contact Me</p></div>
      </section>

      
    </main>

    <nav id="firstnav">
      <a href="#" class="gmail">
        <div class="icon">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M16 3v10c0 .567-.433 1-1 1h-1V4.925L8 9.233 2 4.925V14H1c-.567 0-1-.433-1-1V3c0-.283.108-.533.287-.712C.467 2.107.718 2 1 2h.333L8 6.833 14.667 2H15c.283 0 .533.108.713.288.179.179.287.429.287.712z" fill-rule="evenodd"/></svg>
        </div>

        <div class="content">
          <h1>Email</h1>
          <span><?php echo $mail; ?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href=<?php echo $fblink; ?> class="facebook">
        <div class="icon">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg>
        </div>

        <div class="content">
          <h1>Facebook</h1>
          <span><?php echo $fbname; ?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href=<?php echo $instalink; ?> class="twitter">
        <div class="icon">
		<img src="images/insta.png" style="width:100%" >
         </div>

        <div class="content">
          <h1>Instagram</h1>
          <span><?php echo $instaname; ?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>
    </nav>
  </div>
  
  
  
  <?php

 
    	$tm_id=2 ;
		


        $query=mysqli_query($con,"select * from team where t_id=$tm_id ");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
       $profile_image=$row['profile_image'];
	   $name=$row['name'];
	   $para=$row['para'];
	   $mail=$row['mail'];
	   $fbname=$row['fbname'];
	   $fblink=$row['fblink'];
	   $instaname=$row['instaname'];
	   $instalink=$row['instalink'];
		

    }   else {
     
    }



 ?>  
  
  
  
  
  
  
  
    <div class="contactt">
    <main>
      <section>
        <div class="content">
          <img src=<?php echo $profile_image; ?> alt="Profile Image">

          <aside>
            <h1 style="font-weight:bold"><?php echo $name; ?></h1>
            <p><?php echo $para; ?></p>
          </aside>
          
          <button id="secondbutton">
            <span>Contact Me</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M14.83 30.83L24 21.66l9.17 9.17L36 28 24 16 12 28z"></path> </g> </svg>
          </button>
        </div>

        <div class="secondtitle"><p>Contact Me</p></div>
      </section>

      
    </main>

    <nav id="secondnav">
      <a href="#" class="gmail">
        <div class="icon">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M16 3v10c0 .567-.433 1-1 1h-1V4.925L8 9.233 2 4.925V14H1c-.567 0-1-.433-1-1V3c0-.283.108-.533.287-.712C.467 2.107.718 2 1 2h.333L8 6.833 14.667 2H15c.283 0 .533.108.713.288.179.179.287.429.287.712z" fill-rule="evenodd"/></svg>
        </div>

        <div class="content">
          <h1>Email</h1>
          <span><?php echo $mail; ?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href=<?php echo $fblink; ?>class="facebook">
        <div class="icon">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg>
        </div>

        <div class="content">
          <h1>Facebook</h1>
          <span><?php echo $fbname; ?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href=<?php echo $instalink; ?> class="twitter">
        <div class="icon">
		<img src="images/insta.png" style="width:100%" >
          </div>

        <div class="content">
          <h1>Instagram</h1>
          <span><?php echo $instaname; ?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>
    </nav>
  </div>
  
  
  
  
  
  
  
  
  
  
  
</div>
  
    <?php include "footer.php"?>
  
    <script  type="text/javascript" src="js/script.js"></script> 

  <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>