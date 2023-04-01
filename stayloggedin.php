<?php
session_start();
include 'database_config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user_name = $_SESSION['username'];
$user_password = $_SESSION['password'];
if (empty($user_password) || empty($user_name)) {
    header("Location: login_form.php");
}

$sql = "SELECT passwort FROM users WHERE username='" . $user_name . "';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    header("Location: login_form.php");
}

while($row = mysqli_fetch_assoc($result)) {
    if($user_password != $row["passwort"]){
        header("Location: login_form.php");
    }
}

mysqli_close($conn);
?>