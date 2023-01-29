<?php include 'config.php';?>

<?php

 
        $movie_name="";
		$banner_link="";
		$poster_link="";
		$m_id=1;
	

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];
		$banner_link=$row['banner_link'];
		$poster_link=$row['poster_link'];
	

    }   else {
     
    }



 ?>  
 
 
 <?php
 $r_id=1;
 $anss1;
$avg= "select avg(rating) as avs from rate where m_id=$r_id ";

  $anss=mysqli_query($con, $avg);
  if($anss){
  $row  = mysqli_fetch_array($anss);
  $anss1=$row['avs'];
}
else $anss1=0;


 ?>
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 


<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
     <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
	 <link href="css/bannerslider.css" rel="stylesheet">
	 
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	 
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	 
	 
    <title>Film Sensei</title>
  </head>
  <body>
  
   
	<?php include "menubar.php"?>

	
	

  
  
  <div class="banner">
  <div class="container">
    <h3>New Movies</h3>
   <div class="slider">
  
      <div class="slides">
      
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
       
      
        <div class="slide first">
         <a href="http://localhost/Film_Sensei/movieone.php"> <img src=<?php echo $banner_link; ?> alt=""></a>
        </div>
		
		<?php
   
		$m_id=2;

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        
		$banner_link=$row['banner_link'];
		

    }   else {
     
    }

 ?> 
		
		
		
		
		
		
        <div class="slide">
          <a href="http://localhost/Film_Sensei/movietwo.php"><img src=<?php echo $banner_link; ?> alt=""></a>
        </div>
		
		
	<?php
   
		$m_id=3;

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        
		$banner_link=$row['banner_link'];
		

    }   else {
     
    }

 ?> 
					
        <div class="slide">
         <a href="http://localhost/Film_Sensei/moviethree.php"> <img src=<?php echo $banner_link; ?> alt=""></a>
        </div>
      
       
      </div>
     
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        
      </div>
     
    </div>
	 </div>
	 </div>
    

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 5000);
    </script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
<div class="index_first_part">	


<div class="container">

 <h3>All Movies</h3>

 <div class="carousel owl-carousel">




<?php

 
        $movie_name="";	
		$poster_link="";
		$m_id=1;
	

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];	
		$poster_link=$row['poster_link'];
	

    }   else {
     
    }



 ?>  










<div class="first">
<a href="http://localhost/Film_Sensei/movieone.php">
<div class="card">

  <div class="card-image">
  <img src=<?php echo $poster_link; ?> style="height:350px;border-radius:10px;border-radius: 10px;">
  </div>
  <div class="card-text">
     
    <h4 style="font-size:20px; font-weight:750;"><?php echo $movie_name; ?></h4>

	
  </div>
  <div class="card-stats">
    <div class="stat">
	
      <h2 style="font-weight:bold;">⭐<?php echo number_format($anss1 , 2); ?></h2>
    </div>
   
  </div>

</div>
  </a>
 </div>




<?php

 
        $movie_name="";	
		$poster_link="";
		$m_id=2;
	

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];	
		$poster_link=$row['poster_link'];
	

    }   else {
     
    }



 ?>  

 <?php
 $r_id=2;
 $anss1;
$avg= "select avg(rating) as avs from rate where m_id=$r_id ";

  $anss=mysqli_query($con, $avg);
  if($anss){
  $row  = mysqli_fetch_array($anss);
  $anss1=$row['avs'];
}
else $anss1=0;


 ?>



<div class="second">
<a href="http://localhost/Film_Sensei/movietwo.php">
<div class="card">

  <div class="card-image">
    <img src=<?php echo $poster_link; ?> style="height:350px;border-radius:10px;border-radius: 10px;"></div>
  <div class="card-text">
     
    <h4 style="font-size:20px; font-weight:750;"><?php echo $movie_name; ?></h4>
  
	
  </div>
  <div class="card-stats">
    <div class="stat">
	
      <h2 style="font-weight:bold;">⭐<?php echo number_format($anss1 , 2); ?></h2>
    </div>
   
  </div>
</div>
</a>
</div>


<?php

 
        $movie_name="";	
		$poster_link="";
		$m_id=3;
	

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];	
		$poster_link=$row['poster_link'];
	

    }   else {
     
    }



 ?>  



 <?php
 $r_id=3;
 $anss1;
$avg= "select avg(rating) as avs from rate where m_id=$r_id ";

  $anss=mysqli_query($con, $avg);
  if($anss){
  $row  = mysqli_fetch_array($anss);
  $anss1=$row['avs'];
}
else $anss1=0;


 ?>



<div class="third">
<a href="http://localhost/Film_Sensei/moviethree.php">
<div class="card">

  <div class="card-image">
  <img src=<?php echo $poster_link; ?> style="height:350px;border-radius:10px;border-radius: 10px;"></div> 
  <div class="card-text">
     
    <h4 style="font-size:20px; font-weight:750;"><?php echo $movie_name; ?></h4>
   
	
  </div>
  <div class="card-stats">
    <div class="stat">
	
      <h2 style="font-weight:bold;">⭐<?php echo number_format($anss1 , 2); ?></h2>
    </div>
   
  </div>
</div>
</a>
</div>




<?php

 
        $movie_name="";	
		$poster_link="";
		$m_id=4;
	

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];	
		$poster_link=$row['poster_link'];
	

    }   else {
     
    }



 ?>



 <?php
 $r_id=4;
 $anss1;
$avg= "select avg(rating) as avs from rate where m_id=$r_id ";

  $anss=mysqli_query($con, $avg);
  if($anss){
  $row  = mysqli_fetch_array($anss);
  $anss1=$row['avs'];
}
else $anss1=0;


 ?>


<div class="fourth">
 <a href="http://localhost/Film_Sensei/moviefour.php">
<div class="card">

  <div class="card-image">
    <img src=<?php echo $poster_link; ?> style="height:350px;border-radius:10px;border-radius: 10px;"></div> 
  <div class="card-text">
     
    <h4 style="font-size:20px; font-weight:750;"><?php echo $movie_name; ?></h4>
    
	
  </div>
  <div class="card-stats">
    <div class="stat">
	
      <h2 style="font-weight:bold;">⭐<?php echo number_format($anss1 , 2); ?></h2>
    </div>
   
  </div>
</div>
</a>
</div>



<?php

 
        $movie_name="";	
		$poster_link="";
		$m_id=5;
	

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];	
		$poster_link=$row['poster_link'];
	

    }   else {
     
    }



 ?>




 <?php
 $r_id=5;
 $anss1;
$avg= "select avg(rating) as avs from rate where m_id=$r_id ";

  $anss=mysqli_query($con, $avg);
  if($anss){
  $row  = mysqli_fetch_array($anss);
  $anss1=$row['avs'];
}
else $anss1=0;


 ?>


<div class="fifth">
<a href="http://localhost/Film_Sensei/moviefive.php">
<div class="card">

  <div class="card-image">
    <img src=<?php echo $poster_link; ?> style="height:350px;border-radius:10px;border-radius: 10px;"></div> 
  <div class="card-text">
     
    <h4 style="font-size:20px; font-weight:750;"><?php echo $movie_name; ?></h4>
    
	
  </div>
  <div class="card-stats">
    <div class="stat">
	
      <h2 style="font-weight:bold;">⭐<?php echo number_format($anss1 , 2); ?></h2>
    </div>
   
  </div>
</div>
</a>
</div>




<?php

 
        $movie_name="";	
		$poster_link="";
		$m_id=6;
	

        $query= mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];	
		$poster_link=$row['poster_link'];
	

    }   else {
     
    }



 ?>



 <?php
 $r_id=6;
 $anss1;
$avg= "select avg(rating) as avs from rate where m_id=$r_id ";

  $anss=mysqli_query($con, $avg);
  if($anss){
  $row  = mysqli_fetch_array($anss);
  $anss1=$row['avs'];
}
else $anss1=0;


 ?>


<div class="sixth">
<a href="http://localhost/Film_Sensei/moviesix.php">
<div class="card">

  <div class="card-image">
    <img src=<?php echo $poster_link; ?> style="height:350px;border-radius:10px;border-radius: 10px;"></div> 
  <div class="card-text">
     
    <h4 style="font-size:20px; font-weight:750;"><?php echo $movie_name; ?></h4>
    
	
  </div>
  <div class="card-stats">
    <div class="stat">
	
      <h2 style="font-weight:bold;">⭐<?php echo number_format($anss1 , 2); ?></h2>
    </div>
   
  </div>
</div>
</a>
</div>






</div>


</div>


</div>




  
	<?php include "footer.php"?>
  
  
  
  
  <script>

      $(".carousel").owlCarousel({
		 
        margin: 20,
        loop: true,
        autoplay: false,
		dots: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
		 
        responsive: {
          0:{
            items:1,
            nav: true
          },
          600:{
            items:2,
            nav: true
          },
          1000:{
            items:3,
            nav: true
          }
        }
      });
    </script>
  

  
  
  
  
  
   <script src="js/bootstrap.bundle.min.js"></script>

	

  </body>
</html>