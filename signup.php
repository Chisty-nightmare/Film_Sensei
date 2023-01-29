<?php
include 'config.php';

 ?>


 <?php

 include "menubar.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

   
    <title>Sign Up</title>

   
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

 
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    
    <link href="css/sign.css" rel="stylesheet" media="all">





</head>

<body>



    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="signup.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate"
                                name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="pass">
                        </div>

                        <div class="p-t-10">
                            <button name="signup" class="btn btn--submit" type="submit">Submit</button>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php

  if(isset($_POST['signup']))
  {
    $name=(string)$_POST['name'] ;
    $birthday=(string)$_POST['birthday'];
    $gender=(string)$_POST['gender'];
    $email=(string)$_POST['email'];
    $phone=(string)$_POST['phone'];
    $password=(string)$_POST['pass'];
    $password=md5($password);

    $query= "select * from users where email= '$email'";
    $query_check=mysqli_query($con,$query);
    if($query_check)
    {

      if(mysqli_num_rows($query_check)>0)
      {
        echo"
        <script>
          alert(' Email already in use');
          window.location.href='signin.php';
        </script>
        ";
      }
      else {
      
        if(!empty($name) and !empty($birthday) and !empty($gender) and !empty($email) and !empty($phone) and !empty($password))
        {$insert="insert into users values('$name','$birthday','$gender','$email','$phone','$password')" ;
        $run=mysqli_query($con,$insert);}

        if($run)
        {
          echo "
          <script>     
            window.location.href='signin.php';
          </script>

          ";
        }
        else {

          echo "
          <script>
            alert('Connection failed');
            window.location.href='signup.php';
          </script>

          ";

        }



      }

    }
    else {
      echo "
      <script>
        alert('Database error');
        window.location.href='signup.php';
      </script>

      ";

    }


  }
else{


}



 ?>



   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

 
    <script src="js/global.js"></script>

</body>



</html>


