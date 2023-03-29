<?php
    session_start();
    if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true")){
        header("Location: login_form.php");   
        exit;       
    }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: edit_interface.php");
    exit;
}

$name = $_POST['name'];
$ort = $_POST['ort'];
$preis = $_POST['preis'];
$date = $_POST['date'];
$id = $_GET['id'];

if (empty($name) || empty($ort) || empty($preis) || empty($date)) {
    header("Location: edit_interface.php");
    exit;
}


include 'database_config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE festivals SET festivalname='" . $name . "', 
            ort='" . $ort . "', 
            preis='" . $preis . "', 
            datum='" . $date . "' WHERE id=" . $id;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);

header("Location: edit_interface.php");
?>