<?php
  session_start();

  $connect = mysqli_connect("localhost", "root", "mkoker2002", "oopmovie");

  $name = $_POST['user'];
  $pass = $_POST['password'];
  $s = " SELECT * FROM account WHERE gebruikersnaam = '$name' AND wachtwoord = '$pass'";

  $result = mysqli_query($connect, $s);

  $num = mysqli_num_rows($result);

  if($num == 1) {
    $_SESSION['username'] = $name;
    header('location:oopmovie.php');
  }else {
    header('location:login.php');
  }
 ?>
