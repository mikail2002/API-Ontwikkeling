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
//BussinessLogic Laag == OBJECT GEORIENTEERD
//Filename: "SEARCHMOVIE.PHP"

include('Movie.class.php');
include('MovieHelper.class.php');

$postTitle = $_POST['title']; //URL balk variable(GET) of form input HTML(POST)

//OBSTAKEL: Bad Boys wordt Bad_Boys -> replace spaces with underscores vanwege API
$newTitle = MovieHelper::ReplaceTitle($postTitle);

//Maak object
$movieObj = new Movie($newTitle); //bad boys geef ik mee, om de rest van deze film info op te halen

//Vullen object
$movieObj->setMovieProperties(); //gebruik de Json class om de movieobject(eigenschappen) te vullen

//Tonen object
echo '	<img src="	' .$movieObj->Poster()	.'" /><br />';
echo '	<h1 class="get1">		' .$movieObj->Title()	.'</h1>		';
echo '	<h2 class="get1">		' .$movieObj->Released()	.'</h2>	';
echo '  <p class="get1">     ' .$movieObj->Genre()  .  '</p> ';
echo '  <p class="get1">     ' .$movieObj->imdbID()  .  '</p>';


echo '<a href="addmovieDB.php?imdbID='.$movieObj->ImdbID().'"> <button class="bekekenbtn">toevoegen aan mijn watchlist: '.$movieObj->ImdbID().'</button></a>';

echo "<a href='oopmovie.php'><p class='echo1'> terug naar het hoofdpagina </p></a>";

?>
<br>
<br>
<br>
<br>
<br>
<footer id="footer">
  <p>Copyright &copy; Mikail Köker 2019</p>
</footer>
</body>
</html>
