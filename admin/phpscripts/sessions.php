<?php

session_start();

function confirm_logged_in() {
  if(isset($_SESSION['id'])){
    redirect_to("login.php");
  }
}

?>
