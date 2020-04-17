<!DOCTYPE html>
<html lang="en" dir="ltr">
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
.get1{
  text-align: center;
  margin-top: 3px;
}
.bekekenbtn{
background-color: black;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
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
if (isset($_POST['title'])) {
  $titleGET = $_POST['title'];
  $replaceChars = array('');
  $title = str_replace($replaceChars, '_', $titleGET);
  $json = file_get_contents('http://www.omdbapi.com/?t='.$title.'&apikey=186be766');
  $data = json_decode($json,true);

  $movieObject = $data['Poster'];
  $movieObject2 = $data['Title'];
  $movieObject3 = $data['Released'];
  $movieObject4 = $data['Genre'];
  $movieObject5 = $data['imdbRating'];
  $movieObject6 = $data['imdbID'];

  if (empty($movieObject)) {
    error_reporting(0);
    echo "Geen bestaande film in IMDB.com";
  }
  echo '<img src=" '.$movieObject.'"/>';
}

  echo '<h1 class="get1">' . $movieObject2;
  echo '<h2 class="get1">' . $movieObject3;
  echo '<p class="get1">' . $movieObject4;
  echo '<p class="get1">' . $movieObject5;
  echo '<p class="get1">' . $movieObject6;

  echo "<p class='bekekenbtn'><button type='submit' name='submit1'>Al bekeken</button></p>";

  echo "<a href='oopmovie.php'><p class='echo1'> terug naar het hoofdpagina </p></a>";
 ?>

</body>
</html>
