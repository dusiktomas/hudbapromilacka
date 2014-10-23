<?php
class Mailer {

	private $prices = Null;
	private $headers = array(
		'From: info@hudbapromilacka.cz',
		'MIME-Version: 1.0',
		'Content-type: text/html; charset=UTF-8',
	);
	
	public function __construct(){
		$this->prices = new Prices();
	}
	public function sendPackageMail($email, $orderId){
		$message = '
			<html>
			<head>
			   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			   <title>Fillon soutient à fond le retour d\'un Grand Prix de France</title>
			</head>
			<body>
			   <p>Děkujeme za vaši objednávku,<br>
				objednávka byla přijata, číslo objednávky je <b>'.$orderId.'</b>.<br>
				Vaše zboží bude vyexpedováno do 3 pracovních dnů.<br>
				V případě jakýchkoliv dotazů nás kontaktujte na email <b> info@hudbapromilacka.cz </b>.</p>
			</body>
			</html>
		';
		return mail($email, 'Objednávka přijata', $message, implode("\r\n", $this->headers));
	}
	
	public function sendAudioMail($email, $orderId){
		$message = '
			<html>
			<head>
			   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			   <title>Fillon soutient à fond le retour d\'un Grand Prix de France</title>
			</head>
			<body>
			   <p>Děkujeme za vaši objednávku,<br>
				objednávka byla přijata, číslo objednávky je <b>'.$orderId.'</b>.<br>
				Vaši skladbu vám zašleme po připsání částky <b>'.$this->prices->getPrice('skladba').' </b> na účet.<br>
				V případě jakýchkoliv dotazů nás kontaktujte na email <b> info@hudbapromilacka.cz </b>.</p>
			</body>
			</html>
		';
		return mail($email, 'Objednávka přijata', $message, implode("\r\n", $this->headers));
	}
}