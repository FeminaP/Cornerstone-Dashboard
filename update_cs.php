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

$job_id = $_POST["job_id"];
$postage = $_POST["postage"];
$invoice_number = $_POST["invoice_number"];
$residual_returned = $_POST["residual_returned"];
$week_followup = $_POST["2week_followup"];
$notes=$_POST["notes"];
$status = $_POST["status"];
$reason = $_POST["reason"];

$sql = "UPDATE invoice SET postage='$postage',invoice_number='$invoice_number',residual_returned='$residual_returned',2week_followup='$week_followup',notes='$notes',status='$status',reason='$reason' WHERE job_id = '$job_id'";

$result = $conn->query($sql) or die('Error querying database.');
 
$conn->close();

header("location: http://localhost/crst_dashboard/customer_service.php ");
exit();

?>