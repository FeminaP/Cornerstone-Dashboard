<?php
require ("header.php");
?>
<div class="content">
<div class="content-box">
<div class="topbar">
<h1>Documentation</h1>
<a href="add_doc.php" class="add_button">Add Doc</a>
</div>
<div class="search-cont">
	<div class="searchcont-detail">
		<div class="search-boxleft">
			<form action="edit_doc.php" method="post" >
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


$result = mysqli_query($conn,"SELECT * FROM documentation");





if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
		echo "<h2>".$row['title']."</h2><br>";
		echo "<textarea>".$row['text']."</textarea><br><br>";
    }
	echo "<br>";
} else {
    echo "0 results";
}

$conn->close();

?>

</div>
</div>			
				
</div>	
