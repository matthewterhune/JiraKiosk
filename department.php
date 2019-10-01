<?php include "header.html" ?>
		<div class="requests">
			<img src="./images/department.svg" style="width: 32px">
			<div class="requestType">
				<h2>Departmental Support</h2>
				<p>Get assistance with department systems setup and troubleshooting</p>
			</div>
		</div>

		<div class="info" id="12">
			<form name="infoForm" class="requestForm" action="jira.php" onsubmit="return validateForm(['username', 'summary', 'customfield_10616'])" method="post">
				<input type="text" name="requestID" value="12" class="hidden">
				<div class="fieldGroup">
					<label class="fieldLabel">Jira Username: <em>(required)</em></label>
					<input class="text" type="text" name="username">
					<div class="description">
					Description of how to find your Jira username
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Summary: <em>(required)</em></label>
					<input class="text" type="text" name="summary">
					<div class="description">
					e.g. 'computer displays an error message on startup'
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Description: </label>
					<textarea class="textArea" name="description"></textarea>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Department Username: </label>
					<input class="text" type="text" name="customfield_10622">
					<div class="description">
					e.g. CAM-general
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Department Password: </label>
					<input class="text" type="Password" name="customfield_10619">
					<div class="description">
					The password for the previous username
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Contact Information:  <em>(required)</em></label>
					<input class="text" type="text" name="customfield_10616">
					<div class="description">
					Your extension, mobile number, or email
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Account Number: </label>
					<input class="text" type="text" name="customfield_10637">
					<div class="description">
					e.g. 21100-123456
					</div>
				</div>
				<div class="fieldGroup hidden">
					<label class="fieldLabel">Priority:</label>
					<select name="customfield_10647">
						<option value="Urgent">Urgent</option>
						<option value="High">High</option>
						<option value="Normal" selected>Normal</option>
						<option value="Low">Low</option>
					</select>
					<div class="description">

					</div>
				</div>
				<div class="fieldGroup">
					<input class="submitButton" type="submit" value="Submit">
					<a href="index.php" class="cancel">Cancel</a>
				</div>
			</form>
		</div>
<?php include "footer.html" ?>