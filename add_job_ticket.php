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

$client_name = $_POST['client_name'];
$project_name = $_POST['project_name'];
$_SESSION["client_name"] = $client_name;
$_SESSION["project_name"] = $project_name;
$ticket_date = $_POST['ticket_date'];
$due_date = $_POST['due_date'];
$created_by = $_POST['created_by'];
$estimate_number = $_POST['estimate_number'];
$special_instructions = $_POST['special_instructions'];
$materials_odered = $_POST['materials_odered'];
$materials_expected = $_POST['materials_expected'];
$expected_quantity = $_POST['expected_quantity'];

$sql = "INSERT INTO job_ticket(client_name,project_name,ticket_date,due_date,created_by,special_instructions,materials_odered,materials_expected,estimate_number,expected_quantity) VALUES ('$client_name', '$project_name', '$ticket_date', '$due_date','$created_by','$special_instructions','$materials_odered','$materials_expected','$estimate_number','$expected_quantity')";
$result = $conn->query($sql) or die('Error querying database.');
 
$conn->close();

header("location: http://localhost/crst_dashboard/show.php");
exit();

?>

