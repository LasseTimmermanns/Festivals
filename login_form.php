<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

<div class="center">
  <h1>Willkommen!</h1>
  <form method="POST" action="login.php">
    <div class="inputbox">
      <input type="text" name="username" required="required">
    </div>
    <div class="inputbox">
      <input type="text" name="passwort" required="required">
    </div>
    <div class="inputbox">
    <input type="submit" name=submit value="Einloggen">
    </div>
  </form>

</div>


</body>
</html>