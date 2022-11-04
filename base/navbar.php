<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
      include "navbarin.php";
  }else{
    include "navbarfull.php";
  }
  ?>