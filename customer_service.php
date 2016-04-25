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


$result = mysqli_query($conn,"SELECT * FROM invoice");


echo " <div id='table-scroll'><table id='table' border='1' cellspacing='2' cellpadding='2' class='paginated' >"; // start a table tag in the HTML
echo "<thead>";
echo "<tr><th>  </th><th> Job Id </th><th> Postage </th><th> Invoice </th><th> Residual </th><th> Follow Up </th><th> Notes </th><th> Status </th><th> Reason </th></tr>";
echo "</thead>";
echo "<tbody>";


if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		

		$foo=$row['job_id'];
		echo "<tr><th>"."<a href='http://localhost/crst_dashboard/edit_cs.php?job_id=$foo'>"."Edit"."</a></th><td>".$row["job_id"]."</td><td>".  $row["postage"]."</td><td>". $row["invoice_number"]. "</td><td>". $row["residual_returned"]. "</td><td>". $row["2week_followup"]."</td><td>". $row["notes"]. "</td><td>". $row["status"]. "</td><td>". $row["reason"]. "</td></tr>";
    }
	echo "</tbody></table></div><br>";
} else {
    echo "0 results";
}

$conn->close();

?>

</div>