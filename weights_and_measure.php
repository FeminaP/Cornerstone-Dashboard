<?php
require('header.php');
?>
<div class="content">
<div class="content-box">
<div class="topbar">
<h1>Weights and Measures</h1>
<a href="add_wm.php" class="add_button">Add Weights and Measure</a>
</div>
<div class="search-cont">
	<div class="searchcont-detail">
		<div class="search-boxleft">
			<form action="edit_wm.php" method="post" >
				<label>Quick Search</label>
				<input name="frmSearch" type="text" placeholder="Search for a specific client">
				<input id="SubmitBtn" type="submit" value="SUBMIT" >
			</form>
		</div>
	</div>
</div>
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
$result = mysqli_query($conn,"SELECT * FROM materials");
echo "<table  border='1' cellspacing='2' cellpadding='2' class='paginated' >"; // start a table tag in the HTML
echo "<thead>";
echo "<tr><th> Job ID </th><th> Client Name </th><th> Job Name </th><th> Recieved Date </th><th> Location </th><th> Checked In </th><th> Material </th><th> Type </th><th> Quantity </th><th> Vendor </th><th> Height </th><th> Weight </th><th> Size </th></tr>";
echo "</thead>";
if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
		$job_id = $row['job_id'];
		
		$result1 = mysqli_query($conn,"SELECT client_name,project_name FROM job_ticket WHERE job_id='$job_id' ");
		    while($row1 = $result1->fetch_assoc()){
				$client_name = $row1["client_name"];
				$project_name = $row1["project_name"];
			}
		
		
		
		
		echo "<tr><td>".$row["job_id"]."</td><td>".$client_name."</td><td>".$project_name."</td><td>". $row["received"]. "</td><td>". $row["location"]."</td><td>". $row["checked_in"]. "</td><td>". $row["material"]. "</td><td>". $row["type"]. "</td><td>". $row["quantity"]. "</td><td>". $row["vendor"]. "</td><td>". $row["height"]. "</td><td>". $row["weight"]. "</td><td>". $row["size"]. "</td></tr>";
    }
	echo "<br>";
} else {
    echo "0 results";
}
$conn->close();
?>

</div>
</div>		