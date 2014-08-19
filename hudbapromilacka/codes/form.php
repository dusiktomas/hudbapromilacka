<?php
include 'classes/order/Order.php';
include 'classes/order/Audio.php';
include 'classes/order/Customer.php';
include 'classes/order/Prices.php';



if(isset($_POST["jmeno"]) && isset($_POST["mesto"])){
	$typ = htmlspecialchars($_POST["typ"]);
    $jmeno = htmlspecialchars($_POST["jmeno"]);
    $prijmeni = htmlspecialchars($_POST["prijmeni"]);
    $email = htmlspecialchars($_POST["email"]);
    $mesto = htmlspecialchars($_POST["mesto"]);
    $ulice = htmlspecialchars($_POST["ulice"]);
    $psc = htmlspecialchars($_POST["psc"]);
    $datum = date("D:m:Y");
    $skladba = htmlspecialchars($_POST["skladba"]);
    $prani = htmlspecialchars($_POST["prani"]);
	
	$customerArray = array(
		'jmeno' => $jmeno,
		'prijmeni' => $prijmeni,
		'email' => $email,
		'ulice' => $ulice,
		'psc' => $psc,
		'mesto' => $mesto,
	);
	
	$customer = new Customer($customerArray);
	
	if(!$customer->isExists()){
	  return Redirection::orderRedirectToError();
	}
	
	$orderArray = array(
		'typ' => $typ,
		'prani' => $prani,
		'audio' => Audio::getAudioIdByName($skladba),
		'cena' => Prices::getAudioPrice(),
		'datum_objednani' => date('d-m-y:H:i'),
		'customer' => $customer->getId(),
	);
	
	$order = new Order($orderArray);

	
	if(Audio::getAudioIdByName($skladba) === Null){
	  return Redirection::orderRedirectToError();
	}
	
	Redirection::orderRedirectToSuccess();	
}

?>