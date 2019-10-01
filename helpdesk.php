<?php include "header.html" ?>
		<div class="requests">
			<img src="./images/helpdesk.svg">
			<div class="requestType">
				<h2>Get Helpdesk Support</h2>
				<p>Get assistance for general IT problems and questions on personal computers</p>
				<!--<p><a href="helpdesk.html">helpdesk</a> / <a href="department.html">department requests</a> / <a href="email.html">email forwarding</a> / <a href="phone.html">phone help</a> / <a href="language.html">language software</a> / <a href="software dev">software dev</a></p>-->
			</div>
		</div>

		<div class="info" id="1">
			<form name="infoForm" class="requestForm" action="jira.php" onsubmit="return validateForm(['username', 'summary'])" method="post">
				<input type="text" name="requestID" value="1" class="hidden">
				<div class="fieldGroup">
					<label class="fieldLabel">Jira Username: <em>(required)</em></label>
					<input class="text" type="text" name="username">
					<div class="description">
					Description of what username should be used
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
					<label class="fieldLabel">Operatiing System:</label>
					<select name="customfield_11711">
						<option value="Windows" selected>Windows</option>
						<option value="Android">Android</option>
						<option value="iOS">iOS</option>
						<option value="Linux">Linux</option>
						<option value="Mac OSX">Mac OSX</option>
						<option value="Other / Multiple">Other / Multiple</option>
					</select>
					<div class="description">
					Select the system that is installed on your computer.
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Computer Username: </label>
					<input class="text" type="text" name="customfield_10620">
					<div class="description">
					Username to log into the computer. We may need a user with administrative privileges.
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Computer Password: </label>
					<input class="text" type="Password" name="customfield_10619">
					<div class="description">
					The password for your computer
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Contact Information: </label>
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
				<div class="fieldGroup">
					<label class="fieldLabel">Equipment left at helpdesk: </label>
					<input class="text" type="text" name="customfield_10636">
					<div class="description">
					e.g. computer, cables, modem, case, etc.
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Priority:</label>
					<select name="customfield_10648">
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