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
</style>

<div id="popup" onclick="hide('popup')">
<p id="demo" ></p>

<?php
$conn = new mysqli("localhost","root","","crst_dashboard");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();
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

<script src="jquery.js"></script>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = "Today's date: "+ d;

function hide(target) {
    document.getElementById(target).style.display = 'none';
}

$(document).ready(function(e) {
        $('#popup').animate({"top":"50%","marginTop":"-200px"},1000);
    });
</script>