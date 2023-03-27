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
  <div class="header">Festivals</div>

  <div class="wrapper">
    <?php
        function getTextColor($hex) {
          $r = hexdec(substr($hex, 0, 2));
          $g = hexdec(substr($hex, 2, 2));
          $b = hexdec(substr($hex, 4, 2));
        
          $luma = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;
        
          if ($luma > 0.5) {
            return "#000000"; // black
          } else {
            return "#ffffff"; // white
          }
        }

        include 'database_config.php';
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT festivalname, ort, preis, datum, erstellungsdatum, color FROM festivals";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo 
            '
              <div class="festival" style="background:' . $row["color"] . '; color:' . getTextColor($row["color"]) . '">
                <div class="name">' . $row["festivalname"] . '</div>
                <div class="ort"><img src="img\location.svg">' . $row["ort"] . '</div>
                <div class="preis"><img src="img\preis.svg">' . $row["preis"] . '€</div>
                <div class="datum"><img src="img\date.svg">' . $row["datum"] . '</div>
                <div class="erstellungsdatum"><img src="img\bookmark.svg">' . $row["erstellungsdatum"] . '</div>
              </div>
            ';
          }
        } else {
          echo "Es finden in nächster Zeit keine Festivals statt..";
        }
        
        mysqli_close($conn);
    ?>
    </div>
</body>
</html>