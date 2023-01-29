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

    
    <title>Edit Profile</title>

   
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    
    <link href="css/edit.css" rel="stylesheet" media="all">





</head>

<body>



            <div class="card card-3">
                <div class="card-body">
                    <h2 style="color:#fff;text-align:center;">Edit Info</h2>
                    <form action="profileedit.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $_SESSION['name']; ?>" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" value="<?php echo $_SESSION['birthday']; ?>"
                                name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender" value="<?php echo $_SESSION['gender']; ?>">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $_SESSION['phone']; ?>" name="phone">
                        </div>

                        <div class="p-t-10">
                            <button name="save" class="btn btn--submit" type="submit">Save Changes</button>

                        </div>
                    </form>

                    <?php
                         if(isset($_POST['save'])){
                           $username =(string)$_POST['name'];
                           $birthday=(string)$_POST['birthday'];
                           $gender=(string)$_POST['gender'];
                           $phone=(string)$_POST['phone'];
                       $email=(string)$_SESSION['email'];

                     
                          $query = "update users set name='$username',birthdate='$birthday',gender ='$gender',phone ='$phone'where email='$email'";
                                       $result = mysqli_query($con,$query);


                    if($result)
                           {
                             echo "
                             <script>
                              
                               window.location.href='profile.php';
                             </script>

                             ";


                             $email=(string)$_SESSION['email'];
                             $pass=(string)$_SESSION['pass'];
                             $birthday="";
                             $gender="";
                             $phone="";
                             $name="";


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

                         if(isset($_SESSION["email"])){
                           echo '<script type = "text/javascript">';
                           echo 'window.location.href = "index.php" ';
                           echo '</script>';
                         }
                           }
                           else {

                             echo "
                             <script>
                               alert('Update failed');
                               window.location.href='profile.php';
                             </script>

                             ";

                           }


                                }
                   else {


                   }


                   ?>




                </div>
            </div>


















    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->



</html>
