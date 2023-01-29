<?php
session_start();
    if(session_destroy()){
      echo '<script type = "text/javascript">';
      echo 'window.location.href = "index.php" ';
      echo '</script>';
    }

?>