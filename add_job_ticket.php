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
$materials_ordered = $_POST['materials_ordered'];
$materials_expected = $_POST['materials_expected'];
$expected_quantity = $_POST['expected_quantity'];



//$one = $_SESSION["client_name"];
//$two = $_SESSION['project_name'];

$mail_class = $_POST['mail_class'];
$rate = $_POST['rate'];
$processing_category = $_POST['processing_category'];
$mail_dim = $_POST['mail_dim'];
$weights_measures = $_POST['weights_measures'];
$permit = $_POST['permit'];
$bmeu = $_POST['bmeu'];
$based_on = $_POST['based_on'];
$non_profit_number = $_POST['non_profit_number'];

$data_loc = $_POST['data_loc'];
$records_total = $_POST['records_total'];
$domestic = $_POST['domestic'];
$foreigns = $_POST['foreigns'];
$data_source = $_POST['data_source'];
$data_received = $_POST['data_received'];
$data_completed = $_POST['data_completed'];
$processed_by = $_POST['processed_by'];
$dqr_sent = $_POST['dqr_sent'];
$exact = $_POST['exact'];
$mail_foreigns = $_POST['mail_foreigns'];
$household = $_POST['household'];
$ncoa = $_POST['ncoa'];


$hold_postage = (isset($_POST['hold_postage'])) ? "yes" : "no";
$postage_paid = (isset($_POST['postage_paid'])) ? "yes" : "no";
$print_template = $_POST['print_template'];
$special_address = $_POST['special_address'];
$delivery = $_POST['delivery'];
$completed = $_POST['completed'];
@$tasks_array= $_POST['tasks']; 
if( is_array($tasks_array)){
$tasks = implode(', ', $_POST['tasks']);
}
$task1 = $_POST['task1'];
$task2 = $_POST['task2'];
$task3 = $_POST['task3'];

$sql = "INSERT INTO job_ticket(client_name,project_name,ticket_date,due_date,created_by,special_instructions,materials_ordered,materials_expected,estimate_number,expected_quantity) VALUES ('$client_name', '$project_name', '$ticket_date', '$due_date','$created_by','$special_instructions','$materials_ordered','$materials_expected','$estimate_number','$expected_quantity')";
$result = $conn->query($sql) or die('Error querying database 0.');


$result1 = mysqli_query($conn,"SELECT job_id from job_ticket WHERE client_name='$client_name' and project_name='$project_name'");
if ($result1->num_rows > 0) {
	while($row1 = $result1->fetch_assoc()) {
		$_SESSION["job_id"]=$row1['job_id'];
	}
}
$job_id = $_SESSION["job_id"];

$sql1 = "INSERT INTO mail_info(job_id,mail_class,rate,processing_category,mail_dim,weights_measures,permit,bmeu,based_on,non_profit_number) VALUES ('$job_id', '$mail_class', '$rate', '$processing_category','$mail_dim','$weights_measures','$permit','$bmeu','$based_on','$non_profit_number')";
$result2 = $conn->query($sql1) or die('Error querying database 1.');

$sql2 = "INSERT INTO mail_data(job_id,data_loc,records_total,domestic,foreigns,data_source,data_received,data_completed,processed_by,dqr_sent,exact,mail_foreigns,household,ncoa) VALUES ('$job_id', '$data_loc', '$records_total', '$domestic','$foreigns','$data_source','$data_received','$data_completed','$processed_by','$dqr_sent','$exact','$mail_foreigns','$household','$ncoa')";
$result3 = $conn->query($sql2) or die('Error querying database 2.');

$sql3 = "INSERT INTO production(job_id,hold_postage,postage_paid,print_template,special_address ,delivery,completed,task1,task2,task3,tasks) VALUES ('$job_id', '$hold_postage', '$postage_paid', '$print_template','$special_address','$delivery','$completed','$task1','$task2','$task3','$tasks')";
$result4 = $conn->query($sql3) or die('Error querying database 3.');



 
$conn->close();

header("location: http://localhost/crst_dashboard/job_ticket.php");
exit();

?>

