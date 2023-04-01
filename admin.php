<?php include 'stayloggedin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
    <div class="wrapper">
        <div class="big create" onclick="location.href='create_form.php';"><img src="img/add.svg"></div>
        <div class="big update" onclick="location.href='edit_interface.php';"><img src="img/update.svg"></div>
    </div>
</body>
</html>