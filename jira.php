<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function escapeJsonString($value) { # list from www.json.org: (\b backspace, \f formfeed)
    $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
}

foreach($_POST as $i => $item) {
	$_POST[$i] = escapeJsonString($_POST[$i]);
}

switch ($_POST["requestID"]) {
	case "1":
		$postfields =
		'{"serviceDeskId": "1","requestTypeId": "' . $_POST['requestID'] . '","requestFieldValues": 
			{"summary": "' . $_POST['summary'] . '",
			"description": "' . $_POST['description'] . '",
			"customfield_11711": {"value": "' . $_POST['customfield_11711'] . '"},
			"customfield_10620": "' . $_POST['customfield_10620'] . '",
			"customfield_10619": "' . $_POST['customfield_10619'] . '",
			"customfield_10616": "' . $_POST['customfield_10616'] . '",
			"customfield_10637": "' . $_POST['customfield_10637'] . '",
			"customfield_10636": "' . $_POST['customfield_10636'] . '",
			"customfield_10648": {"value": "' . $_POST['customfield_10648'] . '"}},
		"raiseOnBehalfOf": "' . $_POST['username'] . '"}';
		break;
	case "12":
		$postfields =
		'{"serviceDeskId": "1","requestTypeId": "' . $_POST['requestID'] . '","requestFieldValues": 
			{"summary": "' . $_POST['summary'] . '",
			"description": "' . $_POST['description'] . '",
			"customfield_10622": {"name":"' . $_POST['customfield_10622'] . '"},
			"customfield_10619": "' . $_POST['customfield_10619'] . '",
			"customfield_10616": "' . $_POST['customfield_10616'] . '",
			"customfield_10637": "' . $_POST['customfield_10637'] . '",
			"customfield_10647": {"value": "' . $_POST['customfield_10647'] . '"}},
		"raiseOnBehalfOf": "' . $_POST['username'] . '"}';
		break;
	case "22":
		$postfields =
		'{"serviceDeskId": "1","requestTypeId": "' . $_POST['requestID'] . '","requestFieldValues": 
			{"summary": "' . $_POST['summary'] . '",
			"description": "' . $_POST['description'] . '",
			"customfield_11310": {"value": "' . $_POST['customfield_11310'] . '"},
			"customfield_10620": "' . $_POST['customfield_10620'] . '",
			"customfield_10619": "' . $_POST['customfield_10619'] . '",
			"customfield_10616": "' . $_POST['customfield_10616'] . '"},
		"raiseOnBehalfOf": "' . $_POST['username'] . '"}';
		break;
	default:
		break;
}


function postRequest ($pf) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://your_jira_install.com/rest/servicedeskapi/request/');  #Substitute your jira url
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_USERPWD, 'username:password');  #Substitute the username and password for your jira api user
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $pf);
	curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: application/json"));
	return curl_exec($ch);
}


$postResults = postRequest($postfields);
$jr = json_decode($postResults, true);

header( "refresh:120;url=index.php" );

if (strpos($postResults, 'errorMessage') !== false) {
    include "error.php";
    echo '<p>'.$postResults.'</p></div>';
    include "footer.html";
} else {
	include "success.php";
	echo '<div class="resultsWrapper"><table class="resultsTable"><tr><td>Ticket Number:</td><td>'.$jr["issueKey"].
	'</td></tr><tr><td>Reporter:</td><td>'.$jr["reporter"]["displayName"].
	'</td></tr><tr><td>Summary:</td><td>'.$jr["requestFieldValues"][0]["value"].
	'</td></tr></table></div><br>';?>
	<a onclick="document.getElementById('APIResult').style.display='';return false;" href=""> Details...</a>
	<?php
	echo '<p style="display: none" Id="APIResult">'.$postResults.'</p></div>';
	include "footer.html";
}

?>