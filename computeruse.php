<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
	<meta name="description" content="Use Policy for using computers owned by WSI">
  <title>Computer Use Policy | Woodruff Scientific, Inc.</title>
  </head>

  <body>
<?php $googleTagManager = file_get_contents('googleTagManager.html'); echo $googleTagManager; ?>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	
	<ol class="breadcrumb">
  		<li><a href="index">Home</a></li>
 	 	<li><a href="company">Company</a></li>
  		<li class="active">Computer Use Policy</li>
	</ol>
	<h1>User Account and Password Policies</h1>
	<p>A user is given a username and associated password that permits her/him
to access WSI resources.  This username/password pair may be used by a
single individual only.  Passwords may not be shared and must be created
or changed using specified rules.   WSI will disable a user who shares
any one of her/his passwords with another person.  If a person using a
username/password pair is not the one who is officially registered with
WSI as the owner of that username, then "sharing" has occurred and all
usernames associated with the owner of the shared username will be
disabled.</p>
	<p>The computer use policies and security rules that apply to all users of
WSI resources are as follows:</p>

	<h3>User Accountability</h3>
	<p>Users are accountable for their actions. Violations of policy may result
in applicable administrative or legal sanctions.</p>

	<h3>Resource Use</h3>
	<p>Resources provided by WSI are to be used only for activities authorized
by WSI. The use of WSI resources for personal benefit is prohibited.
WSI resources are provided to users without any warranty. WSI will not
be held liable in the event of any system failure or loss of data. WSI
resources cannot be used for any military or defense end use or
application, or to facilitate any transaction that would otherwise
violate U.S. export control regulations.</p>

	<h3>Passwords and Usernames</h3>
	<p>A user identifier known as a username and password are required of all
users. Passwords must be changed at WSI's request. Passwords must not be
shared with any other person and must be changed as soon as possible
after an unacceptable exposure, suspected compromise or by direction of
a WSI staff member.</p>

<h3>Notification</h3>

<p>Users must notify WSI immediately when they become aware that any of the
accounts used to access WSI have been compromised. Users should promptly
inform WSI of any changes in their contact information.</p>

<h3>Software and Data</h3>

<p>WSI cluster is intended for fundamental research. Use, storage, or
processing of export-controlled software or Technical Data (as defined
by EAR (Export Administration Regulations) or ITAR (International
Traffic in Arms Regulations)), proprietary information, personally
identifiable information, and health information (such as data covered
by HIPPA, the Health Information Portability and Accountability Act) may
be legally restricted and is not permitted without legal review and
authorization, and written permission of WSI.</p>

<p>All software used on WSI computers must be appropriately acquired and
used according to the appropriate licensing. Possession, use or
transmission of illegally obtained software is prohibited. Likewise,
users shall not copy, store or transfer copyrighted software or data,
except as permitted by the owner of the copyright.</p>

<h3>Use by Foreign National</h3>

<p>Use by foreign nationals is generally permitted regardless of whether
access to WSI is from the United States or abroad. However, OFAC
(Department of Treasury’s Office of Foreign Assets Control) regulations
prohibit use of WSI services by citizens of Cuba, Iran, Syria or Sudan
while residing and/or working in one of those countries.</p>

<h3>Deviations from Authorized Privileges Not Allowed</h3>

<p>General: Users are not allowed to deviate from the terms of this WSI
Computer User Agreement in any way, including, but not limited to, the
following:</p>

<p>Unauthorized Access: Users are prohibited from attempting to send or
receive unintended messages or access information by unauthorized means,
such as imitating another system, impersonating another user or other
person, misuse of legal user credentials (usernames, passwords, etc.),
or by causing some system component to function incorrectly.</p>

<p>Altering Authorized Access: Users are prohibited from changing or
circumventing access controls that allow themselves or others to perform
actions outside their intended authorized privileges.</p>

<p>Reconstruction of Information or Software: Users are not allowed to
reconstruct or recreate information or software for which they are not
authorized.</p>

<p>Data Modification or Destruction: Users are prohibited from taking
actions that intentionally modify or delete information or programs for
which they are not authorized.</p>

<p>Malicious Software: Users must not intentionally introduce or use
malicious software, including, but not limited to, computer viruses,
Trojan horses, or worms.</p>

<p>Denial of Service Actions: Users may not use WSI resources to interfere
with any service availability, either at WSI, or at other sites.</p>

<h3>Data Retention</h3>

<p>WSI reserves the right to remove any data at any time and/or transfer
data to other individuals working on the same or similar project once a
user account is deleted or a person no longer has a business association
with WSI.</p>

<h3>Account Usage</h3>

<p>Users are not allowed to share their accounts with others, except with
the express written permission of the WSI Director.</p>

<h3>Monitoring and Privacy</h3>

<p>Users have no explicit or implicit expectation of privacy. WSI retains
the right to and actively monitors the content of all activities on WSI
systems and networks and to access any computer file without prior
knowledge or consent of users, senders or recipients.  WSI may retain
copies of any network traffic, computer files or messages indefinitely
without user's prior knowledge or consent.</p>

<p>WSI personnel and users are required to address, safeguard against and
report misuse, abuse and criminal activities. Misuse of WSI resources
can lead to temporary or permanent disabling of accounts, loss of DOE
allocations, and administrative or legal actions.</p>
	</div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>
