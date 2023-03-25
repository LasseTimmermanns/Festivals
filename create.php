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

if (empty($name) || empty($ort) || empty($preis) || empty($date)) {
    header("Location: create_form.php");
}

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

$sql = "INSERT INTO festivals (festivalname, ort, preis, datum)
VALUES ('". $name ."', '". $ort ."', '". $preis ."', '". $date ."')";

mysqli_close($conn);

header("Location: create_form.php");
?>