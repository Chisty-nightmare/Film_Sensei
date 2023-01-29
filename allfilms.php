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
	 <link href="css/allstyle.css" rel="stylesheet">

	

    <title>All Films</title>
  </head>
  <body>
  
   
	<?php include "menubar.php"?>

	


  
<div class="first_part">	
<div class="container">
<h3>All Movies</h3>
<div class="row">
<div class="col-md-4">
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
  <img src=<?php echo $poster_link; ?> style="height:350px;width:100%;border-radius:10px;border-radius: 10px;">
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
</div>






<div class="col-md-4">

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
    <img src=<?php echo $poster_link; ?> style="height:350px;width:100%;border-radius:10px;border-radius: 10px;"></div>
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





<div class="col-md-4">

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
  <img src=<?php echo $poster_link; ?> style="height:350px;width:100%;border-radius:10px;border-radius: 10px;"></div> 
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






<div class="col-md-4">

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
    <img src=<?php echo $poster_link; ?> style="height:350px;width:100%;border-radius:10px;border-radius: 10px;"></div> 
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







<div class="col-md-4">

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
    <img src=<?php echo $poster_link; ?> style="height:350px;width:100%;border-radius:10px;border-radius: 10px;"></div> 
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






<div class="col-md-4">
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
    <img src=<?php echo $poster_link; ?> style="height:350px;width:100%;border-radius:10px;border-radius: 10px;"></div> 
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
</div>




  
	<?php include "footer.php"?>
  
  

  
  
   <script src="js/bootstrap.bundle.min.js"></script>

	

  </body>
</html>