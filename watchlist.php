<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "mkoker2002";
$dbname = "oopmovie";

try {
  $dsn = "mysql:host=" . $dbhost . ";dbname=" . $dbname;
  $pdo = new PDO($dsn, $dbuser, $dbpassword);
    $sql = 'SELECT imdbID
               FROM film
              ORDER BY idFilm DESC';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Connectie is niet gelukt: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Watchlist</title>
          <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
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
      img{
        border: 3px solid grey;
        border-radius: 20px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 200px;
      }
      .echo1{
        text-align: center;
        margin-top: 3px;
      }
      .title{
        vertical-align: middle;
        letter-spacing: 2px;
        font-size: 50px;
        color: #ffff;
      }
      .get2{
        text-align: center;
        margin-top: 3px;
        margin-bottom: 3px;
        color: white;
      }
      .get1{
        color: white;
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
      .row::after {
        content: "";
clear: both;
display: table;
      }
      .column {
        float: left;
  width: 33.33%;
  padding: 5px;
      }
      input[type=text] {
  border: 2px solid grey;
  border-radius: 4px;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: grey;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.form1{
  margin-left: 46%;
}
      </style>
      <a href="loguit.php">Log uit</a>
          <div class="navbar">
            <h2 class="title">OOP Movie Project</h2>
            <ul>
            </ul>
          </div>
        <div id="container">
          <form class="form1" action="watched.php" method="post">
            <input type="text" name="filmdbid" required placeholder="Filmdbid"><br>
            <input type="submit" name="update" required placeholder="Update">
          </form>
            <h1 class="get2">Films</h1>

                    <?php
                    include('watchlist.class.php');
                    include('WatchlistHelper.php');

                    while ($row = $q->fetch()){
                      $movieObj = new Watchlist($row['imdbID']);
                      $movieObj->setMovieProperties();
                      echo "<div class='row'>";
                        echo "<div class='column'>";
                             echo '	<img src="	' .$movieObj->Poster()	.'" /><br />';
                        echo "</div>";
                             echo '	<h1 class="get1">		' .$movieObj->Title()	.'</h1>		';
                             echo '	<h2 class="get1">		' .$movieObj->Released()	.'</h2>	';
                             echo '  <p class="get1">     ' .$movieObj->Genre()  .  '</p> ';
                             echo '  <p class="get1">     ' .$movieObj->imdbID()  .  '</p> ';
                      echo "</div>";
                    }
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<a href='oopmovie.php'><p class='echo1'> terug naar het hoofdpagina </p></a>";
                    ?>

            <footer id="footer">
              <p>Copyright &copy; Mikail Köker 2019</p>
            </footer>
    </body>
</div>
</html>
