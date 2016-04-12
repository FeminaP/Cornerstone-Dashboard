<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "crst_dashboard";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$text = $_POST['text'];
$title = $_POST['title'];
session_start();
$user = $_SESSION['user'];
date_default_timezone_set('America/New_York');
$today = date("Y-m-d");

$sql = "INSERT INTO documentation(title,text,user,timestamp) VALUES ('$title', '$text','$user','$today')";
$result = $conn->query($sql) or die('Error querying database.');
 
$conn->close();

header("location: http://localhost/crst_dashboard/documentation.php ");
exit();

?>