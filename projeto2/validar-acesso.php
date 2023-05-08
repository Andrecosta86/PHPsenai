<?php 
    session_start();
   
   if(isset($_SESSION['acesso-restrito'])){
      echo "<script>window.location.replace(login.php);</script>";
       
      }
  
   ?>
 
