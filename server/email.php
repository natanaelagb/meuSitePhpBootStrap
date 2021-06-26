<?php
	include "../classes/Email.php";

	$mailer = new Email('smtp.gmail.com','seuemail','suasenha','Natanael Aguilar Barreto');
	$mailer->addAddress("email de destino","Natanael");

	$corpo = "";
	foreach ($_POST as $key => $value) {
		$corpo .= ucfirst($key)." = ".$value."<hr>";
	}

	$info = array("subject" => "Novo email recebido!", "body" => $corpo, "altbody" => strip_tags($corpo));

	$mailer->content($info);

	$data['return'] = $mailer->send() ? true : false;

	die(json_encode($data));

?>
