<script>
function validateForm() 
{
    var name = document.forms["contactform"]["name"].value;
    if (name==null || name=="") 
	{
		alert("<?php if($_SESSION['lang']=="en") echo "Name must be entered"; else if($_SESSION['lang']=="sr") echo "Ime mora biti uneto"; ?>");
        return false;
    }
	
	var comm = document.forms["contactform"]["comments"].value;
    if (comm==null || comm=="") 
	{
		alert("<?php if($_SESSION['lang']=="en") echo "Comments must be entered"; else if($_SESSION['lang']=="sr") echo "Komentar mora biti unet"; ?>");
        return false;
    }
	
	var comm = document.forms["contactform"]["captcha_code"].value;
    if (comm==null || comm=="") 
	{
		alert("<?php if($_SESSION['lang']=="en") echo "Captcha must be entered"; else if($_SESSION['lang']=="sr") echo "Captcha mora biti unet"; ?>");
        return false;
    }
}
</script>

<?php

$name = '';
$comments = '';
$captcha = '';

if(isset($_GET['err']) && $_GET['err'] != 0)
{
	if(isset($_SESSION['contact_name']))
	{
		$name = $_SESSION['contact_name'];
	}

	if(isset($_SESSION['contact_comments']))
	{
		$comments = $_SESSION['contact_comments'];
	}

	if(isset($_SESSION['contact_captcha']))
	{
		$captcha = $_SESSION['contact_captcha'];
	}
}

?>

<form name="contactform" method="post" action="send_form_email.php" onsubmit="return validateForm();">
	<table width="450px">
		<tr>
			<td valign="top" align="right">
				<label for="name"><?php if($_SESSION['lang']=="en") echo "Name"; else if($_SESSION['lang']=="sr") echo "Ime"; ?> *</label>
			</td>
			<td valign="top">
				<input type="text" name="name" value="<?php echo $name;?>" maxlength="50" size="30" style="width: 350px;">
			</td>
		</tr>
		<tr>
			<td valign="top" align="right">
				<label for="comments"><?php if($_SESSION['lang']=="en") echo "Comment"; else if($_SESSION['lang']=="sr") echo "Komentar"; ?> *</label>
			</td>
			<td valign="top">
				<textarea name="comments" maxlength="1000" cols="25" rows="6" style="width: 350px; resize: none;"><?php echo $comments;?></textarea>
			</td>
		</tr>
		<tr>
			<td valign="top" align="right">
				Captcha * <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" height="50" width="150" />
			</td>
			<td valign="top">
				<input type="text" name="captcha_code" value="<?php echo $captcha;?>" size="10" maxlength="6" />
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center">
				<input type="submit" value="<?php if($_SESSION['lang']=="en") echo "Submit"; else if($_SESSION['lang']=="sr") echo "Pošalji"; ?>">
			</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_GET['err']))
	{
		$err_msg = "ERROR";
		
		if($_GET['err'] == 0)
		{
			if($_SESSION['lang']=="en")
			{
				$err_msg = "Thank you for contacting us.";
			}
			else if($_SESSION['lang']=="sr")
			{
				$err_msg = "Hvala Vam što ste nas kontaktirali";
			}
		}
		else if($_GET['err'] == 1)
		{
			if($_SESSION['lang']=="en")
			{
				$err_msg = "The security code entered was incorrect. Please try again.";
			}
			else if($_SESSION['lang']=="sr")
			{
				$err_msg = "Uneti sigurnosni kod nije tačan. Molimo pokušajte ponovo.";
			}
		}
		
		echo "<span>".$err_msg."</span>";
	}
?>