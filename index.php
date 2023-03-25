<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/general.css">

</head>
<body>
    <?php
        $servername = "localhost";
        $username = "festival";
        $password = "YUcrXDm87tMzmSh";
        $dbname = "festivals";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT festivalname, ort, preis, datum, erstellungsdatum FROM festivals";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            // echo "Name: " . $row["festivalname"]. " - Ort: " . $row["ort"]. " - Preis: " . $row["preis"]. " - Datum: " . $row["datum"]. " - Erstellungsdatum: " . $row["erstellungsdatum"]. "<br>";
          }
        } else {
          echo "0 results";
        }
        
        mysqli_close($conn);
    ?>
  <div class="wrapper">
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>

    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>

    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
    <div class="festival">
      <div class="name">Spektrum</div>
      <div class="ort"><img src="img\location.svg">Hamburg</div>
      <div class="preis"><img src="img\preis.svg">Preis</div>
      <div class="datum"><img src="img\date.svg">Datum</div>
      <div class="erstellungsdatum"><img src="img\bookmark.svg">Erstellungsdatum</div>
    </div>
  </div>
</body>
</html>