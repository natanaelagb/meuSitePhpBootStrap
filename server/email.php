<?php
	include "../classes/Email.php";

	$mailer = new Email('smtp.gmail.com','natanknight@gmail.com','Jwb8k::3HVHvNe.','Natanael Aguilar Barreto');
	$mailer->addAddress("natanknight@gmail.com","Natanael");

	$corpo = "";
	foreach ($_POST as $key => $value) {
		$corpo .= ucfirst($key)." = ".$value."<hr>";
	}

	$info = array("subject" => "Novo email recebido!", "body" => $corpo, "altbody" => strip_tags($corpo));

	$mailer->content($info);

	$data['return'] = $mailer->send() ? true : false;

	die(json_encode($data));

?>