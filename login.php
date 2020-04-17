<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>login.php</title>

  </head>
  <body>
    <div class="container">
        <div class="login-box">
        <div class="row">
          <div class="col-md-6 login-links">
            <h2> Log hier in</h2>
            <form action="validatie.php" method="post">
              <div class="form-group">
                <label>Gebruikersnaam</label>
                <input type="text" name="user" class="form-control" required="">
              </div>
              <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-control" required="">
              </div>
              <button type="submit" class="btn btn-primary">Log in</button>
            </form>
          </div>


        <div class="col-md-6 login-rechts">
          <h2> Registreer hier</h2>
          <form action="registratie.php" method="post">
            <div class="form-group">
              <label>Gebruikersnaam</label>
              <input type="text" name="user" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Wachtwoord</label>
              <input type="password" name="password" class="form-control" required="">
            </div>
            <button type="Registreer" class="btn btn-primary">Registreer</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
