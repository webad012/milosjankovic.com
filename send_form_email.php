<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
	$securimage = new Securimage();

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "webad012@gmail.com";
	$email_from  = "contact@milosjankovic.com";
	$email_subject = "kontakt mail";
	
	function Redirect($error_msg)
	{
		header('Location: index.php?page=contact&err='.$error_msg);
		exit();
	}

	$name = $_POST['name']; // required
	$comments = $_POST['comments']; // required
	$captcha = $_POST['captcha_code'];
	
	if ($securimage->check($captcha) == false) 
	{
		// the code was incorrect
		// you should handle the error so that the form processor doesn't continue
		// or you can use the following code if there is no validation or you do not know how
		//echo "The security code entered was incorrect.<br /><br />";
		//echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
		//exit;
	
		$_SESSION['contact_name'] = $name;
		$_SESSION['contact_comments'] = $comments;
		$_SESSION['contact_captcha'] = $captcha;
		
		Redirect('1');
	}

	$email_message = "Form details below.\n\n";

	function clean_string($string) 
	{
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Comments: ".clean_string($comments)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers); 
	
	$_SESSION['contact_name'] = '';
	$_SESSION['contact_comments'] = '';
	$_SESSION['contact_captcha'] = '';

	Redirect('0');	
?>