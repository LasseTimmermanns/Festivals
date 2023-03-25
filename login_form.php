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
        <?php
            if(isset($_GET["error_code"])){ 
                

                    $error_code = $_GET["error_code"];

                    switch ($error_code) {
                        case 0:
                            echo "<h4>Falsche Anfragmethode</h4>";
                            break;
                        case 1:
                            echo "<h4>Bitte fülle die Felder aus!</h4>";
                            break;
                        case 2:
                            echo "<h4>Falscher Benutzername</h4>";
                            break;
                        case 3:
                            echo "<h4>Falsches Passwort</h4>";
                            break;
                }
            }
        ?>
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