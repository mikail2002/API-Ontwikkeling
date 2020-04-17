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
      background-color: #ffff;
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
      border: none;
      color: white;
      padding: 15px 32px;
      text-decoration: none;
      display: inline-block;
      margin-left: 41%;
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
  $rating = $_POST['rating'];

  if (isset($_POST['update'])) {
    try {
      $dsn = "mysql:host=" . $dbhost . ";dbname=" . $dbname;
      $pdo = new PDO($dsn, $dbuser, $dbpassword);
      //echo "Connectie was succesvol";
    } catch (PDOException $e) {
      echo "Connectie is niet gelukt: " . $e->getMessage();
    }

    $sql = $pdo->prepare("UPDATE film SET Rating = (:rating) WHERE imdbID = (:imdbID) ");
    $sql->bindParam(":imdbID", $imdbID);
    $sql->bindParam(":rating", $rating);

    $sql->execute();
  }

  echo "<h1>Film is toegevoegd aan algezien/watched</h1>";
  echo "<a href='oopmovie.php'><p class='echo1'> terug naar het hoofdpagina </p></a>";
 ?>
</body>
</html>
