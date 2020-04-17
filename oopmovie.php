<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Mikail Köker">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Project oop movie</title>
    <style>
    body{
      background: url("img/theater.jpg");
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
      background-size: cover;
    }
    .box input[type="submit"]{
      background: transparent;
      border: none;
      outline: none;
      color: #fff;
      background: black;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
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
    .box{
      color: white;
      position: absolute;
      top: 19%;
      left: 50%;
      transform: translate(-50%,-50%);
      width: 350px;
      height: 200px;
      padding: 40px;
      background: rgba(0, 0, 0,0.6);
      box-sizing: border-box;
      box-shadow: 0 15px 25px red;
      border-radius: 10px;
      margin-top: 150px;
    }
    .title{
      margin-left: auto;
      margin-right: auto;
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
  </head>
  <body>
    <a href="loguit.php">Log uit</a>
        <div class="navbar">
          <h2 class="title">OOP Movie Project</h2>
          <a href="watched1.php"><button type="button" name="button" class="bekekenbtn">Watched</button></a>
          <a href="watchlist.php"><button type="button" name="button" class="bekekenbtn">Watchlist</button></a>
        </div>

        <div class="box">
        <form action="searchmovie.php" method="post">
          Welk film zoekt u?
          <div class="inputbox">
          <input type="text" name="title" required=""><br />
          </div>
          <input type="submit">
        </form>
      </div>


    <footer id="footer">
      <p>Copyright &copy; Mikail Köker 2019</p>
    </footer>
  </body>
</html>
