<?php include "header.html" ?>
		<div class="requests">
			<img src="./images/language.svg">
			<div class="requestType">
				<h2>Language Software Support</h2>
				<p>Get assistance for problems with Language Software</p>
				<!--<p><a href="helpdesk.html">helpdesk</a> / <a href="department.html">department requests</a> / <a href="email.html">email forwarding</a> / <a href="phone.html">phone help</a> / <a href="language.html">language software</a> / <a href="software dev">software dev</a></p>-->
			</div>
		</div>

		<div class="info" id="22">
			<form name="infoForm" class="requestForm" action="jira.php" onsubmit="return validateForm(['username', 'summary'])" method="post">
				<input type="text" name="requestID" value="22" class="hidden">
				<div class="fieldGroup">
					<label class="fieldLabel">Ukarumpa Username: <em>(required)</em></label>
					<input class="text" type="text" name="username">
					<div class="description">
					The first part of your email, e.g. m-e.terhune
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Summary: <em>(required)</em></label>
					<input class="text" type="text" name="summary">
					<div class="description">
					e.g. "Can't install Paratext"
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Description: </label>
					<textarea class="textArea" name="description"></textarea>
					<div class="description">
					Add all the details of the issue, including versions, operating system, errors, etc.
					</div>
				</div>
				<div class="fieldGroup">
					<label class="fieldLabel">Program:</label>
					<select name="customfield_11310">
						<option value="Adapt it">Adapt it</option>
						<option value="Bloom">Bloom</option>
						<option value="ELAN">ELAN</option>
						<option value="FieldWorks">FieldWorks</option>
						<option value="InKey">InKey</option>
						<option value="Logos">Logos</option>
						<option value="Paratext">Paratext</option>
						<option value="SayMore">SayMore</option>
						<option value="Translator's Workplace">Translator's Workplace</option>
						<option value="WeSay">WeSay</option>
						<option value="Other">Other</option>
						<option value="None" selected>None</option>
					</select>
					<div class="description">
					Pick the program you need help with
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
					<input class="submitButton" type="submit" value="Submit">
					<a href="index.php" class="cancel">Cancel</a>
				</div>
			</form>
		</div>
<?php include "footer.html" ?>