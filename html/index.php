<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SQL Injection</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body style="background-color:#152238;">
<br>
  <div class = "container">
    <div class="jumbotron">
      <h1 class="display-4">SQL Injection</h1>
      <p class="lead">Ejemplo de aplicacion de SQL INJECTION</p>
      <hr class="my-4">
      <p>Usa un SQL Injection para conseguir el hash para el proyecto final.</p>
    </div>
    <form action="index.php" method="post">

  <div class="container">
  <div class="container" style="background-color:#80c7cd">
  <br>
  <br>
  <br>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br><br>
    <label for="psw"><b>Password </b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br><br>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <br>
    <br>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="">password?</a></span>
    <br><br>
  </div>
  </div>

</form> 
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

