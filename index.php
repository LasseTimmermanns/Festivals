<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>