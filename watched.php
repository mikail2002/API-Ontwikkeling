<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    <title>getmovie</title>
  </head>
  <body>
    <style media="screen">
    body{
      background: url("img/theater.jpg");
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
      background-size: cover;
    }
    .navbar{
        background: rgba(0, 0, 0,0.6);
        margin: 20px;
        height: 75px;
        border-radius: 10px;
        display: flex;
        text-align: center;
        border-color: red;
        border-style: dashed;
    }
    h1{
      color: white;
    }
    img{
      border: 3px solid grey;
      border-radius: 20px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .title{
      letter-spacing: 2px;
      font-size: 50px;
      color: #ffff;
    }
    .get1{
      text-align: center;
      margin-top: 3px;
    }
    .bekekenbtn{
      background-color: black;
      border-radius: 3px solid;
      border-color: red;
      margin-bottom: 16px;
      color: white;
      padding: 15px 32px;
      text-decoration: none;
      display: inline-block;
      justify-content: center;
      font-size: 16px;
      cursor: pointer;
    }
    </style>
    <a href="loguit.php">Log uit</a>
        <div class="navbar">
          <h2 class="title">OOP Movie Project</h2>
          <ul>
          </ul>
        </div>

<?php

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpassword = "mkoker2002";
  $dbname = "oopmovie";

  $imdbID = $_POST['filmdbid'];

  if (isset($_POST['update'])) {
    try {
      $dsn = "mysql:host=" . $dbhost . ";dbname=" . $dbname;
      $pdo = new PDO($dsn, $dbuser, $dbpassword);
      //echo "Connectie was succesvol";
    } catch (PDOException $e) {
      echo "Connectie is niet gelukt: " . $e->getMessage();
    }
    $id = $_POST['filmdbid'];

    $sql = $pdo->prepare("UPDATE film SET Algezien = 1 WHERE imdbID = (:imdbID) ");
    $sql->bindParam(":imdbID", $imdbID);

    $sql->execute();
  }

  echo "<h1>Film is toegevoegd aan algezien/watched</h1>";
  echo "<a href='oopmovie.php'><p class='echo1'> terug naar het hoofdpagina </p></a>";
 ?>
</body>
</html>
