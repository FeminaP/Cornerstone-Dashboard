


<?php

require ("header.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "crst_dashboard";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!empty($_REQUEST['frmSearch'])){
	
	$term = mysqli_real_escape_string($conn,$_REQUEST['frmSearch']);
	

	$sql = "SELECT * FROM materials WHERE job_id = '$term'"; 
	$result = mysqli_query($conn,$sql); 
	
	
	
	if ($result->num_rows > 0) {

		$row = $result->fetch_assoc();	
	

		$job_id = $row['job_id'];
		$materials_ordered = $row['materials_ordered'];
		$expected = $row['expected'];
		$received = $row['received'];
		$location = $row['location'];
		$checked_in = $row['checked_in'];
		$material = $row['material'];
		$type = $row['type'];
		$vendor = $row['vendor'];
		$quantity = $row['quantity'];
		$expected_quantity= $row['expected_quantity'];
		$height = $row['height'];
		$weight = $row['weight'];
		$size = $row['size'];
		$display = "yes";
    
	} 
	else {
		echo "No results found";
		$display = "no";
	}
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    if($display = "no"){
        $("form").hide();
    }
	if($display = "yes"){
        $("form").show();
    }
});
</script>

<div class="content">
<form action="edit_w_m.php" method="post">
				<div class="newclienttab-inner">
					<div class="tabinner detail">
					<label>Job Id</label>
					<input name="job_id" type="text" class="contact-prefix" value="<?php echo $job_id; ?>">
					</div>
					<div class="tabinner detail">
					<label>Materials Ordered</label>
					<input name="materials_ordered" type="date" class="contact-prefix" value="<?php echo $materials_ordered; ?>">
					</div>
					<div class="tabinner detail">
					<label>Expected Date</label>
					<input name="expected" type="date" class="contact-prefix" value="<?php echo $expected; ?>">
					</div>
					<div class="tabinner detail">
					<label>Received Date</label>
					<input name="received" type="date" class="contact-prefix" value="<?php echo $received; ?>">
					</div>
					<div class="tabinner detail">
					<label>Location</label>
					<input name="location" type="text" class="contact-prefix" value="<?php echo $location; ?>">
					</div>
				</div>
				<div class="newclienttab-inner">
					<div class="tabinner detail">
					<label>Checked In</label>
					<input name="checked_in" type="text" class="contact-prefix" value="<?php echo $checked_in; ?>">
					</div>
					<div class="tabinner detail">
					<label>Material</label>
					<input name="material" type="text" class="contact-prefix" value="<?php echo $material; ?>">
					</div>
					<div class="tabinner detail">
					<label>Type</label>
					<input name="type" type="text" class="contact-prefix"value="<?php echo $type; ?>">
					</div>
					<div class="tabinner detail">
					<label>Quantity</label>
					<input name="quantity" type="text" class="contact-prefix" value="<?php echo $quantity; ?>">
					</div>
					<div class="tabinner detail">
					<label>Vendor</label>
					<input name="vendor" type="text" class="contact-prefix" value="<?php echo $vendor; ?>">
					</div>
					<div class="tabinner detail">
					<label>Expected Quantity</label>
					<input name="expected_quantity" type="text" class="contact-prefix" value="<?php echo $expected_quantity; ?>">
					</div>
					<div class="tabinner detail">
					<label>Height</label>
					<input name="height" type="text" class="contact-prefix" value="<?php echo $height; ?>">
					</div>
					<div class="tabinner detail">
					<label>Weight</label>
					<input name="weight" type="text" class="contact-prefix" value="<?php echo $weight; ?>">
					</div>
					<div class="tabinner detail">
					<label>Size</label>
					<input name="size" type="text" class="contact-prefix" value="<?php echo $size; ?>">
					</div>
				</div>
				<div class="form-bottom">
					<input id="btn" type="submit" value="Save" name="submit_form">
				</div>
			</form>
		</div>