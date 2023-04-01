<?php include 'stayloggedin.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: edit_interface.php");
    exit;
}

$id = $_GET['id'];
$sql = "";

if(isset($_POST["delete"])){
  $sql = "DELETE FROM festivals WHERE id=". $id;
}else{

$name = $_POST['name'];
$ort = $_POST['ort'];
$preis = $_POST['preis'];
$date = $_POST['date'];

if (empty($name) || empty($ort) || empty($preis) || empty($date)) {
    header("Location: edit_interface.php");
    exit;
}

$sql = "UPDATE festivals SET festivalname='" . $name . "', 
            ort='" . $ort . "', 
            preis='" . $preis . "', 
            datum='" . $date . "' WHERE id=" . $id;
}


include 'database_config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);

header("Location: edit_interface.php");
?>