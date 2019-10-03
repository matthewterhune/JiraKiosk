Simplified Kiosk Interface for Jira
===================================

Using the normal Jira web interface as a helpdesk kiosk presents several problems:

  1. Users may forget to log out, and subsequent tickets will be logged under the wrong user
  2. Users may not remember their password after a long absence

This simplified web interface allows users to log tickets without signing in to Jira

### API User

A Jira user with admin permissions is required to authenticate and to create tickets on behalf of other users. Username / password is defined in the postRequests function in jira.php

Authentication is currently via basic authentication with username and password. This may not be supported in the future, and Jira recommends using API tokens instead, but I have not been able to figure out how to generate API tokens on a local install of Jira.

### Creating / Updating Forms

The submission forms for each ticket type are currently manually defined. If the form is changed in Jira, it must also be changed separately here. Each form must also correspond to a case in jira.php that constructs the JSON for the api request. The custom fields in the JSON should match the actual custom field ids in your Jira form.

To retrieve the fields currently available for a request type, look at:
https://your_jira_install.com/rest/servicedeskapi/servicedesk/[desk-id]/requesttype/[request-id]/field
where [desk-id] is the id of the service desk and [request-id] is the id of the request type

Information on available service desks and request types can be found with the following:
https://your_jira_install.com/rest/servicedeskapi/servicedesk
https://your_jira_install.com/rest/servicedeskapi/servicedesk/[desk-id]/requesttype

If a form needs to be updated, first the form specific php file should be changed, then the switch statement in jira.php should be modified to match.

### Index

The index page contains only one active form section (this is the only one we currently use), but example sections for links to other forms are left as comments.