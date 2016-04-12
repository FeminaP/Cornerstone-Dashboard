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

$vendor = $_POST['vendor'];
$material = $_POST['material'];
$size = $_POST['size'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$based_on = $_POST['based_on'];


$sql = "INSERT INTO w_and_m (vendor,material,size,height,weight,based_on) VALUES ('$vendor', '$material', '$size', '$height','$weight','$based_on')";
$result = $conn->query($sql) or die('Error querying database.');
 
$conn->close();

header("location: http://localhost/crst_dashboard/vendors.php ");

exit();

?>
