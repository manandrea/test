<?php





	//Kontakt Forma





	$name = trim($_POST['eduName']);





	$surrname = trim($_POST['eduSurrname']);





	$address = trim($_POST['eduAddress']);





	$city = trim($_POST['eduCity']);





	$phone = trim($_POST['eduPhone']);





	$email = trim($_POST['eduMail']);





	$course = $_POST['Course'];





	$message = trim($_POST['eduMessage']);





	$securityCheck = $_POST['eduCaptcha'];





	$iCheck = $_POST['eduCheck'];





	$from = preg_replace("([\r\n])", "", $_POST['eduMail']);





	$to = 'eduard.kuzma@gmail.com, nikolina.kuzma@gmail.com';





	$subject = preg_replace("([\r\n])", "", "$name $surrname - Upis");





	$submit = $_POST['eduSubmit'];





	$headers = "MIME-Version: 1.0" . PHP_EOL;





	$headers .= "From: $from". PHP_EOL;





	$headers .= "Content-type: text/html;charset=UTF-8 ". PHP_EOL;





	





	$body = " <span style=\"display: inline-block; width: 100%; color: #fff; background-color: #144f71; padding: 15px; margin: -15px 0px 0px -15px;\"><span style=\"color: #e67a20;\">Šalje:</span> $name $surrname<br/> <span style=\"color: #e67a20;\">Adresa:</span> $address<br/> <span style=\"color: #e67a20;\">Grad:</span> $city<br/> <span style=\"color: #e67a20;\">Telefon:</span> $phone<br/> <span style=\"color: #e67a20;\">E-Mail:</span> <a style=\"color: #ffffff;\" href=\"mailto:$email\">$email</a><br/></span> <br/><br/><br/><span style=\"display: inline-block; padding: 0px 15px;\"><span style=\"font-weight: bold;\">$name $surrname</span> želi upisati smjer <span style=\"font-weight: bold;\">$course</span><br/><br/>$message</span><br/><br/><br/><span style=\"font-style: italic; font-size: 10px; border-top: 1px solid #aaa; color: #aaa;\">*poslano sa www.edunova.hr.</span>";





	





	$spam_match = "/(bcc:|cc:|content\-type:)/i";





	if (preg_match($spam_match, $from) || preg_match($spam_match, $subject) || preg_match($spam_match, $body) || !preg_match("/^[a-žA-Ž ]*$/", $name) || !preg_match("/^[a-žA-Ž ]*$/", $surrname) || !preg_match("/^[a-žA-Ž ]*$/", $city) || $course=="izaberi") {





		header("Location: http://www.edunova.hr/neposlana-poruka-upisi/");





  		die();





	} else if (isset($submit) && $securityCheck=='3' && $iCheck=='' && $name!='' && $surrname!='' && $address!='' && $city!='' && $phone!='' && $email!='' && $from!='' && $message!='' && $course!="izaberi" && !preg_match($spam_match, $from) && !preg_match($spam_match, $subject) && !preg_match($spam_match, $body)) {			 





		$res=@mail($to, $subject, $body, $headers);





		header("Location: http://www.edunova.hr/poslana-poruka-upisi/");





		die();





	} else if (isset($submit) && $securityCheck!='3' && $iCheck!='' && $course=="izaberi") {





		header("Location: http://www.edunova.hr/neposlana-poruka-upisi/");





		die();





	} else {





		header("Location: http://www.edunova.hr/neposlana-poruka-upisi/");





		die();





	}





?>





<html>





	<head>





		<meta name="robots" content="noindex, nofollow, nocache, noarchive, nosnippet"></meta>





	</head>





	<body>





	</body>





</html>