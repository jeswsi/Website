<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
	$head = file_get_contents('header.html');
	echo $head;	
	?>
  <meta name="description" content="">
  <title>Thanks for Applying! | Woodruff Scientific, Inc.</title>
  </head>

  <body>
    <div id="wrap">
    <div class="container">

	<?php
	$navbar = file_get_contents('navbar.html');
	echo $navbar;	
	?>	
	<ol class="breadcrumb">
  		<li><a href="index">Home</a></li>
 	 	<li><a href="#">Company</a></li>
  		<li class="active">Thanks for Applying!</li>
	</ol>
	<h1>Thanks for Applying!</h1>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$school = $_POST['school'];
$degree = $_POST['degree'];
$major = $_POST['major'];
$minor = $_POST['minor'];
$credits = $_POST['credits'];
$languages = $_POST['languages'];
$math = $_POST['math'];
$how = $_POST['how'];
$why = $_POST['why'];
$anythingelse = $_POST['anythingelse'];


$message = "<p>Thanks for applying ". $name . ". We've sent a confirmation email to " . $email . ".<br /><a href='shortcourse'>Back to course information</a>";
$emailto = $email;
$toname = $name;
$emailfrom = 'bootcamp@woodruffscientific.com';
$fromname = 'Woodruff Scientific Inc.';
$subject = 'Thanks for Applying to the Scientific Computing Bootcamp';
$messagebody = 'Dear ' . $name . ",\n\n Thank you for applying to the Scientific Computing Bootcamp at WSI. If you have any questions, feel free to reply to this email.\n\n\n Best regards,\n Woodruff Scientific";
$headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;
//if ( $test = mail($emailto, $subject, $messagebody, $headers, $params) ){
//	$m = "yay";
//} else {
//	$m ="dang";
//}

echo $message;
//echo $m;

$emailto = 'bootcamp@woodruffscientific.com';
$toname = 'WSI';
$emailfrom = 'bootcamp@woodruffscientific.com';
$fromname = 'WSI';
$subject = $name . "'s Application to the Scientific Computing Bootcamp";
$messagebody = 
	'Name: ' . $name . "\n" .
	'Email: ' . $email . "\n" .
	'School/Employer: ' . $school . "\n" .
	'Degree: ' . $degree . "\n" .
	'Major: ' . $major . "\n" .
	'Minor: ' . $minor . "\n" .
	'Credits completed in major:' . $credits . "\n" .
	'Computer Familiarity: ' . $languages . "\n\n" .
	'Math Familiarity: ' . $math . "\n\n" .
	'How they heard about course: ' . $how . "\n\n" .
	'Why they are interested: ' . $why . "\n\n" .
	'Additional info: ' . $anythingelse . "\n"
;
$headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;
if ( $test = mail($emailto, $subject, $messagebody, $headers, $params) ){
	$m = "yay";
} else {
	$m ="dang";
}
//echo $m;
// $test should be TRUE if the mail function is called correctly
?>
</h1>

    </div> <!-- /container -->
    </div> <!-- /wrap -->

	<?php
	$footer = file_get_contents('footer.html');
	echo $footer;	
	?>	   
  </body>
</html>

