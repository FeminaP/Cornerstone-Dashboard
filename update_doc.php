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
$title = $_POST['title'];
$text = $_POST['text'];
session_start();
$user = $_SESSION['user'];
date_default_timezone_set('America/New_York');
$today = date("Y-m-d");

$sql = "UPDATE documentation SET title='$title',text='$text', user='$user', timestamp='$today' WHERE title ='$title'";
$result = $conn->query($sql) or die('Error querying database.');
 
$conn->close();
header("location: http://localhost/crst_dashboard/documentation.php ");
exit();
?>