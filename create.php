<?php
    session_start();
    if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true")){
        header("Location: login_form.php");          
    }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: create_form.php");
}

$name = $_POST['name'];
$ort = $_POST['ort'];
$preis = $_POST['preis'];
$date = $_POST['date'];
$farbe = $_POST['farbe'];

if (empty($name) || empty($ort) || empty($preis) || empty($date) || empty($farbe)) {
    header("Location: create_form.php");
}


include 'database_config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO festivals (festivalname, ort, preis, datum, color)
VALUES ('". $name ."', '". $ort ."', '". $preis ."', '". $date ."', '" . $farbe . "');";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);

header("Location: create_form.php");
?>