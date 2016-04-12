<?php
require ("header.php");
?>
<div class="content">
<div class="contacts-title">
	<h2>New Job Ticket</h2>
	<a class="save-button" href="#">Save</a>
</div>
<div class="dashboard-detail">
	<div class="newcontacts-outer">
		<div class="tab-content">
			<form action="add_job_ticket.php" method="post">
				<div class="newclienttab-inner">
				<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname= "crst_dashboard";
						// Create Connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						$result = $conn->query("select client_name from client_info");
						echo("<div class='tabinner detail'>");
						echo "<label>CLient</label><select name='client_name'>";
						while ($row = $result->fetch_assoc()) {
									  unset($client_name);
									  $client_name = $row['client_name']; 
									  echo '<option value="'.$client_name.'">'.$client_name.'</option>';
									 
						}
						echo "</select>";
						echo "</div>";
						?>
					<div class="tabinner detail">
					<label>Job Name</label>
					<input name="project_name" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Ticket Date</label>
					<input name="ticket_date" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Due Date</label>
					<input name="due_date" type="date" class="contact-prefix">
					</div>
					<?php
					
						
						$result1 = $conn->query("select pm from projectmanager");
						echo("<div class='tabinner detail'>");
						echo "<label>Created By</label><select name='created_by'>";
						
						while ($row1 = $result1->fetch_assoc()) {
									  unset($pm);
									  $created_by = $row1['pm']; 
									  echo '<option value="'.$created_by.'">'.$created_by.'</option>';
									 
						}
						echo "</select>";
						//echo "<input name='created_by' type='text' class='contact-prefix'>";
						echo "</div>";
						?>
					
					<div class="tabinner detail">
					<label>Estimate Number</label>
					<input name="estimate_number" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Materials Ordered</label>
					<input name="materials_ordered" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Materials Expected</label>
					<input name="materials_expected" type="date" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Expected Quantity</label>
					<input name="expected_quantity" type="text" class="contact-prefix">
					</div>
					<div class="tabinner detail">
					<label>Special Instructions</label>
					<textarea name="special_instructions" class="contact-prefix"></textarea>
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
		