<?php


	//Kontakt Forma


	$con_name = trim($_POST['conName']);


	$con_edu = trim($_POST['conEdu']);


	$con_email = trim($_POST['conMail']);


	$con_check = $_POST['conCheck'];


	$con_from = preg_replace("([\r\n])", "", $_POST['conMail']);


	$con_to = 'eduard.kuzma@gmail.com, nikolina.kuzma@gmail.com';


	$con_subject = preg_replace("([\r\n])", "", "$con_name - Savjetovanje");


	$con_submit = $_POST['conSubmit'];


	$con_headers = "MIME-Version: 1.0" . PHP_EOL;


	$con_headers .= "From: $con_from". PHP_EOL;


	$con_headers .= "Content-type: text/html;charset=UTF-8 ". PHP_EOL;


	


	$con_body = " <span style=\"display: inline-block; width: 100%; color: #fff; background-color: #144f71; padding: 15px; margin: -15px 0px 0px -15px;\"><span style=\"color: #e67a20;\">Šalje:</span> $con_name<br/> <span style=\"color: #e67a20;\">E-Mail:</span> <a style=\"color: #ffffff;\" href=\"mailto:$con_email\">$con_email</a><br/></span> <br/><br/><br/><span style=\"display: inline-block; padding: 0px 15px;\"><span style=\"font-weight: bold;\">Zadnje Obrazovanje:</span>&nbsp;&nbsp; $con_edu</span><br/><br/><br/><span style=\"font-style: italic; font-size: 10px; border-top: 1px solid #aaa; color: #aaa;\">*poslano sa www.edunova.hr.</span>";


	


	$spam_match = "/(bcc:|cc:|content\-type:)/i";


	if (preg_match($spam_match, $con_from) || preg_match($spam_match, $con_subject) || preg_match($spam_match, $con_body) || !preg_match("/^[a-žA-Ž ]*$/", $con_name) || !preg_match("/^[a-žA-Ž. ]*$/", $con_edu)) {


		header("Location: http://www.edunova.hr/new/neposlana-poruka/");


  		die();


	} else if (isset($con_submit) && $con_check=='' && $con_name!='' && $con_edu!='' && $con_email!='' || preg_match($spam_match, $con_from) || preg_match($spam_match, $con_subject) || preg_match($spam_match, $con_body)) {			 


		$res=@mail($con_to, $con_subject, $con_body, $con_headers);


		header("Location: http://www.edunova.hr/poruka-poslano/");


		die();


	} else if (isset($con_submit) && $con_check!='') {


		header("Location: http://www.edunova.hr/neposlana-poruka/");


		die();


	} else {


		header("Location: http://www.edunova.hr/neposlana-poruka/");


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