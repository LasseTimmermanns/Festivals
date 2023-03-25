<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login_form.php?error_code=0");
}

$user_name = $_POST['username'];
$user_password = $_POST['passwort'];
if (empty($user_password) || empty($user_name)) {
    header("Location: login_form.php?error_code=1");
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

$sql = "SELECT passwort FROM users WHERE username='" . $user_name . "';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    header("Location: login_form.php?error_code=2");
}

while($row = mysqli_fetch_assoc($result)) {
    if($user_password == $row["passwort"]){
        // Eingeloggt 
        session_start();
        $_SESSION["loggedin"] = "true";
        header("Location: admin.php");
    }else{
        header("Location: login_form.php?error_code=3");
    }
}

mysqli_close($conn);
?>
