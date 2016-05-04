<?php
require('header.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "crst_dashboard";
// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
$sql = "SELECT * FROM job_ticket"; 
$result = mysqli_query($conn,$sql); 

echo "<div class='content'>";

if ($result->num_rows > 0) {
	
	

	while($row = $result->fetch_assoc()) {
		
		$temp = $row['job_id'];
		$sql1 = "SELECT * FROM mail_data WHERE job_id = '$temp'"; 
		$result1 = mysqli_query($conn,$sql1);
		$row1 = $result1->fetch_assoc();

		$sql2 = "SELECT * FROM mail_info WHERE job_id = '$temp'"; 
		$result2 = mysqli_query($conn,$sql2);
		$row2 = $result2->fetch_assoc();
		
		$sql3 = "SELECT * FROM yellow_sheet WHERE job_id = '$temp'"; 
		$result3 = mysqli_query($conn,$sql3);
		$row3 = $result3->fetch_assoc();
		
		echo "<div class='left'>";
		echo "<h1>".$row['client_name']."</h1>";
		echo "	<p>Due Date:".$row['due_date']."</p>";
		echo "	<p>Status:".$row['job_status']."</p>";
		echo "	<p>Mail Class:".$row2['mail_class']."</p>";
		echo "	<p>Rate:".$row2['rate']."</p>";
		echo "</div>";
		echo "<div class='center'>";
		echo "<a href='http://localhost/crst_dashboard/yellow_sheet.php?job_id=$temp'><h1>".$row3['percent']."%"."</h1></a>";
		echo "</div>";
		echo "<div class='right'>";
		echo "	<h1>".$row['project_name']."</h1>";
		echo "	<p>Records Total:".$row1['records_total']."</p>";
		echo "	<p>Assigned To:".$row1['processed_by']."</p>";
		echo "	<p>Created by:".$row['created_by']."</p>";
		echo "	<p>---</p>";
		echo "</div>";		
	}
	echo "<br>";
	
}
echo "</div>"; 
?>