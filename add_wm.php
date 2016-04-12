<?php
require ("header.php");
?>
<div class="content">
	<div class="contacts-title">
		<h2>New Weights and Measure</h2>
		<a class="save-button" href="#">Save</a>
	</div>
	<div class="dashboard-detail">
		<div class="newcontacts-outer">
			<div class="tab-content">
				<form action="add_w_m.php" method="post">
					<div class="newclienttab-inner">
						<div class="tabinner detail">
						<label>Job Id</label><select name='job_id' class="contact-prefix">
						<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname= "crst_dashboard";
						// Create Connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$result = $conn->query("select job_id from job_ticket");
						
						while ($row = $result->fetch_assoc()) {
									  unset($job_id);
									  $job_id = $row['job_id']; 
									  echo '<option value="'.$job_id.'">'.$job_id.'</option>';
									 
						}
						echo "</select>";
						echo "</div>";
						?>

						<div class="tabinner detail">
						<label>Received Date</label>
						<input name="received" type="date" class="contact-prefix">
						</div>
						<div class="tabinner detail">
						<label>Location</label><select name='location' class="contact-prefix">
						<?php
						$result1 = $conn->query("select location from materials");
						
						while ($row1 = $result1->fetch_assoc()) {
									  unset($location);
									  $location = $row1['location']; 
									  echo '<option value="'.$location.'">'.$location.'</option>';
									 
						}
						
						?>
						</select>
						</div>
						<div class="tabinner detail">
						<label>Checked In</label><select name='checked_in' class="contact-prefix">
						<?php
						$result1 = $conn->query("select checked_in from materials");
						
						while ($row1 = $result1->fetch_assoc()) {
									  unset($checked_in);
									  $checked_in = $row1['checked_in']; 
									  echo '<option value="'.$checked_in.'">'.$checked_in.'</option>';
									 
						}
						
						?>
						</select>
						</div>
						<div class="tabinner detail">
						<label>Material</label><select name='material' class="contact-prefix">
						<?php
						$result1 = $conn->query("select material from materials");
						
						while ($row1 = $result1->fetch_assoc()) {
									  unset($material);
									  $material = $row1['material']; 
									  echo '<option value="'.$material.'">'.$material.'</option>';
									 
						}
						
						?>
						</select>
						<input name="material" type="text" class="contact-prefix">
						</div>
						<div class="tabinner detail">
						<label>Type</label><select name='type' class="contact-prefix">
						<?php
						$result1 = $conn->query("select type from materials");
						
						while ($row1 = $result1->fetch_assoc()) {
									  unset($type);
									  $type = $row1['type']; 
									  echo '<option value="'.$type.'">'.$type.'</option>';
									 
						}
						
						?>
						</select>
						<input name="type" type="text" class="contact-prefix">
						</div>
						<div class="tabinner detail">
						<label>Quantity</label>
						<input name="quantity" type="text" class="contact-prefix">
						</div>
						<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname= "crst_dashboard";
						// Create Connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						$result = $conn->query("select vendor_name from vendors");
						echo("<div class='tabinner detail'>");
						echo "<label>Vendor</label><select name='vendor'>";
						while ($row = $result->fetch_assoc()) {
									  unset($vendor_name);
									  $vendor_name = $row['vendor_name']; 
									  echo '<option value="'.$vendor_name.'">'.$vendor_name.'</option>';
									 
						}
						echo "</select>";
						echo "</div>";
						?>
						
						<div class="tabinner detail">
						<label>Height</label>
						<input name="height" type="text" class="contact-prefix">
						</div>
						<div class="tabinner detail">
						<label>Weight</label>
						<input name="weight" type="text" class="contact-prefix">
						</div>
						<div class="tabinner detail">
						<label>Size</label>
						<input name="size" type="text" class="contact-prefix">
						</div>
					</div>
					<div class="form-bottom">
						<input id="btn" type="submit" value="Save" name="submit_form">
					</div>
				</form>
			</div>
		</div>
	
	</div>
</div>