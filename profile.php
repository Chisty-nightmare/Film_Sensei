

<?php
 include "menubar.php";

 
 ?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
     <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/profilestyle.css" rel="stylesheet">
	 
	
	 
	  
	

    <title></title>
  </head>
  <body>
   
 
  
<div class="page-content page-container" id="page-content">
            
         <div class="profilebody">  
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"> <?php echo $_SESSION['name']; ?></h6>
                                <p><a href="http://localhost/Film_Sensei/profileedit.php">
								Edit Profile
								</a></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"> <?php echo $_SESSION['email']; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"> <?php echo $_SESSION['phone']; ?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Personal Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Birth Date</p>
                                        <h6 class="text-muted f-w-400"><?php echo $_SESSION['birthday']; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Gender</p>
                                        <h6 class="text-muted f-w-400"><?php echo $_SESSION['gender']; ?></h6>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			   <div class="soutbutton">
			   
			   
               <a href="http://localhost/Film_Sensei/signout.php">
			   <img src="images/signoutlogo.png" style="width:2%;margin-right:5px;">Sign Out</a>

             </div>
			
			
			
        </div>
   
</div>
</div>



  	

  <script src="js/bootstrap.bundle.min.js"></script>

  </body>
  
</html>


