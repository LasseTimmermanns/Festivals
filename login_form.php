<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
<form method="POST" action="login.php">
    Ihr Username: <input name="username" required >
    Ihr Passwort: <input name="passwort" type=text required>
    <input type=submit name=submit value="Einloggen">
</form>

<?php
if(!isset($_GET["error_code"])){ 
    exit;
}

$error_code = $_GET["error_code"];

switch ($error_code) {
    case 0:
        echo "Falsche Anfragmethode";
        break;
    case 1:
        echo "Bitte fülle die Felder aus!";
        break;
    case 2:
        echo "Falscher Benutzername";
        break;
    case 3:
        echo "Falsches Passwort";
        break;
}
?>

</body>
</html>