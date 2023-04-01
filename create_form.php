<?php include 'stayloggedin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/create.css">
</head>
<body>
    <div class="wrapper">
        <h2>Neues Festival erstellen</h2>
    <form method="POST" action="create.php">
        
        <div class="attribute">
            <label for="name">Festival name</label>
            <input type="text" id="name" name="name" required><br>
        </div>

        <div class="attribute">
            <label for="ort">Ort</label>
            <input type="text" id="ort" name="ort" required><br>
        </div>

        <div class="attribute">
            <label for="preis">Preis</label>
            <input type="decimal" id="preis" name="preis" required><br>
        </div>

        <div class="attribute">
            <label for="date">Datum</label>
            <input type="date" id="date" name="date" required><br>
        </div>

        <div class="attribute">
            <label for="farbe">Anzeigefarbe</label>
            <div id="farbpicker-wrapper">
                <input type="color" id="farbe" value="#ff0000" name="farbe" required>
            </div><br>
            <script src="scripts/color_picker.js"></script>
        </div>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>