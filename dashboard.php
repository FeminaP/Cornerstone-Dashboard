<?php
require('header.php');
?>
<style>
#popup
{
	width:560px;
	height:360px;
	background:#00CC33;
	color:#fff;
	padding:20px;
	position:absolute;
	top:0%;
	left:50%;
	margin-top:-500px;
	margin-left:-250px;
}
#popup h1
{
	margin:0px;
	padding:0px;
}

.float{
    width: 100px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
	background-color: white;    
}


</style>

<div id="popup" onclick="hide('popup')">
<p id="demo"></p>

<?php
$conn = new mysqli("localhost","root","","crst_dashboard");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//session_start();
$user = $_SESSION['user'];
echo "<h1>Welcome ".$user."!</h1><br><br>";
echo "Your Task for today: <br><br>";
//echo CURDATE();

$sql="SELECT text FROM reminder WHERE user='$user' and date = CURDATE()  ";
$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        echo  $row["text"]. "<br>";
    } 
} 
$conn->close();

//exit();
?>
</div>
<div class="content">
<p>Sales info for <b id = "month"></b> <b id = "year"> </b>:</p><br>
<?php
$conn = mysqli_connect("localhost","root","","crst_dashboard");

$result1=mysqli_query($conn,"SELECT * FROM job_ticket WHERE estimate_number != 0  ");
$num_rows = mysqli_num_rows($result1);

$result2=mysqli_query($conn,"SELECT * FROM mail_data WHERE processed_by = ''  ");
$num_rows2 = mysqli_num_rows($result2);

$result3=mysqli_query($conn,"SELECT * FROM mail_data WHERE processed_by = 'KM'  ");
$num_rows3 = mysqli_num_rows($result3);

$result4=mysqli_query($conn,"SELECT * FROM mail_data WHERE processed_by = 'AB'  ");
$num_rows4 = mysqli_num_rows($result4);

$result5=mysqli_query($conn,"SELECT * FROM mail_data WHERE processed_by = 'FP'  ");
$num_rows5 = mysqli_num_rows($result5);

$result6=mysqli_query($conn,"SELECT * FROM mail_data WHERE processed_by = 'RP'  ");
$num_rows6 = mysqli_num_rows($result6);

$result7=mysqli_query($conn,"SELECT * FROM invoice WHERE invoice_number != 0  ");
$num_rows7 = mysqli_num_rows($result7);


$conn->close();

?>
<div>Estimates given: <?php echo "$num_rows \n"; ?></div></br>

<div>Job Tickets in Process: <?php echo "$num_rows2 \n"; ?></div></br>

<div><p>Assigned PM Jobs:</p>
Kevin: <?php echo "$num_rows3 \n"; ?><br>
Anna: <?php echo "$num_rows4 \n"; ?><br>
Femina: <?php echo "$num_rows5 \n"; ?><br>
</div></br>

<div>Jobs in Production: <?php echo "$num_rows6 \n"; ?><br></div></br>

<div>Jobs Invoiced: <?php echo "$num_rows7 \n"; ?></div></br>



<?php

$conn = mysqli_connect("localhost","root","","crst_dashboard");
$result8 = mysqli_query($conn,"SELECT job_id,client_name,project_name,due_date,job_status FROM job_ticket");

// all current jobs
echo " <div id='table-scroll'><table id='table' border='1' cellspacing='2' cellpadding='2' class='paginated' >"; // start a table tag in the HTML
echo "<thead>";
echo "<tr><th>  </th><th> Job Id </th><th> Client </th><th> Project Name </th><th> Due Date </th><th> Job Status </th><th> Records Total </th><th> Assigned To </th></tr>";
echo "</thead>";
echo "<tbody>";


if ($result8->num_rows > 0) {
    // output data of each row
	
    while($row8 = $result8->fetch_assoc()) {
		
		$foo=$row8['job_id'];
		
		$result9 = mysqli_query($conn,"SELECT * FROM mail_data WHERE job_id = $foo");
		$row9 = $result9->fetch_assoc();
		
		echo "<tr><th>"."<a href='http://localhost/crst_dashboard/edit_job.php?job_id=$foo'>"."Edit"."</a></th><td>".$row8["job_id"]."</td><td>".  $row8["client_name"]."</td><td>". $row8["project_name"]. "</td><td>". $row8["due_date"]. "</td><td>". $row8["job_status"]."</td><td>". $row9["records_total"]."</td><td>". $row9["processed_by"]."</td></tr>";
    }
	echo "</tbody></table></div><br>";
} else {
    echo "0 results";
}

//most recent timestamps

$result = mysqli_query($conn,"SELECT * FROM timestamp ORDER BY time DESC LIMIT 10");


echo "<table  border='1' cellspacing='2' cellpadding='2'>"; // start a table tag in the HTML
echo "<tr><th> User </th><th> Job </th><th> Time </th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['user'] . "</td><td>" . $row['job'] ."</td><td>".$row['time']."</td></tr>"; 
    }
	echo "<br>";
} else {
    echo "0 results from jobticket";
}
echo "</table>"; //Close the table in HTML
$conn->close();

?>



</div>


<script src="jquery.js"></script>
<script>
var d = new Date();
var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
document.getElementById("demo").innerHTML = "Today's date: "+ d;
document.getElementById("month").innerHTML = monthNames[d.getMonth()];
document.getElementById("year").innerHTML = d.getFullYear();
function hide(target) {
    document.getElementById(target).style.display = 'none';
}

$(document).ready(function(e) {
        $('#popup').animate({"top":"50%","marginTop":"-200px"},1000);
    });
</script>