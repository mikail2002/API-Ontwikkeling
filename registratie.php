<?php
  session_start();
  header('location:login.php');

  $connect = mysqli_connect("localhost", "root", "mkoker2002", "oopmovie");

  $name = $_POST['user'];
  $pass = $_POST['password'];
  $utype = $_POST['gebruikertype'];
  $s = " SELECT * FROM account WHERE gebruikersnaam = '$name'";

  $result = mysqli_query($connect, $s);

  $num = mysqli_num_rows($result);

  if($num == 1) {
    echo "Gebruikersnaam is al in gebruik";
  }else {
    $reg = " INSERT INTO account(gebruikersnaam , wachtwoord ) VALUES ('$name' , '$pass')";
    mysqli_query($connect, $reg);
    echo "Registratie is gelukt";
  }
 ?>
