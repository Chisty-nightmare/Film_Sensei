
<?php include "menubar.php";
      include 'config.php';?>

<?php


        $movie_name="";
		$banner_link="";
		$poster_link="";
		$embed_link="";
		$movie_para="";
		$m_id=3;




        $query=mysqli_query($con,"select * from movie where m_id=$m_id");
        $row  = mysqli_fetch_array($query);

    if(is_array($row)) {
        $movie_name=$row['movie_name'];
		$banner_link=$row['banner_link'];
		$poster_link=$row['poster_link'];
		$embed_link=$row['embed_link'];
		$movie_para=$row['movie_para'];

    }   else {

    }





 ?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

     <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/moviestyle.css" rel="stylesheet">



    <title><?php echo $movie_name; ?></title>
  </head>
  <body>




	<div class="container">

	<iframe width=100% height="600" src=<?php echo $embed_link; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <h2><?php echo $movie_name; ?></h2>
  <p><?php echo $movie_para; ?></p>

<?php
$avg= "select avg(rating) as avs from rate where m_id=$m_id ";
if($_SESSION){

  $a=$_SESSION['email'];
$q= "select avg(rating) as av from rate where m_id=$m_id  and email='$a' ";



    $ans=mysqli_query($con, $q);

    if($ans){
    $row  = mysqli_fetch_array($ans);
    $ans=$row['av'];
  }
  else $ans=0;
}
  $anss=mysqli_query($con, $avg);
  if($anss){
  $row  = mysqli_fetch_array($anss);
  $anss=$row['avs'];
}
else $anss=0;


 ?>

<form action="movieone.php" method="post">

    <div style="margin:4px 0px 0px 0px ">
        <h4>User Rating:</h4>
    </div>

    <div>
    </div>

         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>


    <input type="hidden" name="rating">
    <div>
      <?php if ($_SESSION  and $ans==0){ ?>
      <input type="submit" name="add" class="subbutton">
    <?php } ?>


     </div>


     <div style="margin:4px 0px 0px 0px ">

       <?php if($_SESSION){ ?>
       Your rating: <?php echo "$ans"; }?>


     </div>
      <div style="margin:4px 0px 0px 0px ">
      Average rating:<?php echo number_format($anss , 2); ?>
      </div>
</form>


    </div>
<div class="comment">

  <div class="container">
  <hr>
<?php if($_SESSION){ ?>
<form  method="post">

Post a Comment:
<div class="writecomment">

<textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea>
</div>
<input type="submit" name="post" value="💬 Post" class="postbutton">

</form><?php } ?>

<?php


if(isset($_POST['post']))
{
  $inname=(string)$_SESSION['name'] ;
  $incomment=(string)$_POST['comments'];

  $email=(string)$_SESSION['email'];


      if(!empty($incomment))
      {$insert="insert into comment values('$incomment',$m_id,'$inname','$email')" ;
      echo $insert;
      $runs=mysqli_query($con,$insert);
      echo $runs;}

      if($runs)
      {
        echo "
        <script>
          alert ('comment added');
          window.location.href='movieone.php';
        </script>

        ";}
        else {
          echo "
          <script>
            alert ('Error!');
            window.location.href='movieone.php';
          </script>

          ";
        }

      }





 ?>


<br>
Comments:


  <?php
  echo '<div class="showcomments">';
   $comment=mysqli_query($con,"select * from comment where m_id=$m_id");
  while($row=mysqli_fetch_array($comment))
    {
      $cname=$row['uname'];
      $comments=$row['comments'];
      echo"<B>$cname</B>"; echo "<B> commented:</B> "; echo "<br>" ; echo $comments ; echo "<br> <br>";
    }

   ?>
</div>
  </div>

</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
       $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
           $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
        //    $(this).parent().find('.result').text('rating :'+ rating);
           $(this).parent().find('input[name=rating]').val(rating);

        });
    ;
    });


</script>

  <?php

if(isset($_POST['add']) and $_SESSION and $ans==0)
{
    $email = $_SESSION["email"];
    $rating = $_POST["rating"];


    $sql = "INSERT INTO rate (m_id,rating,email) VALUES ('$m_id','$rating','$email')";
    $done=mysqli_query($con, $sql);
    if ($done)
    {

        $done=0;
		echo '<script type = "text/javascript">';
        echo 'alert("Rating added successfully");';
        echo 'window.location.href = "movieone.php" ';
        echo '</script>';

    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  //  mysqli_close($con);
}
?>

  <?php include "footer.php"?>
   <script src="js/bootstrap.bundle.min.js"></script>



  </body>
</html>
