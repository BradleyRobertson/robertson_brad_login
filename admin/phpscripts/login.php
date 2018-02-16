<?php
function logIn($username, $password, $ip) {
  require_once('connect.php');
  $username = mysqli_real_escape_string($link, $username);
  $password = mysqli_real_escape_string($link, $password);
  $loginstring = "SELECT * FROM tbl_user WHERE user_name = '{$username}' AND user_pass = '{$password}'";
  //echo $loginstring;
  $user_set = mysqli_query($link, $loginstring);
  //echo mysqli_num_rows($user_set);
  if(mysqli_num_rows($user_set)){
    $founduser = mysqli_fetch_Array($user_set, MYSQLI_ASSOC);
    $id = $founduser['user_id'];
    $_SESSION['user_id'] = $id;
    $_SESSION['user_name'] = $founduser['user_name'];
    $_SESSION['last_login'] = $founduser['last_login'];
    if(mysqli_query($link, $loginstring)){
      $update = "UPDATE tbl_user SET user_ip = '{$ip}' WHERE user_id={$id}";
      $update = "UPDATE tbl_user SET last_login = NOW() WHERE user_id={$id}";
      $updatequery = mysqli_query($link, $update);
    }
    redirect_to("admin_index.php");
  }else{
$message = "Incorrect, please try again";
return $message;
  }

mysqli_close($link);
}


 ?>
