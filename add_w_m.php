<?php
require ("header.php");
?>
<div class="content">
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

session_start();

$user_name = $_SESSION['user'];
date_default_timezone_set('America/New_York');
$today = date("F j, Y, g:i a");
$_SESSION['date'] = $today;
$job = "added new w&m";

$job_id = $_POST['job_id'];
//$materials_ordered = $_POST['materials_ordered'];
//$expected = $_POST['expected'];
$received = $_POST['received'];
$location = $_POST['location'];
$checked_in = $_POST['checked_in'];
$material = $_POST['material'];
$type = $_POST['type'];
$vendor = $_POST['vendor'];
$quantity = $_POST['quantity'];
//$expected_quantity= $_POST['expected_quantity'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$size = $_POST['size'];

$sql = "INSERT INTO materials(job_id,received,location,checked_in,material,type,vendor,quantity,height,weight,size) VALUES ('$job_id','$received','$location','$checked_in','$material','$type','$vendor','$quantity','$height','$weight','$size')";
$result = $conn->query($sql) or die('Error querying database.');

$sql6 = "INSERT INTO timestamp (user,time,job) VALUES ('$user_name', '$today','$job')";
$result7 = $conn->query($sql6) or die('Error querying database 5.');
 
$conn->close();
header("location: http://localhost/crst_dashboard/weights_and_measure.php ");
exit();
?>
</div>