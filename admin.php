<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
    <?php
        session_start();
        if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true")){
            header("Location: login_form.php");          
        }
    ?>

    <div class="wrapper">
        <div class="big create"><img src="img/add.svg"></div>
        <div class="big update"><img src="img/update.svg"></div>
        <div class="big delete"><img src="img/delete.svg"></div>
    </div>
</body>
</html>