<?php
      include 'config.php';?>
	  
<?php

 
        $para1="";
		$para2="";
		$para3="";
		$para4=""; 


        $query=mysqli_query($con,"select * from about");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
       $para1=$row['para1'];
	   $para2=$row['para2'];
	   $para3=$row['para3'];
	   $para4=$row['para4'];
		

    }   else {
     
    }

  



 ?>  

<!DOCTYPE html>
 <html lang="en">
   <head>
     <title>About Us</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device_width,initial scale=1.0">
       
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/aboutstyle.css">
	   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   </head>
   <body>
    
	<?php include "menubar.php"?>
	
	
	 <div class="section">
	
       <div class="container">
	   
	
           <div class="title">
             <h1 style="color:#a52a2a">About Film-Sensei</h1>
           </div>
		   
           <div class="content">


             <p>
               <?php echo $para1; ?>
             </p>
             <p> <?php echo $para2; ?></p>
             <p>
                <?php echo $para3; ?>
             </p>
             <p></p>
             <p>
               <?php echo $para4; ?>
             </p>
             <div class="brsbutton">
			 
               <a href="http://localhost/Film_Sensei/index.php">Browse Films</a>

             </div>

           </div>
           <div class="social">
             <a href=""><i class="fab fa-facebook-f"></i></a>
             <a href=""><i class="fab fa-twitter"></i></a>
             <a href=""><i class="fab fa-instagram"></i></a>
           </div>
         </div>
</div>
		

   <?php include "footer.php"?>



      
 <script src="js/bootstrap.bundle.min.js"></script>
   </body>
 </html>
