<?php

session_start();

if (isset($_POST['uname1']) and isset($_POST['pwd1'])){

  $username = $_POST['uname1'];
  $password = $_POST['pwd1'];

  $query = "SELECT * FROM `users` WHERE name='$username' and pass='$password'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION['uname1'] = $username;
  } else {
    $fmsg = "Błędne dane logowania.";
  }

  $query2 = "SELECT `is_admin` FROM `users` WHERE name='$username'";
  $user_value = mysqli_query($conn, $query2) or die(mysqli_error($connection));

  if ($user_value > 0){
    $_SESSION['user_value'] = $user_value;
  }

}
?>
