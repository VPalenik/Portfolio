<?php 

header('Content-type: text/html; charset=utf-8');
$headers = "Content-Type: text/html; charset=UTF-8";
$email_subject = "Content-Type: text/html; charset=UTF-8";
$email_body = "Content-Type: text/html; charset=UTF-8";
$errors = '';
$myemail = 'vl.palenik@gmail.com, chci@poetista.cz';

	if(empty($_POST['jmeno'])  ||
	empty($_POST['prijmeni'])  ||
	empty($_POST['telefon'])  ||     
	empty($_POST['email']) || 
	empty($_POST['content']))
	{
		$errors .= "\n Chyba: všechna pole jsou povinná.";
	}

$jmeno = $_POST['jmeno']; 
$prijmeni = $_POST['prijmeni'];
$telefon = $_POST['telefon']; 
$email_address = $_POST['email'];
$content = $_POST['content']; 

	if (!preg_match(
		"/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,})$/i", 
	$email_address))
	{
		$errors .= "\n Chyba: Neplatná emailová adresa";
	}

	if( empty($errors))
	{
		$to = $myemail; 
		$email_subject = "Zpráva z kontaktního formuláře od: $jmeno";
		$email_body = 'Dostal jste zprávu z vaší stránky www.poetista.cz'.
		"Zde jsou detaily zprávy:\n Jméno: $jmeno \n Příjmení $prijmeni \n Email: $email_address \n Telefon: $telefon \n Zpráva: \n $content"; 
		
		$headers = "From: $myemail\n"; 
		$headers .= "Reply-To: $email_address";
		
		mail($to,$email_subject,$email_body,$headers);
		//redirect to the 'thank you' page
		header('Location: contact-form-thank-you.html');
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zpracování kontaktního formuláře</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>